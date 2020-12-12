$(document).ready(function(){

/*===========================
  LOGIN AND REGISTRY SECTION
=============================*/

    //LOG IN
    $("#logIn").click(function(){
      var username=$("#username").val();
      var password=$("#password").val();
      let remember=$("#remember").attr("checked");
      if(remember==true)remember="1";
      else remember="0";
      if(username!="" && password!="")
      {
          $.ajax({
          url:"php/logIn?login.php",
          method:"POST",
          data:{username:username, password:password, remember:remember},
          success:function(response){
            answer=JSON.parse(response);
            if(answer.error!="")
            {
              $("#loginError").text(answer.error);
            } 
            else
            {
              window.location.assign(answer.location);
            }  
          }
        });
      }
      else
      {
        $("#loginError").text("Niste popunili sva polja! Sva polja su obavezna!");
      }
  });
      
      //REGISTRY
      $("#registry").click(function(){
        var name=$("#name").val();
        var lastname=$("#lastname").val();
        var email=$("#email").val();
        var pass=$("#pass").val();
        var passrepeat=$("#passrepeat").val();
        var addres=$("#addres").val();
        var phone=$("#phone").val();
        if(name!="" && lastname!="" && email!="" && pass!="" && passrepeat!="" && addres!="" && phone!="")
        {
          $.ajax({
            url:"php/registry.php",
            method:"POST",
            data:{name:name, lastname:lastname, email:email, pass:pass, passrepeat:passrepeat, addres:addres, phone:phone},
            success:function(data){
                if(data == "Lozinka")
                {
                  $("#registryError").text("Lozinka i ponovljena lozinka se ne poklapaju!!");
                }
                else
                {
                  $("#signupPage").hide();
                  location.reload();
                  alert("Uspešno ste se registrovali. Želimo Vam srećnu i uspešnu kupovinu!");
                }
                
            }
          });
        }
        else
        {
          $("#registryError").text("Niste popunili sva polja! Sva polja su obavezna!");
        }
      });  

/*============================
  SERVICE SECTION
==============================*/

    //On load service page
    $("#service_model").load("php/models_on_load.php",function(response){
      let answer=JSON.parse(response);
      for(i in answer)
        $("#service_model").append("<option value="+answer[i].models_id+">"+answer[i].models_name+"</option>");
    });

    $("#service_glitch").load("php/glitch_on_load.php",function(response){
      let answer=JSON.parse(response);
      for(i in answer)
        $("#service_glitch").append("<option value="+answer[i].glitch_id+">"+answer[i].glitch_name+"</option>");
    });

    //Inserting details from service.php into service table
      $("#servis_btn").click(function(){
        var service_name=$("#service_name").val();
        var service_lastname=$("#service_lastname").val();
        var service_email=$("#service_email").val();
        var service_phone=$("#service_phone").val();
        var service_model=$("#service_model").val();
        var service_glitch=$("#service_glitch").val();
        var service_describe=$("#service_describe").val();
        if(service_name!="" && service_lastname!="" && service_email!="" && service_phone!="" && service_model!="" && service_glitch!="" && service_describe!="")
        {
            $.ajax({
              url:"php/_service.php?funkcija=zakazivanje_servis",
              method:"POST",
              data:{service_name:service_name, service_lastname:service_lastname, service_email:service_email, service_phone:service_phone, service_model:service_model, service_glitch:service_glitch, service_describe},
              success:function(response){
                  $("input").val("");
                  $("#service_describe").val("");
                  $("#error").text(response);
              }
            });
        }
        else
        {
          $("#error").text("Niste popunili sva polja. Sva polja su obavezna!");
        }
      });

    
/*============================
  TEST DRIVE SECTION
==============================*/

    //On load testDrive page
    $("#testDrive_model").load("php/models_on_load.php",function(response){
      let answer=JSON.parse(response);
      for(i in answer)
        $("#testDrive_model").append("<option value="+answer[i].models_id+">"+answer[i].models_name+"</option>");
    });

    //Inserting details from test_drive.php into test_drive table
      $("#testDrive_btn").click(function(){
        var testDrive_name=$("#testDrive_name").val();
        var testDrive_lastname=$("#testDrive_lastname").val();
        var testDrive_email=$("#testDrive_email").val();
        var testDrive_phone=$("#testDrive_phone").val();
        var testDrive_model=$("#testDrive_model").val();
        if(testDrive_name!="" && testDrive_lastname!="" && testDrive_email!="" && testDrive_phone!="" && testDrive_model!="")
        {
            $.ajax({
              url:"php/_test_drive.php?funkcija=zakazivanje_testDrive",
              method:"POST",
              data:{testDrive_name:testDrive_name, testDrive_lastname:testDrive_lastname, testDrive_email:testDrive_email, testDrive_phone:testDrive_phone, testDrive_model:testDrive_model},
              success:function(data){
                  $("input").val("");
                  $("#error").text("Uspešno ste zakazali test vožnju. Naše kolege će Vas pozvati za dalja uputstva!");
              }
            });
        }
        else
        {
          $("#error").text("Niste popunili sva polja. Sva polja su obavezna!");
        }
      });

/*============================
  SHOP SECTION
==============================*/

    //On load shop page
    $("#shop_row").load("php/shop_on_load.php",function(response){
      let answer=JSON.parse(response);
      $("#shop_row").html("");
      for(i in answer)
     $("#shop_row").append("<div class='col-lg-3 col-md-4 col-sm-6 col-6 shop_cards'><div class='card-group'><div class='card'><img class='card-img-top img-fluid' src='admin-platform/products_pics/"+answer[i].products_id+".jpg' alt='Responsive image'><div class='card-body'><h5 class='card-title text-danger'>"+answer[i].products_price+" RSD</h5><p class='card-text shop_text'><b>Naziv:</b> "+answer[i].products_name+"</p><p class='card-text shop_text'><p class='card-text shop_text'><b>Opis:</b> "+answer[i].products_describe+"</p></div><div class='card-footer'><button class='btn btn-block cart' id='"+answer[i].products_id+"'>Dodaj u <i class='fas fa-shopping-cart'></i></button></div></div></div>");
    });

    //Add to cart button- also use basket function for showing number of products in cart cartProductsNumber();
    $(document).on('click', '.cart', function(){
        var productID= $(this).attr("id");
        $.ajax({
          url:'php/_basket.php?funkcija=add_to_cart',
          method:'GET',
          data:{productID: productID},
          success: function(data){
            if(data== "login")
            {
              alert("Morate biti ulogovani da biste mogli da poručujete!!");
            }
            else
            {
              cartProductsNumber();
              alert("Uspešno ste dodali proizvod u korpu");
            }
          }
        });
    });

/*============================
  BASKET SECTION
==============================*/

  //On load basket page
  $(function(){
    onLoadBasket();
    cartProductsNumber();
  });

    //load products-function
    function onLoadBasket()
    {
      $.post("php/_basket.php", function(response){
        $("#basket_row").html(response)
      });
    }

    //Number of products in cart after removing or order products(also used in shopsection for ad to cart)-function
    function cartProductsNumber()
    {
      $.post("php/_basket.php?funkcija=cart_product_number", function(response){
        $(".cart_product_number").text(response)
      });
    }

    //Order all products-function 
    function orderAllProducts()
    {
      $.post("php/_basket.php?funkcija=order_products", function(response){
        alert(response);
      });
    }

    //Delete products from basket page
    $(document).on('click', '.cart-trash', function(){
        if(!confirm("Da li ste sigurni da želite da obrišete proizvod iz korpe?"))
        {
          return false;
        } 
        else
        {
          var productID= $(this).attr("id");
          $.post("php/_basket.php?funkcija=remove_from_basket", {productID:productID}, function(response){
          alert(response);
          onLoadBasket();
          cartProductsNumber();
          });
        }
    });

    //Order all products
    $(document).on('click', '#order_products', function(){
        if(!confirm("Da li ste sigurni da želite da poručite proizvode iz korpe?"))
        {
          return false;
        } 
        else
        {
          orderAllProducts();
          onLoadBasket();
          cartProductsNumber();
        }
    });


    /* Back top
      -----------------------------------------------*/
      $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
        $('.go-top').fadeIn(200);
        } else {
          $('.go-top').fadeOut(200);
        }
        });   
        // Animate the scroll to top
      $('.go-top').click(function(event) {
        event.preventDefault();
      $('html, body').animate({scrollTop: 0}, 300);
      })

});