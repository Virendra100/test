<!DOCTYPE html>
<html lang="en">

  <head>
   <?php include('head.php'); ?>
    <link href="vendors/data_table/buttons.dataTables.min.css" rel="stylesheet">
    <link href="vendors/data_table/jquery.dataTables.min.css" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- sidebar menu -->
           <?php include('menu.php'); ?>
            <!-- /sidebar menu -->

        <!-- page content -->
        <div class="right_col" role="main">
          <?php include('uploaded-file_contant.php'); ?>
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

     $('#ShowFileFTP').DataTable( {
   //   alert("welcome");
             destroy: true,
             "processing": true,
             "serverSide": true,
      'ajax': {
        'url': 'ajaxScripts/ajaxCall.php',
        'type': "POST",
        'data': {
               function2call: 'ShowFileFTP',
             
              }
         } 
  
     } );   


       $('#ShowShedulejob').DataTable( {
  
             destroy: true,
             "processing": true,
             "serverSide": true,
      'ajax': {
        'url': 'ajaxScripts/ajaxCall.php',
        'type': "POST",
        'data': {
               function2call: 'ShowShedulejob',
             
              }
         } 
  
     } );   

  }
</script>

    <!-- jQuery -->
    <!-- <script src="vendors/jquery/dist/jquery.min.js"></script> -->
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
     <!-- Datatables -->
    <script src="vendors/data_table/jquery.dataTables.min.js"></script>
    <script src="vendors/data_table/dataTables.buttons.min.js"></script>
    <script src="vendors/data_table/vfs_fonts.js"></script>

    

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
    <script src="build/js/script.js"></script>

    <script type="text/javascript">
      

      $('#myDatepicker6').datetimepicker({
        format: 'DD-MM-YYYY'
    });

      $('#myDatepicker7').datetimepicker({
        format: 'DD-MM-YYYY'
    });


    </script>
	
  </body>
</html>