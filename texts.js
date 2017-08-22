var lang = "en";
var suffix = "_" + lang + ".js";
var suffixh = "_" + lang + ".html";
var page = "index";

var menu = {
	"en": {
		"tracks": {
			"1": {"name": "SET", "longName":"Software Engineering and Tools", "url":"track1","leader":"NN","email":"","image":"1cr.jpg"},
			"2": {"name":"WER","longName":"Requirements Engineering", "url":"track2","leader":"NN","email":"","image":"2rc.jpg"},
			"3": {"name":"ESELAW","longName":"Experimental Software Engineering", "url":"track3","leader":"NN","email":"","image":"3rc.jpg"},
			"4": {"name":"Industry","longName":"Industry Presentations", "url":"track4","leader":"NN","email":"","image":"4rc.jpg"},
			"5": {"name":"Tools","longName":"Tools and Demos Track", "url":"track5","leader":"NN","email":"","image":"5rc.jpg"},
			"6": {"name":"Doc Symp","longName":"Doctoral Symposyum", "url":"track6","leader":"NN","email":"","image":"6rc.jpg"}
		},
		"trackst": {"name":"Tracks","url":"tracks"},
		"tutorials":{"name":"Tutorials","url":"tutorials"},
		"simposio": {"name":"Doctoral Symposium","url":"simposio"},
		"home": {"name":"Home","url":"index.html"},
		"committees": {"name":"Committees","url":"committees"},
		"keynotes": {"name":"Keynotes","url":"keyNotes"},
		"attending": {"name":"Attending","url":"attending"},
		"registration": {"name":"Registration","url":"registration"},
		"social": {"name":"Social Events", "url":"social"},
		"accommodation": {"name":"Accommodation","url":"accommodation"},
		"contact": {"name":"Contact","url":"contact"},
		"conference": {"name":"Conference","url":"conference"},
		"cfp": {"name":"Call for papers","url":"cfp"},
		"dates": {"name":"Important dates","url":"dates",
							"abstract":"Abstract deadline:",
							"submission":"Paper deadline:",
							"notification":"Notification:",
							"camera":"Camera Ready:"},
		"topics":{"name":"Topics"},
		"pchairs":{"name":"Program chairs"},
		"program": {"name":"Program","url":"conference"},
		"calendar": {"name":"Program outline","url":"outline"},
		"programdl": {"name":"Complete Program","url":"outline"},
		"accepted": {"name":"Accepted papers","url":"accepted"},
		"timetable": {"name":"Timetable","url":"timeTable"},
		"sponsors": {"name":"Sponsors","url":"sponsors"},
		"chair": "Chair",
		"pc": "Program Committee",
		"viewDetails": "View details",
		"title": "Ibero-American Conference on Software Engineering",
		"organizers": "Organizers",
		"university": {"name":"Universidad de los Andes","web":"https://uniandes.edu.co/en", "url":"university"},
		"depto": {"name":"Systems and Computing Engineering Department","url":"http://sistemas.uniandes.edu.co"},
		"venue": {"name":"Venue","url":"venue"},
		"city": {"name":"Bogot&aacute;","url":"bogota"},
		"month": "April",
		"calls": {"name":"Calls"},
		"foundationsTracks": {"name":"Foundations tracks","url":"foundationstracks"},
		"categories": {"name":"Categories"},
		"submissions": {"name":"Submissions"},
		"submission": {"name":"Submission"},
		"evaluationProcess": {"name":"Evaluation process"},
		"organization": {"name":"Organization", "url":"organization"},
		"committee": {"name":"Committee", "url":"committee"},
		"generalCommittee": {"name":"General Organization Committee"},
		"genConfeChairs": {"name":"General Conference Chairs"},
		"genProgChairs": {"name":"General Program Chairs"},
		"iberoASchoolChair": {"name":"Ibero-American School Chair"},
		"toolsPaperChair": {"name":"Tools Paper Chairs"},
		"proStuVolunChair": {"name":"Proceedings and Student Volunteers Chair"},
		"publicityCoChairs": {"name":"Publicity Chairs"},
		"industryExhibition": {"name":"Industry Exhibition Chairs"},
		"webChair": {"name":"Web Chair"},
		"sponsors": {"name":"Sponsors", "url":"sponsors"},
		"registration":{"name":"Registration", "url":"registration"},
		"school":{"name":"School", "url":"school"},
		"socialEvents":{"name":"Social events", "url":"socialEvents"},
		"venue":{"name":"Venue"},
		"conferenceVenue":{"name":"Conference venue", "url":"conferenceVenue"},
		"contact":{"name":"Contact", "url":"contact"},
		"importantDates":{"name":"Important dates", "url":"importantDatesMain"},
		"datesSubmi":{"name":"Submissions"},
		"datesConf":{"name":"Conference Major Events"},
		"scope":{"name":"Scope"}
	},
	"sp": {
		"title": "Ibero-American Conference on Software Engineering",
		"home": {"name":"Inicio","url":"index.html"}
	},
	"br": {
		"title": "Ibero-American Conference on Software Engineering"
	},
	"shortTitle": "CIbSE",
	"date": {"year":"2018", "days":"26-30", "edition": "XXI"},

};


	/*
	$menu["sp":
	$menu["sp"]["tracks": array("name":"1. Métodos formales, lógica computacional y teoría de la computación","url":"track1","leader":"Camilo Rocha","email":"camilo.rocha@escuelaing.edu.co","image":"1cr.jpg"),
								array("name":"2. Ingenier&iacute;a de Software","url":"track2","leader":"Rubby Casallas","email":"rcasalla@uniandes.edu.co","image":"2rc.jpg"),
								array("name":"8. Arquitectura y Sistemas de Información y Empresariales","url":"track8","leader":"Jorge Villalobos","email":"jvillalo@uniandes.edu.co","image":"8jv.jpg"),
								array("name":"9. Computación de Alto Rendimiento y Computación en la Nube","url":"track9","leader":"Harold Castro","email":"hcastro@uniandes.edu.co","image":"9hc.jpg")
	$menu["sp"]["trackst": "name":"L&iacute;neas","url":"tracks"
	$menu["sp"]["home": "name":"Inicio","url":"home"
	$menu["sp"]["committees": "name":"Comit&eacute;s","url":"committees"
	$menu["sp"]["registration": "name":"Inscripci&oacute;n","url":"registration"
	$menu["sp"]["tutorials": "name":"Tutoriales","url":"tutorials"
	$menu["sp"]["keynotes": "name":"Keynotes","url":"keynotes"

	$menu["sp"]["simposio": "name":"Simposio","url":"simposio"
	$menu["sp"]["simposiodm": "name":"Simposio Doctoral y de Maestr&iacute;a","url":"simposio"

	$menu["sp"]["conference": "name":"Conferencia","url":"conference"
	$menu["sp"]["cfp": "name":"Llamado de trabajos","url":"cfp"
	$menu["sp"]["dates": "name":"Fechas importantes","url":"dates",
															"abstract":"Deadline abstract:",
															"submission":"Deadline art&iacute;culo:",
															"notification":"Notificaci&oacute;n:",
															"camera":"Camera Ready:"

	$menu["sp"]["program": "name":"Programa","url":"conference"
	$menu["sp"]["calendar": "name":"Programa global","url":"outline"
	$menu["sp"]["programdl": "name":"Programa detallado","url":"Folleto_PDF.pdf"
	$menu["sp"]["accepted": "name":"Envíos aceptados","url":"accepted"

	$menu["sp"]["accommodation": "name":"Hoteles","url":"accommodation"
	$menu["sp"]["contact": "name":"Contacto","url":"contact"

	$chaired["sp"]="L&iacute;der:";
	$programCommittee["sp"]="Comité de programa";
	$viewDetails["sp"]="Ver detalles";
	$pageTitle["sp"] = "Conferencia Ibero-americana en Software Engineering";
	$coChairs["sp"]="Co-directores";
	$leaders["sp"]="Líderes de línea";
	$organizers["sp"]="Organizadores";
	$sponsors["sp"]="Patrocinadores";
*/
	//---- YEARLY CUSTOMIZATIONS ----
var year = "2018";
var country = "Colombia";

/*
	//SP
	$menu["sp"]["university": "name":"Universidad de los Andes","url":"university"
	$menu["sp"]["depto": "name":"Departamento de Ingeniería de Sistemas y Computación","url":"http://sistemas.uniandes.edu.co"
	$menu["sp"]["edition"] = "XXI";
	$menu["sp"]["venue": "name":"Sede","url":"venue"
	$menu["sp"]["city": "name":"Bogot&aacute;","url":"bogota"
	$menu["sp"]["date": "month":"Abril", "days":"26-30"
*/
	//General
var universityURl = "http://uniandes.edu.co";
var universityURl_en = "http://uniandes.edu.co/en";
var easyChairURL = "http://easychair.com";
var cibseURL = "http://cibseconference.org"
