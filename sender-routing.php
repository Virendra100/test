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
          <?php include('sender-rout_contant.php'); ?>
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

     $('#ShowSenderidrouting').DataTable( {
       destroy: true,
             "processing": true,
             "serverSide": true,
      'ajax': {
        'url': 'ajaxScripts/ajaxCall.php',
        'type': "POST",
        'data': {
               function2call: 'ShowSenderidrouting',
             
              }
         } 
  
     } );


     $('#Showresellerrouting').DataTable( {
       destroy: true,
             "processing": true,
             "serverSide": true,
      'ajax': {
        'url': 'ajaxScripts/ajaxCall.php',
        'type': "POST",
        'data': {
               function2call: 'Showresellerrouting',
             
              }
         } 
  
     } );
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
     <!-- jQuery custom content scroller -->
    <script src="vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
   

  

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
    <script src="build/js/script.js"></script>
    <script src="js/jquery.validate.js"></script>
	 <script src="js/websmsViru.js"></script>
  </body>
</html>