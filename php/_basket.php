<?php
session_start();
require_once("function.php");
require_once("classBase.php");
require_once("classLog.php");
$db=new Baza();
$db->connect();
if(login())
{
    //IF FUNCTION IS SET THEN ADD TO CART, ORDER OR REMOVE FROM BASKET
    if(isset($_GET['funkcija']))
    {
        $function=$_GET['funkcija'];

        //ADD TO CART SQL
        if($function=="add_to_cart")
        {
            $productsID=$_GET['productID'];
            $users_id=$_SESSION['users_id'];
            $sql="INSERT INTO basket (users_id,products_id ) VALUES ('{$users_id}', '{$productsID}') ";
            $db->query($sql);
            Log::upisiLog("../logs/korpa.txt", "{$_SESSION['users_name']} čiji je ID  {$_SESSION['users_id']} je dodao u korpu proizvod sa ID {$productsID}");
        }

        //NUMBER OF PRODUCTS IN CART
        if($function=="cart_product_number")
        {
            $output="";
            $sql="SELECT * FROM basket WHERE users_id='{$_SESSION['users_id']}' AND accepted=1";
            $result=$db->query($sql);
            echo $output.=$db->num_rows($result);
        }
        
        //DELETE PRODUCTS FROM BASKET
        if($function=="remove_from_basket")
        {
            $productsID=$_POST['productID'];
            $output="";
            $sql="UPDATE basket SET accepted=0 WHERE users_id='{$_SESSION['users_id']}' AND products_id='{$productsID}' ";
            $db->query($sql);
            echo $output.="Uspesno ste obrisali proizvod iz korpe!";
            Log::upisiLog("../logs/korpa.txt", "{$_SESSION['users_name']} čiji je ID  {$_SESSION['users_id']} je obrisao iz korpe proizvod sa ID {$productsID}");
        }
         
        //ORDER PRODUCTS FROM BASKET
        if($function=="order_products")
        {
            $output="";
            $sql="UPDATE basket SET accepted=2 WHERE users_id='{$_SESSION['users_id']}' AND accepted=1";
            $db->query($sql);
            echo $output.="Uspešno ste izvršili kupovinu. Očekujte isporuku u roku od 3-5 radnih dana!";
            Log::upisiLog("../logs/korpa.txt", "{$_SESSION['users_name']} čiji je ID  {$_SESSION['users_id']} je uspesno izvrsio kupovinu");
        }
    }

    //IF FUNCTION IS NOT SET THEN LOAD DATA ON BASKET.PHP
    else
    {
        //ON LOAD basket.php page
        $sql="SELECT * FROM basket_view WHERE users_id='{$_SESSION['users_id']}' AND accepted=1";
        $db->query($sql);
        $result=$db->query($sql);
        $output="";
        if($db->num_rows($result)==0)
        {
            //If basket is empty show this message
            $output.="<div class='col-lg-12 col-md-12 col-12 alert alert-primary' role='alert'>
                            <i class='fas fa-shopping-cart'></i><br> Vaša korpa je prazna. Nemate proizvoda u korpi.
                    </div>";
        }  
        else
        {
            //if there is products in basket, create table with products
            $output.="<table class='table table-responsive table-hover table-bordered'>";
            $output.="<thead>";
            $output.="<tr>";
            $output.="<th scope='col'>Šifra proizvoda</th>";
            $output.="<th scope='col'>Slika</th>";
            $output.="<th scope='col'>Naziv</th>";
            $output.="<th scope='col'>Boja</th>";
            $output.="<th scope='col'>Materijal</th>";
            $output.="<th scope='col'>Opis</th>";
            $output.="<th scope='col'>Cena</th>";
            $output.="<th scope='col'>Ukloni</th>";
            $output.="</thead>";
            $output.="<tbody>";
            while($row=$db->fetch_object($result))
            {
                $output.="<tr>";
                $output.="<th scope='row'>#".$row->products_id."</th>";
                $output.="<td><img class='img-fluid' src='admin-platform/products_pics/".$row->products_id.".jpg' alt='Responsive image'></td>";
                $output.="<td class='table_name'>".$row->products_name."</td>";
                $output.="<td class='table_color'>".$row->products_color."</td>";
                $output.="<td class='table_material'>".$row->products_material."</td>";
                $output.="<td class='table_describe'>".$row->products_describe."</td>";
                $output.="<td>".$row->products_price." RSD</td>";
                $output.="<td><i class='fas fa-trash cart-trash' id='$row->products_id'></i></td>";
                $output.="</tr>";
            }
                $output.="</tbody>";
            $output.="</table>";

            //SQL query for sum price of ordered products
            $sql="SELECT SUM(products_price) AS sum FROM basket_view WHERE users_id='{$_SESSION['users_id']}' AND accepted=1";
            $res=$db->query($sql);
            $red=$db->fetch_object($res);

            //button for order all products from basket
            $output.="<div class='col-lg-6 col-md-6 col-6 text-left'>";
                $output.="<button class='btn' id='order_products'>Poručite proizvode</button>";
            $output.="</div>";

            //SUM of all products from basket
            $output.="<div class='col-lg-6 col-md-6 col-6 text-right'>";
                $output.="<h6>Ukupna cena: <b>".$red->sum." RSD</b></h6>";
            $output.="</div>";
        }
        echo $output;
    }
}
else
{
    echo "login";
}

?>