<?php
session_start();
require_once("function.php");
require_once("classBase.php");
require_once("../../php/classLog.php");
$db=new Baza();
$db->connect();
if(!$db)
{
    echo "Došlo je do greške prilikom konekcije na bazu podataka".mysqli_connect_error();
    die();
}
if(isset($_GET['funkcija']))
{
    $funkcija=$_GET['funkcija'];

    //Puting products in select option on load for produtcs
    if($funkcija=="select")
    {  
        $products_id=$_POST['products_id'];
        $sql="SELECT * FROM products WHERE products_id='$products_id'";
        $res=$db->query($sql);
        $all=mysqli_fetch_all($res, MYSQLI_ASSOC);
        echo JSON_encode($all,256);
    }

    //Inserting new product
    if($funkcija=="insert"){
        $products_name=$_POST['products_name'];
        $products_material=$_POST['products_material'];
        $products_price=$_POST['products_price'];
        $products_color=$_POST['products_color'];
        $products_describe=$_POST['products_describe'];
        if($products_name!="" AND $products_material!="" AND $products_price!="" AND $products_color!="" AND $products_describe!="")
        {   
            $sql="INSERT INTO products (products_name, products_material, products_price, products_color, products_describe) VALUES ('{$products_name}', '{$products_material}', '{$products_price}', '{$products_color}', '{$products_describe}') ";
            $res=$db->query($sql);
            if(mysqli_error($db))
            {
                echo "GRESKA!!!!<br>".mysqli_error($db);
            }
            else
            {
                $imgName=$db->insert_id($db);
                move_uploaded_file($_FILES['image']['tmp_name'],"../products_pics/$imgName.jpg");
                echo "Uspesno dodat proizvod";
                Log::upisiLog("../../logs/proizvodi.txt", "{$_SESSION['admin_name']} {$_SESSION['admin_lastname']}  je dodao novi proizvod {$products_name}");
            
    
            }
        }
        else
        {
            echo "Niste uneli sve podatke!!";
            exit;
        }
            
               
    }

    //Update or change products
    if($funkcija=="update"){
        $products_id=$_POST['update-disabled'];
        $products_name=$_POST['update_name'];
        $products_material=$_POST['update_material'];
        $products_price=$_POST['update_price'];
        $products_color=$_POST['update_color'];
        $products_describe=$_POST['update_describe'];
        if($products_id!="" AND $products_name!="" AND $products_material!="" AND $products_price!="" AND $products_color!="" AND $products_describe!="")
        {
                $sql="UPDATE products SET products_name='{$products_name}', products_material='{$products_material}', products_color='{$products_color}', products_price='{$products_price}', products_describe='{$products_describe}' WHERE products_id='{$products_id}' ";
                $db->query($sql);
                if(mysqli_error($db))
                {
                    echo "GRESKA!!!!<br>".mysqli_error($db);
                }
                else
                {

                    move_uploaded_file($_FILES['image_update']['tmp_name'],"../products_pics/".$products_id.".jpg");
                    echo "Uspešno ste izmenili proizvod";
                    Log::upisiLog("../../logs/proizvodi.txt", "{$_SESSION['admin_name']} je izmenio proizvod sa ID {$products_id} i nazivom {$products_name}");
                }  
            
        }
        else
        {
            echo "Niste uneli sve podatke!!";
            exit;
        }
            
               
    }

    //Delete products section
    if($funkcija=="delete"){
        $delete_id=$_POST['delete_id'];
        if($delete_id!="")
        {
                $sql="UPDATE products SET active=0 WHERE products_id='{$delete_id}' ";
                $db->query($sql);
                if(mysqli_error($db))
                {
                    echo "GRESKA!!!!<br>".mysqli_error($db);
                }
                else
                {
                    echo "Uspešno ste obrisali proizvod";
                    Log::upisiLog("../../logs/proizvodi.txt", "{$_SESSION['admin_name']} je obrisao proizvod sa ID {$delete_id}");
                }   
        }
        else
        {
            echo "Niste uneli sve podatke!!";
            exit;
        }           
    }
}



?>