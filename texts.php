<?php

$suffix="_" . $lang .".php";
$suffixh="_" . $lang .".html";

	$menu["en"]=array();
	$menu["en"]["tracks"]=array(
							array("name"=>"1. SET", "longName"=>"Software Engineering and Tools", "url"=>"./tracks/track1","leader"=>"NN","email"=>"","image"=>"1cr.jpg"),
							array("name"=>"2. WER","longName"=>" ", "url"=>"./tracks/track2","leader"=>"NN","email"=>"","image"=>"2rc.jpg"),
              array("name"=>"3. ESELAW","longName"=>" ", "url"=>"./tracks/track3","leader"=>"NN","email"=>"","image"=>"3rc.jpg"));
	$menu["en"]["trackst"]=array("name"=>"Tracks","url"=>"tracks");
  $menu["en"]["tutorials"]=array("name"=>"Tutorials","url"=>"tutorials");
	$menu["en"]["simposio"]=array("name"=>"Doctoral Symposium","url"=>"simposio");

  $menu["en"]["home"]=array("name"=>"Home","url"=>"home");

  $menu["en"]["committees"]=array("name"=>"Committees","url"=>"committees");
	$menu["en"]["keynotes"]=array("name"=>"Keynotes","url"=>"keynotes");

  $menu["en"]["attending"]=array("name"=>"Attending","url"=>"attending");
  $menu["en"]["registration"]=array("name"=>"Registration","url"=>"registration");
  $menu["en"]["social"]=array("name"=>"Social Events", "url"=>"social");
	$menu["en"]["accommodation"]=array("name"=>"Accommodation","url"=>"accommodation");
	$menu["en"]["contact"]=array("name"=>"Contact","url"=>"contact");

  $menu["en"]["conference"]=array("name"=>"Conference","url"=>"conference");
	$menu["en"]["cfp"]=array("name"=>"Call for papers","url"=>"cfp");
	$menu["en"]["dates"]=array("name"=>"Important dates","url"=>"dates");

	$menu["en"]["program"]=array("name"=>"Program","url"=>"conference");
	$menu["en"]["calendar"]=array("name"=>"Program outline","url"=>"outline");
	$menu["en"]["programdl"]=array("name"=>"Complete Program","url"=>"outline");
	$menu["en"]["accepted"]=array("name"=>"Accepted papers","url"=>"accepted");

  $menu["en"]["sponsors"]=array("name"=>"Sponsors","url"=>"sponsors");

	$chaired["en"]="Chaired by:";
	$programCommittee["en"]="Program committee";
	$viewDetails["en"]="View details";
	$pageTitle["en"] = "Ibero-American Conference on Software Engineering";
	$coChairs["en"]="Co-chairs";
	$leaders["en"]="Track leaders";
	$organizers["en"]="Organizers";
	$sponsors["en"]="Sponsors";

	$menu["sp"]=array();
	$menu["sp"]["tracks"]=array(array("name"=>"1. Métodos formales, lógica computacional y teoría de la computación","url"=>"track1","leader"=>"Camilo Rocha","email"=>"camilo.rocha@escuelaing.edu.co","image"=>"1cr.jpg"),
								array("name"=>"2. Ingenier&iacute;a de Software","url"=>"track2","leader"=>"Rubby Casallas","email"=>"rcasalla@uniandes.edu.co","image"=>"2rc.jpg"),
								array("name"=>"8. Arquitectura y Sistemas de Información y Empresariales","url"=>"track8","leader"=>"Jorge Villalobos","email"=>"jvillalo@uniandes.edu.co","image"=>"8jv.jpg"),
								array("name"=>"9. Computación de Alto Rendimiento y Computación en la Nube","url"=>"track9","leader"=>"Harold Castro","email"=>"hcastro@uniandes.edu.co","image"=>"9hc.jpg"));
	$menu["sp"]["trackst"]=array("name"=>"L&iacute;neas","url"=>"tracks");
	$menu["sp"]["home"]=array("name"=>"Inicio","url"=>"home");
	$menu["sp"]["committees"]=array("name"=>"Comit&eacute;s","url"=>"committees");
	$menu["sp"]["registration"]=array("name"=>"Inscripci&oacute;n","url"=>"registration");
	$menu["sp"]["tutorials"]=array("name"=>"Tutoriales","url"=>"tutorials");
	$menu["sp"]["keynotes"]=array("name"=>"Keynotes","url"=>"keynotes");

	$menu["sp"]["simposio"]=array("name"=>"Simposio","url"=>"simposio");
	$menu["sp"]["simposiodm"]=array("name"=>"Simposio Doctoral y de Maestr&iacute;a","url"=>"simposio");

	$menu["sp"]["conference"]=array("name"=>"Conferencia","url"=>"conference");
	$menu["sp"]["cfp"]=array("name"=>"Llamado de trabajos","url"=>"cfp");
	$menu["sp"]["dates"]=array("name"=>"Fechas importantes","url"=>"dates");

	$menu["sp"]["program"]=array("name"=>"Programa","url"=>"conference");
	$menu["sp"]["calendar"]=array("name"=>"Programa global","url"=>"outline");
	$menu["sp"]["programdl"]=array("name"=>"Programa detallado","url"=>"Folleto_PDF.pdf");
	$menu["sp"]["accepted"]=array("name"=>"Envíos aceptados","url"=>"accepted");

	$menu["sp"]["accommodation"]=array("name"=>"Hoteles","url"=>"accommodation");
	$menu["sp"]["contact"]=array("name"=>"Contacto","url"=>"contact");

	$chaired["sp"]="L&iacute;der:";
	$programCommittee["sp"]="Comité de programa";
	$viewDetails["sp"]="Ver detalles";
	$pageTitle["sp"] = "Conferencia Ibero-americana en Software Engineering";
	$coChairs["sp"]="Co-directores";
	$leaders["sp"]="Líderes de línea";
	$organizers["sp"]="Organizadores";
	$sponsors["sp"]="Patrocinadores";

	//---- YEARLY CUSTOMIZATIONS ----
	$year = "2018";
	$country = "Colombia";

	//EN
	$menu["en"]["university"]=array("name"=>"Universidad de los Andes","url"=>"university");
	$menu["en"]["depto"]=array("name"=>"Systems and Computing Engineering Department","url"=>"http://sistemas.uniandes.edu.co");
	$menu["en"]["edition"] = "XXI";
	$menu["en"]["venue"]=array("name"=>"Venue","url"=>"venue");
	$menu["en"]["city"]=array("name"=>"Bogot&aacute;","url"=>"bogota");
	$menu["en"]["date"]=array("month"=>"April", "days"=>"26-30");

	//SP
	$menu["sp"]["university"]=array("name"=>"Universidad de los Andes","url"=>"university");
	$menu["sp"]["depto"]=array("name"=>"Departamento de Ingeniería de Sistemas y Computación","url"=>"http://sistemas.uniandes.edu.co");
	$menu["sp"]["edition"] = "XXI";
	$menu["sp"]["venue"]=array("name"=>"Sede","url"=>"venue");
	$menu["sp"]["city"]=array("name"=>"Bogot&aacute;","url"=>"bogota");
	$menu["sp"]["date"]=array("month"=>"Abril", "days"=>"26-30");

	//General
	$universityURl = "http://uniandes.edu.co";
	$easyChairURL = "http://easychair.com";

?>
