/*===========================
  ADMIN PLATFORM JS
=============================*/


$(document).ready(function(){

/*===========================
      PRODUCTS SECTION
=============================*/

//Changing section for products on click in nav-bar bottom...add, update or delete product
$("#adding_product").click(function(){
    $("#updeting_product_section").hide();
    $("#deleting_product_section").hide();
    $("#adding_product_section").show();
    $("input").val("");
    $("#error").empty();
});

$("#updeting_product").click(function(){
    $("#adding_product_section").hide();
    $("#deleting_product_section").hide();
    $("#updeting_product_section").show();
    $("input").val("");
    $("#inputGroupSelect01").empty();
    loadSelectProduct();
    $("#error_update").empty();
});

$("#deleting_product").click(function(){
    $("#adding_product_section").hide();
    $("#updeting_product_section").hide();
    $("#deleting_product_section").show();
    $("input").val("");
    $("#inputGroupSelect02").empty();
    loadDeleteProduct();
    $("#error_delete").empty();
});




/*------------------------
ADDING NEW PRODUCT SECTION
--------------------------*/

//ADD new product
$("#add_prodduct").click(function(){
  var products_name=$("#products_name").val();
  var products_material=$("#products_material").val();
  var products_price=$("#products_price").val();
  var products_color=$("#products_color").val();
  var products_describe=$("#products_describe").val();
  var image=$("#image").val();
  if(products_name!="" && products_material!="" && products_price!="" && products_color!="" && products_describe!="" && image!="")
  {
      $.ajax({
          url: "php/_products.php?funkcija=insert",
          type: "POST",
          data: new FormData(document.getElementById('products_form')),
          contentType:false,
          cache:false,
          processData:false,
          success: function(data){
              $("input").val("");
              $("#error").text("Uspešno ste dodali proizvod");
          }
      });
  }
  else
  {
    $("#error").text("Niste popunili sva polja! Sva polja su obavezna!");
  }
});

/*------------------------
UPDATE PRODUCTS SECTION
--------------------------*/

  function loadSelectProduct()
  {
    //load update select option
    $.post("php/products_on_load.php", function(response){
      let answer=JSON.parse(response);
      for(i in answer)
        $("#inputGroupSelect01").append("<option value='"+answer[i].products_id+"'>"+answer[i].products_name+"</option>");
    });
  }
  
    //On click chose button in update section, putting product information in input fields
    $("#product_chose_update").click(function(){
      var products_id=$('#inputGroupSelect01').val();
      if(products_id!=0)
      {
          $.ajax({
              url:"php/_products.php?funkcija=select",
              method:'POST',
              data: {products_id:products_id},
              success: function(response){
              var answer=JSON.parse(response);
              for (i in answer)
              $("#update-disabled").val(answer[i].products_id);
              $("#update_name").val(answer[i].products_name);
              $("#update_material").val(answer[i].products_material);
              $("#update_price").val(answer[i].products_price);
              $("#update_color").val(answer[i].products_color);
              $("#update_describe").val(answer[i].products_describe);
              }
          })
      }
      else
      {
          alert("Niste izabrali proizvod");
      }
  });

  //UPDATE product
  $("#update_prodduct").click(function(){
    var update_id=$("#update-disabled").val();
    var update_name=$("#update_name").val();
    var update_material=$("#update_material").val();
    var update_price=$("#update_price").val();
    var update_color=$("#update_color").val();
    var update_describe=$("#update_describe").val();
    if(update_id!="" && update_name!="" && update_material!="" && update_price!="" && update_color!="" && update_describe!="")
    {
      if(!confirm("Da li ste sigurni da želite da izmenite proizvod?"))
      {
          return false;
      }
      else
      {
        $.ajax({
          url: "php/_products.php?funkcija=update",
          type: "POST",
          data: new FormData(document.getElementById('update_form')),
          contentType:false,
          cache:false,
          processData:false,
          success: function(data){
                $("input").val("");
                $("#inputGroupSelect01").empty();
                loadSelectProduct();
                $("#error_update").text("Uspešno ste izmenili proizvod");
            }
        });
      }  
    }
    else
    {
      $("#error_update").text("Niste popunili sva polja! Sva polja su obavezna!");
    }
  });

/*------------------------
DELETE PRODUCT SECTION
--------------------------*/


  function loadDeleteProduct()
  {
    //load delete select option
    $.post("php/products_on_load.php", function(response){
      let answer=JSON.parse(response);
      for(i in answer)
        $("#inputGroupSelect02").append("<option value='"+answer[i].products_id+"'>"+answer[i].products_name+"</option>");
    });
  }

  //On click chose button in delete section, putting product information in input fields
  $("#product_chose_delete").click(function(){
    var products_id=$('#inputGroupSelect02').val();
    if(products_id!=0)
    {
        $.ajax({
            url:"php/_products.php?funkcija=select",
            method:'POST',
            data: {products_id:products_id},
            success: function(response){
            var answer=JSON.parse(response);
            for (i in answer)
            $("#delete-disabled").val(answer[i].products_id);
            $("#delete_name").val(answer[i].products_name);
            $("#delete_material").val(answer[i].products_material);
            $("#delete_price").val(answer[i].products_price);
            $("#delete_color").val(answer[i].products_color);
            $("#delete_describe").val(answer[i].products_describe);
            }
        })
    }
    else
    {
        alert("Niste izabrali proizvod");
    }
  });
  
    //DELETE product
    $("#delete_prodduct").click(function(){
      var delete_id=$("#delete-disabled").val();
      if(delete_id!="")
      {

        if(!confirm("Da li ste sigurni da želite da obrisete proizvod?"))
        {
            return false;
        }
        else
        { 
          $.ajax({
            url: "php/_products.php?funkcija=delete",
            type: "POST",
            data: {delete_id: delete_id},
            success: function(data){
              $("input").val("");
              $("#inputGroupSelect02").empty();
              loadDeleteProduct();
              $("#error_delete").text("Uspešno ste obrisali proizvod");
            }
          });
        }  
      }
      else
      {
        $("#error_delete").text("Niste popunili sva polja! Sva polja su obavezna!");
      }
    });
      
    
    
});