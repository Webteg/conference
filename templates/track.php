<?php
	include("./components/header.php");
	echo "<body>";
	include("./components/navbar.php");
?>

<div class="container">

  <div class="row row-offcanvas row-offcanvas-right">

		<?php include("./banner/banner".$suffixh); ?>


    <div class="col-xs-12 col-md-9">
	  	<div class="jumbotron">
	    	<div class="row">
	      	<div class="col-xs-2 col-lg-2">
				  	<img src="trackicons/track<?php echo $trackNumber +1; ?>.png" alt="<?php echo $menu[$lang]["tracks"][$trackNumber]["name"]; ?>" width="100" style="margin-top: auto; margin-bottom: auto; vertical-align: middle;"/>
			    </div>
			 		<div class="col-xs-6 col-lg-10">
			  		<h2>
        			<?php echo $menu[$lang]["tracks"][$trackNumber]["name"]; ?> -
							<?php echo $menu[$lang]["tracks"][$trackNumber]["longName"]; ?>
		      	</h2>
					</div>
				</div>

        <div class="row">
        	<?php include("texts/track" . ($trackNumber+1)."_text" .$suffixh); ?>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-6 col-lg-4">
			    <div style="font-weight: bold;"><?php echo $chaired[$lang]; ?> </div>
			 	</div>

				<div class="col-xs-6 col-lg-4">
          <div style="height: 130px; margin-left: auto; margin-right: auto;" class="text-center">
            <img src="./leaders/<?php echo $menu[$lang]["tracks"][$trackNumber]["image"]; ?>" alt="<?php echo $menu[$lang]["tracks"][$trackNumber]["leader"]; ?>"
              		height="120" style="margin-top: auto; margin-bottom: 10px; vertical-align: middle;"/>
          </div>
          <div class="text-center">
              	<h4><?php echo $menu[$lang]["tracks"][$trackNumber]["leader"]; ?></h4>
            	<p><a href="mailto:<?php echo $menu[$lang]["tracks"][$trackNumber]["email"]; ?>"><?php echo $menu[$lang]["tracks"][$trackNumber]["email"]; ?></a></p>
          </div>
      	</div>
      </div>

      <div class="row">
      	<div class="col-xs-6 col-lg-4">
			  	<div style="font-weight: bold;"><?php echo $programCommittee[$lang]; ?></div>
			  	<div><ul><?php include("texts/pc" . ($trackNumber+1)."_text.html"); ?> </ul></div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>




	<?php include("./components/google.html"); ?>

  </body>
</html>
