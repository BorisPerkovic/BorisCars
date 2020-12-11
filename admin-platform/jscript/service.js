/*==================================
  ADMIN SERVICE SECTION
====================================*/
$(document).ready(function(){

//On load page for navbar in dropdown-menu: model, glitch,serviceView
$(function(){
  onLoadServiceModel();
  onLoadServiceGlitch();
  //onLoadTestDrive();
  onLoadServiceView()
});

  //load models dropdown
  function onLoadServiceModel()
  {
    $.post("php/service_on_load.php", function(response){
      let answer=JSON.parse(response);
      for(i in answer)
        $("#admin_model_service").append("<label class='dropdown-item form-check-label'><input type='checkbox' class='form-check-input service_selector model' value='"+answer[i].models_name+"'> "+answer[i].models_name+"</label>");
    });
  }

  //load glitch dropdown
  function onLoadServiceGlitch()
  {
    $.post("php/glitch_on_load.php", function(response){
      let answer=JSON.parse(response);
      for(i in answer)
        $("#admin_glitch_service").append("<label class='dropdown-item form-check-label'><input type='checkbox' class='form-check-input service_selector glitch' value='"+answer[i].glitch_name+"'> "+answer[i].glitch_name+"</label>");
    });
  }

  //load serviceView
  function onLoadServiceView()
  {
    $.post("php/service_table_load.php", function(response){
      let answer=JSON.parse(response);
      for(i in answer)
        $("#table_body_service").append("<tr class='linked'><th scope='row' data-id='"+answer[i].service_id+"' class='td_service'>"+answer[i].service_id+"</th><td data-id='"+answer[i].service_id+"' class='td_service'>"+answer[i].models_name+"</td><td data-id='"+answer[i].service_id+"' class='td_service'>"+answer[i].glitch_name+"</td><td data-id='"+answer[i].service_id+"' class='td_service'>"+answer[i].service_date+"</td><td data-id='"+answer[i].service_id+"' class='td_service'>"+answer[i].serviced+"</td></tr>");
    });
  }


  
    //Filters for service
    function filter_data()
    {
      $("#loader").show();
      var action='fetch_data';
      var model=get_filter('model');
      var glitch=get_filter('glitch');
      var status=get_filter('status');
      var startDate=$("#startDate").val();
      var endDate=$("#endDate").val();
      var search=$("#search_service").val();
      $.ajax({
        url: 'php/_service.php',
        method: 'POST',
        data:{action:action, model:model, glitch:glitch, status:status, startDate:startDate, endDate:endDate,search:search},
        success: function(data){
         $("#loader").hide();
         $('#table_body_service').html(data);
        }
      });
    }
    

    function get_filter(class_name){
      var filter = [];
      $('.'+class_name+':checked').each(function(){
         filter.push($(this).val());
      });
      return filter;
    };

    //On click date and filters class
    $(document).on('click', '.service_selector', function(){
      //$("#data_servis").hide();
      filter_data();
    });
        
    //On click table row, showing right part with datas
    $(document).on('click', '.td_service', function(){
        var service_id=$(this).data("id");
          $.ajax({
            url: 'php/_service.php?funkcija=right_part',
            method: 'POST',
            data:{service_id:service_id,},
            success: function(response){
                $('#data_servis').html(response);
            }
          });
      }); 
    

    //Button for accepting service on service page
    $(document).on('click', '#accept_service', function(){
      if(!confirm("Da li ste sigurni da želite da prihvatite servis?"))
      {
          return false;
      } 
      else
      {
        var service_number=$("#service_number").text();
        $.ajax({
        url: 'php/_service.php?funkcija=accept_service',
        method: 'POST',
        data:{service_number:service_number,},
        success: function(response){
          alert("Uspešno ste servisirali vozilo!");
          filter_data();
        }
        });
      }   
    });

    //Button for deny service on service page
    $(document).on('click', '#deny_service', function(){
        if(!confirm("Da li ste sigurni da želite da odbacite servis?"))
        {
            return false;
        } 
        else
        {
          var service_number=$("#service_number").text();
          $.ajax({
          url: 'php/_service.php?funkcija=deny_service',
          method: 'POST',
          data:{service_number:service_number,},
          success: function(response){
            alert("Uspešno ste odbacili servis!");
            filter_data();
            }
          });
        }
    });
});