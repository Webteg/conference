<nav class="navbar  navbar-default  navbar-fixed-top ">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $page."_en.php";?>"><img src="blank.gif" class="flag flag-us" alt="English" /></a>
      <a class="navbar-brand" href="<?php echo $page."_sp.php";?>"><img src="blank.gif" class="flag flag-es" alt="Español" /></a>
      <a class="navbar-brand" href="<?php echo $page."_pg.php";?>"><img src="blank.gif" class="flag flag-br" alt="Portugues" /></a>
    </div>

    <div id="navbar" class="navbar-collapse collapse">

      <ul class="nav navbar-nav navbar-right">
        <li class="active">
        	<?php
        		echo "<a href=\"" . $menu[$lang]["home"]["url"].$suffix."\">". $menu[$lang]["home"]["name"]."</a>";
        	?>
        </li>
        <!-- PROGRAM -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          		<?php
        		echo $menu[$lang]["program"]["name"];
        		?>
            <span class="caret"></span>
          </a>

          <ul class="dropdown-menu" role="menu">
            <li>
              <?php
            		echo "<a href=\"program.pdf\">". $menu[$lang]["programdl"]["name"]."</a>";
            	?>
            </li>
            <li>
              <?php
            		echo "<a href=\"" . $menu[$lang]["calendar"]["url"].$suffix."\">". $menu[$lang]["calendar"]["name"]."</a>";
            	?>
            </li>
				  <li class="divider"></li>
            <li>
              <?php
            		echo "<a href=\"" . $menu[$lang]["accepted"]["url"].$suffix."\">". $menu[$lang]["accepted"]["name"]."</a>";
            	?>
            </li>
          </ul>

          </li>

          <!-- TRACKS -->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              <?php
            		echo $menu[$lang]["trackst"]["name"];
            	?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              	<?php
              		for($i = 0; $i<3; $i++)
              		{
              			echo "<li><a href=\"" . $menu[$lang]["tracks"][$i]["url"].$suffix."\">". $menu[$lang]["tracks"][$i]["name"]."</a></li>";
  				        }
              	?>
                <li class="divider"></li>
                <li>
                  <?php
                		echo "<a href=\"" . $menu[$lang]["tutorials"]["url"].$suffix."\">". $menu[$lang]["tutorials"]["name"]."</a>";
                	?>
                </li>
                <li>
                  <?php
                		echo "<a href=\"" . $menu[$lang]["simposio"]["url"].$suffix."\">". $menu[$lang]["simposio"]["name"]."</a>";
                	?>
                </li>
            </ul>
          </li>

          <!-- COMMITTEES -->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          		<?php
            		echo $menu[$lang]["conference"]["name"];
          		?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li>
                <?php
            	   echo "<a href=\"" . $menu[$lang]["cfp"]["url"].$suffix."\">". $menu[$lang]["cfp"]["name"]."</a>";
                ?>
              </li>
              <li>
                <?php
            	   echo "<a href=\"" . $menu[$lang]["dates"]["url"].$suffix."\">". $menu[$lang]["dates"]["name"]."</a>";
                ?>
              </li>
				      <li>
					      <?php
                  echo "<a href=\"" . $menu[$lang]["keynotes"]["url"].$suffix."\">". $menu[$lang]["keynotes"]["name"]."</a>";
                ?>
				      </li>
              <li class="divider"></li>
              <li>
                <?php
            	    echo "<a href=\"" . $menu[$lang]["committees"]["url"].$suffix."\">". $menu[$lang]["committees"]["name"]."</a>";
                ?>
              </li>
            </ul>
          </li>

          <!-- ATTENDING -->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          		<?php
            		echo $menu[$lang]["attending"]["name"];
          		?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li>
                <?php
            	   echo "<a href=\"" . $menu[$lang]["venue"]["url"].$suffix."\">". $menu[$lang]["venue"]["name"]."</a>";
                ?>
              </li>
              <li>
                <?php
            	   echo "<a href=\"" . $menu[$lang]["social"]["url"].$suffix."\">". $menu[$lang]["social"]["name"]."</a>";
                ?>
              </li>
				      <li>
					      <?php
                  echo "<a href=\"" . $menu[$lang]["accommodation"]["url"].$suffix."\">". $menu[$lang]["accommodation"]["name"]."</a>";
                ?>
				      </li>
            </ul>
          </li>


    </div><!-- /.nav-collapse -->
  </div><!-- /.container -->
</nav><!-- /.navbar -->
