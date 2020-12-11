/*==================================
  ADMIN SERVICE STATISTICS SECTION
====================================*/
$(document).ready(function(){

//On load page for navbar in dropdown-menu: model, glitch,serviceView

  //load models dropdown
  $.post("php/service_on_load.php", function(response){
    let answer=JSON.parse(response);
    for(i in answer)
      $("#admin_model").append("<label class='dropdown-item form-check-label'><input type='checkbox' class='form-check-input common_selector model' value='"+answer[i].models_name+"'> "+answer[i].models_name+"</label>");
  });

//load glitch dropdown
  $.post("php/glitch_on_load.php", function(response){
    let answer=JSON.parse(response);
    for(i in answer)
      $("#admin_glitch").append("<label class='dropdown-item form-check-label'><input type='checkbox' class='form-check-input common_selector glitch' value='"+answer[i].glitch_name+"'> "+answer[i].glitch_name+"</label>");
  });

//load serviceView
  $.post("php/service_table_load.php", function(response){
    let answer=JSON.parse(response);
    for(i in answer)
      $("#table_body").append("<tr class='linked'><th scope='row' data-id='"+answer[i].service_id+"' class='td_service'>"+answer[i].service_id+"</th><td data-id='"+answer[i].service_id+"' class='td_service'>"+answer[i].models_name+"</td><td data-id='"+answer[i].service_id+"' class='td_service'>"+answer[i].glitch_name+"</td><td data-id='"+answer[i].service_id+"' class='td_service'>"+answer[i].service_date+"</td><td data-id='"+answer[i].service_id+"' class='td_service'>"+answer[i].serviced+"</td></tr>");
  });



  //Filters for serviceStatistics
  function filter_data()
  {
    $("#loader").show();
    var action='fetch_data';
    var model=get_filter('model');
    var glitch=get_filter('glitch');
    var status=get_filter('status');
    var startDate=$("#startDate").val();
    var endDate=$("#endDate").val();
    var search=$("#search").val();
    $.ajax({
      url: 'php/_serviceStatistics.php',
      method: 'POST',
      data:{action:action, model:model, glitch:glitch, status:status, startDate:startDate, endDate:endDate,search:search},
      success: function(data){
       $("#loader").hide();
       $('#table_body').html(data);
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
  $(document).on('click', '.common_selector', function(){
    //$("#loader").show();
    filter_data();
  });

  //On click table row, showing right part with datas 
  $(document).on('click', '.td_service', function(){
    var service_id=$(this).data("id");
      $.ajax({
        url: 'php/_serviceStatistics.php?funkcija=right_part',
        method: 'POST',
        data:{service_id:service_id,},
        success: function(response){
        $('#data_servis').html(response);
        }
      });
  });


});