<?php
	include("./components/header.php");
	echo "<body>";
	include("./components/navbar.php");
?>

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

		<?php include("./banner/banner".$suffixh); ?>


        <!--<div class="col-xs-12 col-sm-9">-->
		<div class="col-xs-12 col-md-9">
		  <div class="row">

	    	 <div class="col-xs-12 col-sm-12">
				<h3><?php echo $coChairs[$lang]; ?></h3>
			 </div>
		  </div>

          <div class="row">

		  <div class="col-xs-12 col-lg-4">
              <div style="height: 130px; margin-left: auto; margin-right: auto;" class="text-center">
              	<img alt="Mario Sánchez" src="./leaders/ms.jpg" height="120" style="margin-top: auto; margin-bottom: 10px; vertical-align: middle;"/>
              </div>
              <div class="text-center">
              	<h4>Mario Sánchez</h4>
            	<p>mar-san1@uniandes.edu.co</p>
              </div>
           </div><!--/.col-xs-6.col-lg-4-->

		  <div class="col-xs-12 col-lg-4">
              <div style="height: 130px; margin-left: auto; margin-right: auto;" class="text-center">
              	<img alt="Oscar González" src="./leaders/og.jpg" height="120" style="margin-top: auto; margin-bottom: 10px; vertical-align: middle;"/>
              </div>
              <div class="text-center">
              	<h4>Oscar González</h4>
            	<p>o-gonza1@uniandes.edu.co</p>
              </div>
           </div><!--/.col-xs-6.col-lg-4-->

          </div>


		  <div class="row">
	    	 <div class="col-xs-12 col-sm-12">
						<h3><?php echo $leaders[$lang]; ?></h3>
			 </div>
		  </div>

		<div class="row">
		  <div class="col-xs-12 col-lg-4">
              <div style="height: 130px; margin-left: auto; margin-right: auto;" class="text-center">
              	<img alt="<?php echo $menu[$lang]["tracks"][0]["leader"]; ?>"  src="./leaders/<?php echo $menu[$lang]["tracks"][0]["image"]; ?>" height="120" style="margin-top: auto; margin-bottom: 10px; vertical-align: middle;"/>
              </div>
              <div class="text-center">
              	<h4><?php echo $menu[$lang]["tracks"][0]["leader"]; ?></h4>
            	<p><?php echo $menu[$lang]["tracks"][0]["name"]; ?></p>
            	<p><?php echo $menu[$lang]["tracks"][0]["email"]; ?></p>
              </div>
           </div><!--/.col-xs-6.col-lg-4-->

		  <div class="col-xs-12 col-lg-4">
              <div style="height: 130px; margin-left: auto; margin-right: auto;" class="text-center">
              	<img alt="<?php echo $menu[$lang]["tracks"][1]["leader"]; ?>" src="./leaders/<?php echo $menu[$lang]["tracks"][1]["image"]; ?>" height="120" style="margin-top: auto; margin-bottom: 10px; vertical-align: middle;"/>
              </div>
              <div class="text-center">
              	<h4><?php echo $menu[$lang]["tracks"][1]["leader"]; ?></h4>
            	<p><?php echo $menu[$lang]["tracks"][1]["name"]; ?></p>
            	<p><?php echo $menu[$lang]["tracks"][1]["email"]; ?></p>
              </div>
           </div><!--/.col-xs-6.col-lg-4-->

		  <div class="col-xs-12 col-lg-4">
              <div style="height: 130px; margin-left: auto; margin-right: auto;" class="text-center">
              	<img alt="<?php echo $menu[$lang]["tracks"][2]["leader"]; ?>" src="./leaders/<?php echo $menu[$lang]["tracks"][2]["image"]; ?>" height="120" style="margin-top: auto; margin-bottom: 10px; vertical-align: middle;"/>
              </div>
              <div class="text-center">
              	<h4><?php echo $menu[$lang]["tracks"][2]["leader"]; ?></h4>
            	<p><?php echo $menu[$lang]["tracks"][2]["name"]; ?></p>
            	<p><?php echo $menu[$lang]["tracks"][2]["email"]; ?></p>
              </div>
           </div><!--/.col-xs-6.col-lg-4-->
        </div>


        <div class="row">
		  <div class="col-xs-12 col-lg-4">
              <div style="height: 130px; margin-left: auto; margin-right: auto;" class="text-center">
              	<img alt="<?php echo $menu[$lang]["tracks"][3]["leader"]; ?>" src="./leaders/<?php echo $menu[$lang]["tracks"][3]["image"]; ?>" height="120" style="margin-top: auto; margin-bottom: 10px; vertical-align: middle;"/>
              </div>
              <div class="text-center">
              	<h4><?php echo $menu[$lang]["tracks"][3]["leader"]; ?></h4>
            	<p><?php echo $menu[$lang]["tracks"][3]["name"]; ?></p>
            	<p><?php echo $menu[$lang]["tracks"][3]["email"]; ?></p>
              </div>
           </div><!--/.col-xs-6.col-lg-4-->

		  <div class="col-xs-12 col-lg-4">
              <div style="height: 130px; margin-left: auto; margin-right: auto;" class="text-center">
              	<img alt="<?php echo $menu[$lang]["tracks"][4]["leader"]; ?>" src="./leaders/<?php echo $menu[$lang]["tracks"][4]["image"]; ?>" height="120" style="margin-top: auto; margin-bottom: 10px; vertical-align: middle;"/>
              </div>
              <div class="text-center">
              	<h4><?php echo $menu[$lang]["tracks"][4]["leader"]; ?></h4>
            	<p><?php echo $menu[$lang]["tracks"][4]["name"]; ?></p>
            	<p><?php echo $menu[$lang]["tracks"][4]["email"]; ?></p>
              </div>
           </div><!--/.col-xs-6.col-lg-4-->

		  <div class="col-xs-12 col-lg-4">
              <div style="height: 130px; margin-left: auto; margin-right: auto;" class="text-center">
              	<img alt="<?php echo $menu[$lang]["tracks"][5]["leader"]; ?>" src="./leaders/<?php echo $menu[$lang]["tracks"][5]["image"]; ?>" height="120" style="margin-top: auto; margin-bottom: 10px; vertical-align: middle;"/>
              </div>
              <div class="text-center">
              	<h4><?php echo $menu[$lang]["tracks"][5]["leader"]; ?></h4>
            	<p><?php echo $menu[$lang]["tracks"][5]["name"]; ?></p>
            	<p><?php echo $menu[$lang]["tracks"][5]["email"]; ?></p>
              </div>
           </div><!--/.col-xs-6.col-lg-4-->
        </div>

        <div class="row">
		  <div class="col-xs-12 col-lg-4">
              <div style="height: 130px; margin-left: auto; margin-right: auto;" class="text-center">
              	<img alt="<?php echo $menu[$lang]["tracks"][6]["leader"]; ?>" src="./leaders/<?php echo $menu[$lang]["tracks"][6]["image"]; ?>" height="120" style="margin-top: auto; margin-bottom: 10px; vertical-align: middle;"/>
              </div>
              <div class="text-center">
              	<h4><?php echo $menu[$lang]["tracks"][6]["leader"]; ?></h4>
            	<p><?php echo $menu[$lang]["tracks"][6]["name"]; ?></p>
            	<p><?php echo $menu[$lang]["tracks"][6]["email"]; ?></p>
              </div>
           </div><!--/.col-xs-6.col-lg-4-->

		  <div class="col-xs-12 col-lg-4">
              <div style="height: 130px; margin-left: auto; margin-right: auto;" class="text-center">
              	<img alt="<?php echo $menu[$lang]["tracks"][7]["leader"]; ?>" src="./leaders/<?php echo $menu[$lang]["tracks"][7]["image"]; ?>" height="120" style="margin-top: auto; margin-bottom: 10px; vertical-align: middle;"/>
              </div>
              <div class="text-center">
              	<h4><?php echo $menu[$lang]["tracks"][7]["leader"]; ?></h4>
            	<p><?php echo $menu[$lang]["tracks"][7]["name"]; ?></p>
            	<p><?php echo $menu[$lang]["tracks"][7]["email"]; ?></p>
              </div>
           </div><!--/.col-xs-6.col-lg-4-->

		  <div class="col-xs-12 col-lg-4">
              <div style="height: 130px; margin-left: auto; margin-right: auto;" class="text-center">
              	<img alt="<?php echo $menu[$lang]["tracks"][8]["leader"]; ?>" src="./leaders/<?php echo $menu[$lang]["tracks"][8]["image"]; ?>" height="120" style="margin-top: auto; margin-bottom: 10px; vertical-align: middle;"/>
              </div>
              <div class="text-center">
              	<h4><?php echo $menu[$lang]["tracks"][8]["leader"]; ?></h4>
            	<p><?php echo $menu[$lang]["tracks"][8]["name"]; ?></p>
            	<p><?php echo $menu[$lang]["tracks"][8]["email"]; ?></p>
              </div>
           </div><!--/.col-xs-6.col-lg-4-->
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
