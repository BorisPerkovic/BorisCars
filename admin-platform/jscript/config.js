/*===========================
  ADMIN PLATFORM JS
=============================*/


$(document).ready(function(){

/*===========================
  LOGIN SECTION
=============================*/

  //LOG IN
  $("#admin_login_btn").click(function(){
    var username=$("#admin_email").val();
    var password=$("#admin_password").val();
    let remember=$("#remember").attr("checked");
    if(remember==true)remember="1";
    else remember="0";
    if(username!="" && password!="")
    {
      $.ajax({
        url:"php/logIn.php",
        method:"POST",
        data:{username:username, password:password, remember:remember},
        success:function(response){
          answer=JSON.parse(response);
          if(answer.error!="")
          {
            $("#admin_error").text(answer.error);
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
      $("#admin_error").text("Niste popunili sva polja! Sva polja su obavezna!");
    }
  });


  //Making active link background depends on active URL in navbar_middle-JAVASCRIPT
  const currentLocation=location.href;
  const menuItem=document.getElementsByClassName('navbara');
  const menuLenth=menuItem.length;
  for(let i = 0; i<menuLenth;i++)
  {
    if(menuItem[i].href===currentLocation)
    {
      menuItem[i].className="nav-link navbara active";
    }
    else{
      menuItem[i].className="nav-link navbara";
    }
  }


  //Making active tr background depends on click tr in table data
  $(document).on('click', '.linked',function(){
      $(this).addClass('table-active linked').siblings().removeClass('table-active');
  });


});