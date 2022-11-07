<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>


<?php


process_transaction();


 ?>





    <!-- Page Content -->
     <div class="container">
         <div class="jumbotron">
             <h1 class="text-center">THANK YOU</h1>
             <p class="text-center">Thank your ordered has been processed by PayPal, you should get an email soon</p>

         </div>


    </div>
    <!-- /.container -->



<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
