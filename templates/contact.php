<?php
	include("./components/header.php");
	echo "<body>";
	include("./components/navbar.php");
?>

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

		<?php include("./banner/banner".$suffixh); ?>


        <div class="col-xs-12 col-md-9">

          <div class="row">
 	    	 <div class="col-xs-12 col-sm-12">
						<?php include("texts/contact_text".$suffixh); ?>
			 </div>
          </div>

        </div><!--/.col-xs-12.col-sm-9-->

		<?php include("./components/sidebar.html"); ?>


      </div><!--/row-->

      <hr>

      <? php include("./components/footer.php"); ?>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>



	<?php include("./components/google.html"); ?>


  </body>
</html>
