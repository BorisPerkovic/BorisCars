/*==================================
  ADMIN TEST DRIVE STATISTICS SECTION
====================================*/
$(document).ready(function(){

    //On load page for navbar in dropdown-menu: model,testDriveView
    $(function(){
      onLoadDriveModel();
      //onLoadTestDrive();
      onLoadDriveView()
    });
    
      //load models dropdown
      function onLoadDriveModel()
      {
        $.post("php/testDrive_on_load.php", function(response){
          let answer=JSON.parse(response);
          for(i in answer)
            $("#admin_model_data").append("<label class='dropdown-item form-check-label'><input type='checkbox' class='form-check-input testDrive_selector model' value='"+answer[i].models_name+"'> "+answer[i].models_name+"</label>");
        });
      }
    
      //load testDriveView
      function onLoadDriveView()
      {
        $.post("php/testDrive_table_load.php", function(response){
          let answer=JSON.parse(response);
          for(i in answer)
            $("#admin_table_data").append("<tr class='linked'><th scope='row' data-id='"+answer[i].testDrive_id+"' class='td_testDrive'>"+answer[i].testDrive_id+"</th><td data-id='"+answer[i].testDrive_id+"' class='td_testDrive'>"+answer[i].models_name+"</td><td data-id='"+answer[i].testDrive_id+"' class='td_testDrive'>"+answer[i].testDrive_date+"</td><td data-id='"+answer[i].testDrive_id+"' class='td_testDrive'>"+answer[i].serviced+"</td></tr>");
        });
      }
    
    
      
        //Filters for testDrive
        function filter_data()
        {
          $("#loader").show();
          var action='fetch_data';
          var model=get_filter('model');
          var status=get_filter('status');
          var startDate=$("#startDate").val();
          var endDate=$("#endDate").val();
          var search=$("#search_DriveStatistics").val();
          $.ajax({
            url: 'php/_testDriveStatistics.php',
            method: 'POST',
            data:{action:action, model:model, status:status, startDate:startDate, endDate:endDate,search:search},
            success: function(data){
             $("#loader").hide();
             $('#table_body_testDrive').html(data);
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
        $(document).on('click', '.testDrive_selector', function(){
          filter_data();
        });
            
        //On click table row, showing right part with datas
        $(document).on('click', '.td_testDrive', function(){
            var service_id=$(this).data("id");
              $.ajax({
                url: 'php/_testDriveStatistics.php?funkcija=right_part',
                method: 'POST',
                data:{service_id:service_id,},
                success: function(response){
                    $('#data_drive').html(response);
                }
              });
          }); 
        
    
        
});