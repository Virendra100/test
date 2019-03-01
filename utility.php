<!DOCTYPE html>
<html lang="en">

  <head>
   <?php include('head.php'); ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
         <!-- sidebar menu -->
           <?php include('menu.php'); ?>
            <!-- /sidebar menu -->

        <!-- page content -->
        <div class="right_col" role="main">
         <?php include('utility_contant.php'); ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
         <?php include('footer.php'); ?>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
      <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
      </ul>
      <div class="clearfix"></div>
      <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script type="text/javascript">
    
       $(document).ready(function() {
         dataTable();
        });


   function dataTable(){

     $('#ShowBlockNumber').DataTable( {
       destroy: true,
             "processing": true,
             "serverSide": true,
      'ajax': {
        'url': 'ajaxScripts/ajaxCall.php',
        'type': "POST",
        'data': {
               function2call: 'ShowBlockNumber',
             
              }
         } 
  
     } );

     $('#ShowIPWhitelist').DataTable( {
       destroy: true,
             "processing": true,
             "serverSide": true,
      'ajax': {
        'url': 'ajaxScripts/ajaxCall.php',
        'type': "POST",
        'data': {
               function2call: 'ShowIPWhitelist',
             
              }
         } 
  
     } );
  }



  function deactivateN(id){
      var form_data = new FormData();
      form_data.append('Id', id);
      form_data.append('function2call', 'DeleteBlockNum');
     swal({
     title: "Are you sure, do you want to delete the Number ???",
     text: '',
     type: "warning",
     showCancelButton: true,
     confirmButtonClass: "btn-danger",
     confirmButtonColor: '#8CD4F5',
     confirmButtonText: "Delete Number",
     cancelButtonText: "No, cancel it!",
     closeOnConfirm: true,
     closeOnCancel: true
     },
     function(isConfirm) {
         if (isConfirm) {
          $.ajax({
                  url: 'ajaxScripts/ajaxCall.php', // point to server-side controller method
                  dataType: 'text',
                  cache: false,
                  contentType: false,
                  processData: false,
                  data: form_data,
                  type: 'post',
                  success: function(response) {
                  //alert(response);
                  if(response==1){
                     
                  PNotify.removeAll();  
                  new PNotify({
                  title: 'Success!',
                  text: 'Number Deleted Successfully!!!',
                  type: 'success',
                  hide: false
                  });
                  dataTable();  
                  }else{
                  PNotify.removeAll();  
                  new PNotify({
                  title: 'error!',
                  text: 'Contact to support !!!!',
                  type: 'success',
                  hide: false
                  });
                     }
                  },
                  error: function(response) {
                  PNotify.removeAll();  
                  new PNotify({
                  title: 'error!',
                  text: "Network Error,Check your Internet Connection !!!",
                  type: 'error',
                  hide: false
                  });
                       
                  }
              });
         
         }
         
     });

   }


     function deactivateIP(id){
      var form_data = new FormData();
      form_data.append('Id', id);
      form_data.append('function2call', 'DeleteWhitlistIP');
     swal({
     title: "Are you sure, do you want to delete the IP Whitelist ???",
     text: '',
     type: "warning",
     showCancelButton: true,
     confirmButtonClass: "btn-danger",
     confirmButtonColor: '#8CD4F5',
     confirmButtonText: "Delete IP Whitelist",
     cancelButtonText: "No, cancel it!",
     closeOnConfirm: true,
     closeOnCancel: true
     },
     function(isConfirm) {
         if (isConfirm) {
          $.ajax({
                  url: 'ajaxScripts/ajaxCall.php', // point to server-side controller method
                  dataType: 'text',
                  cache: false,
                  contentType: false,
                  processData: false,
                  data: form_data,
                  type: 'post',
                  success: function(response) {
                     
                  if(response==1){
                  PNotify.removeAll();  
                  new PNotify({
                  title: 'Success!',
                  text: 'IP Whitelist Deleted Successfully!!!',
                  type: 'success',
                  hide: false
                  });
                  dataTable();  
                  }else{
                  PNotify.removeAll();  
                  new PNotify({
                  title: 'error!',
                  text: 'Contact to support !!!!',
                  type: 'success',
                  hide: false
                  });
                     }
                  },
                  error: function(response) {
                    PNotify.removeAll();  
                  new PNotify({
                  title: 'error!',
                  text: "Network Error,Check your Internet Connection !!!",
                  type: 'error',
                  hide: false
                  });
                       
                  }
              });

         }
         
     });

   }




  </script>

    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
    <script src="build/js/script.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/websmsViru.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
   

  </body>
</html>