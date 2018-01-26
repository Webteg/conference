var lang;
var page = "index";
var suffix;
var suffixh;
var sufhtml = ".html";

$(document).ready(function () {
	if (localStorage.getItem('lang') == null) {
		localStorage.setItem('lang', 'en');
	}
	lang = localStorage.getItem('lang');
	suffixh = "_" + lang + ".html";
	suffix = "_" + lang + ".js";
});
function changeLanguage(element) {
	localStorage.setItem('lang', $(element).attr("id"));
	lang = localStorage.getItem('lang');
	suffixh = "_" + lang + ".html";
	suffix = "_" + lang + ".js";
};

var menu = {
	"en": {
		"tracks": {
			"1": { "name": "SET", "longName": "Software Engineering and Tools", "url": "track1", "leader": "NN", "email": "", "image": "1cr.jpg" },
			"2": { "name": "WER", "longName": "Requirements Engineering", "url": "track2", "leader": "NN", "email": "", "image": "2rc.jpg" },
			"3": { "name": "ESELAW", "longName": "Experimental Software Engineering", "url": "track3", "leader": "NN", "email": "", "image": "3rc.jpg" },
			"4": { "name": "Industry", "longName": "Industry Presentations", "url": "track4", "leader": "NN", "email": "", "image": "4rc.jpg" },
			"5": { "name": "Tools", "longName": "Tools and Demos Track", "url": "track5", "leader": "NN", "email": "", "image": "5rc.jpg" },
			"6": { "name": "Doc Symp", "longName": "Doctoral Symposium", "url": "track6", "leader": "NN", "email": "", "image": "6rc.jpg" }
		},
		"about_bogota": { "name": "About Bogotá", "url": "aboutBogota" },
		"trackst": { "name": "Tracks", "url": "tracks" },
		"tutorials": { "name": "Tutorials", "url": "tutorials" },
		"simposio": { "name": "Doctoral Symposium", "url": "docSymp" },
		"home": { "name": "Home", "url": "index.html" },
		"news": { "name": "News", "url": "news" },
		"committees": { "name": "Committees", "url": "committees" },
		"keynotes": { "name": "Keynotes", "url": "keyNotes" },
		"attending": { "name": "Attending", "url": "attending" },
		"registration": { "name": "Registration", "url": "registration" },
		"accomodation": { "name": "Accomodation", "url": "accomodation" },
		"social": { "name": "Social Events", "url": "social" },
		"accommodation": { "name": "Accommodation", "url": "accommodation" },
		"contact": { "name": "Contact", "url": "contact" },
		"conference": { "name": "Conference", "url": "conference" },
		"cfp": { "name": "Call for papers", "url": "cfp" },
		"dates": {
			"name": "Important dates", "url": "dates",
			"abstract": "Abstract deadline:",
			"submission": "Paper deadline:",
			"notification": "Notification:",
			"camera": "Camera Ready:"
		},
		"topics": { "name": "Topics" },
		"pchairs": { "name": "Program Chairs" },
		"pchair": { "name": "Program Chair" },
		"pchairEibais": { "name": "EIbAiS Coordinator" },
		"program": { "name": "Program", "url": "conference" },
		"calendar": { "name": "Program outline", "url": "outline" },
		"programdl": { "name": "Complete Program", "url": "outline" },
		"accepted": { "name": "Accepted papers", "url": "accepted" },
		"timetable": { "name": "Timetable", "url": "timeTable" },
		"generalProgram": { "name": "General Program", "url": "timeTable" },
		"sponsors": { "name": "Sponsors", "url": "sponsors" },
		"chair": "Chair",
		"pc": { "name": "Program committee" },
		"viewDetails": "View details",
		"title": "Ibero-American Conference on Software Engineering",
		"organizers": "Organizers",
		"university": { "name": "Universidad de los Andes", "web": "https://uniandes.edu.co/en", "url": "university" },
		"depto": { "name": "Systems and Computing Engineering Department", "url": "http://sistemas.uniandes.edu.co" },
		"venue": { "name": "Venue", "url": "venue" },
		"city": { "name": "Bogot&aacute;", "url": "bogota" },
		"month": "April",
		"calls": { "name": "Calls" },
		"foundationsTracks": { "name": "Foundations Tracks", "url": "foundationstracks" },
		"categories": { "name": "Categories" },
		"submissions": { "name": "Submissions" },
		"submission": { "name": "Submission" },
		"evaluationProcess": { "name": "Evaluation process" },
		"organization": { "name": "Organization", "url": "organization" },
		"volunteers": { "name": "Volunteers", "url": "volunteers" },
		"committee": { "name": "Committee", "url": "committee" },
		"generalCommittee": { "name": "General Organization Committee" },
		"genConfeChairs": { "name": "General Conference Chairs" },
		"genProgChairs": { "name": "General Program Chairs" },
		"iberoASchoolChair": { "name": "Ibero-American School Chair" },
		"toolsPaperChair": { "name": "Tools Papers Chairs" },
		"proStuVolunChair": { "name": "Proceedings and Student Volunteers Chair" },
		"publicityCoChairs": { "name": "Publicity Chairs" },
		"webChair": { "name": "Web Chair" },
		"sponsors": { "name": "Sponsors", "url": "sponsors" },
		"registration": { "name": "Registration", "url": "registration" },
		"school": { "name": "School", "url": "school" },
		"socialEvents": { "name": "Social Events", "url": "socialEvents" },
		"hackaton": { "name": "Hackaton", "url": "hackaton" },
		"venue": { "name": "Venue" },
		"conferenceVenue": { "name": "Conference venue", "url": "conferenceVenue" },
		"contact": { "name": "Contact", "url": "contact" },
		"importantDates": { "name": "Important dates", "url": "importantDatesMain" },
		"datesSubmi": { "name": "Submissions" },
		"datesConf": { "name": "Conference Major Events" },
		"scope": { "name": "Scope" },
		"structure": { "name": "Structure" },
		"download": { "name": "Downloadable version" },
		"eibais": { "name": "EIbAIS", "url": "eibais" },
		"eibaisPresentation": { "name": "Presentation", "url": "eibais" },
		"eibaisTutorials": { "name": "Tutorials" },
		"eibaisTutorials1": { "name": "Requirements Engineering" },
		"eibaisTutorials2": { "name": "TBD" },
		"eibaisTutorials3": { "name": "TBD" },
		"eibaisTutorials4": { "name": "Qualitative studies" },
		"eibaisTutorials5": { "name": "Deriving Requirements using e3value and e3fraud techniques" },
		"eibaisTutorials6": { "name": "Software Engineering for IoT" },
		"toolsPapers": { "name": "Tools papers" },
		"technicalAndEmergingPapers": { "name": "Technical and emerging ideas papers" },
		"getting_here": { "name": "Getting here", "url": "gettingHere" },
		"getting_the_venue": { "name": "Getting the Venue" },
		"getting_bogota": { "name": "Getting Bogota" },
	},
	"sp": {
		"title": "Conferencia Iberoamericana de Ingeniería de Software",
		"home": { "name": "Inicio", "url": "index.html" },
		"news": { "name": "Noticias", "url": "news" },
		"calls": { "name": "Llamadas" },
		"foundationsTracks": { "name": "Tracks principales", "url": "foundationstracks" },
		"simposio": { "name": "Simposio doctoral", "url": "docSymp" },
		"trackst": { "name": "Tracks", "url": "tracks" },
		"tracks": {
			"1": { "name": "SET", "longName": "Track de ingeniería de software", "url": "track1", "leader": "NN", "email": "", "image": "1cr.jpg" },
			"2": { "name": "WER", "longName": "Track de ingeniería de requisitos", "url": "track2", "leader": "NN", "email": "", "image": "2rc.jpg" },
			"3": { "name": "ESELAW", "longName": "Track de ingeniería de software experimental", "url": "track3", "leader": "NN", "email": "", "image": "3rc.jpg" },
			"4": { "name": "Industria", "longName": "Presentaciones industriales", "url": "track4", "leader": "NN", "email": "", "image": "4rc.jpg" },
			"6": { "name": "Simp Doc", "longName": "Simposio doctoral", "url": "track6", "leader": "NN", "email": "", "image": "6rc.jpg" }
		},
		"program": { "name": "Programa", "url": "conference" },
		"keynotes": { "name": "Conferencistas invitados", "url": "keyNotes" },
		"generalProgram": { "name": "Programa general", "url": "timeTable" },
		"school": { "name": "Escuela", "url": "school" },
		"socialEvents": { "name": "Eventos sociales", "url": "socialEvents" },
		"organization": { "name": "Organización", "url": "organization" },
		"committee": { "name": "Comité", "url": "committee" },
		"sponsors": { "name": "Patrocinadores", "url": "sponsors" },
		"registration": { "name": "Registro", "url": "registration" },
		"venue": { "name": "Lugar", "url": "venue" },
		"conferenceVenue": { "name": "Lugar de la conferencia", "url": "conferenceVenue" },
		"contact": { "name": "Contacto", "url": "contact" },

		"scope": { "name": "Alcance" },
		"structure": { "name": "Estructura" },
		"importantDates": { "name": "Fechas importantes", "url": "importantDatesMain" },
		"submissions": { "name": "Envío de trabajos" },
		"submission": { "name": "Envío de trabajos" },
		"evaluationProcess": { "name": "Proceso de evaluación" },
		"datesSubmi": { "name": "Submissions" },
		"datesConf": { "name": "Conference Major Events" },
		"university": { "name": "Universidad de los Andes", "web": "https://uniandes.edu.co", "url": "university" },
		"depto": { "name": "Departamento de ingeniería de sistemas y computación", "url": "http://sistemas.uniandes.edu.co" },
		"organizers": { "namme": "Organizadores" },
		"topics": { "name": "Temas" },
		"categories": { "name": "Categorías" },
		"pchairs": { "name": "Coordinadores de programa" },
		"pchair": { "name": "Coordinador de programa" },
		"pchairEibais": { "name": "Coordinador de EIbAiS" },
		"pc": { "name": "Comité de programa" },
		"generalCommittee": { "name": "Comité general de organización" },
		"genConfeChairs": { "name": "Coordinadores generales de la conferencia" },
		"genProgChairs": { "name": "Coordinadores generales de programa" },
		"iberoASchoolChair": { "name": "Coordinador de la escuela Ibero-Americana" },
		"toolsPaperChair": { "name": "Coordinadores de trabajos de herramientas" },
		"proStuVolunChair": { "name": "Coordinador de actas y estudiantes voluntarios" },
		"publicityCoChairs": { "name": "Coordinadores de difusión" },
		"industryExhibition": { "name": "Coordinador de exhibición industrial" },
		"webChair": { "name": "Coordinador Web" },
		"download": { "name": "Versión descargable" },
		"eibais": { "name": "EIbAIS", "url": "eibais" },
		"eibaisPresentation": { "name": "Presentación", "url": "eibais" },
		"eibaisTutorials": { "name": "Tutoriales" },
		"eibaisTutorials1": { "name": "Ingeniería de Requerimientos" },
		"eibaisTutorials2": { "name": "TBD" },
		"eibaisTutorials3": { "name": "TBD" },
		"eibaisTutorials4": { "name": "Estudios cualitativos" },
		"eibaisTutorials5": { "name": "Derivando Requerimientos utilizando las técnicas de e3value y e3fraud" },
		"eibaisTutorials6": { "name": "Ingeniería de Software para el IoT" },
		"hackaton": { "name": "Hackaton", "url": "hackaton" },
		"volunteers": { "name": "Voluntarios", "url": "volunteers" },
		"about_bogota": { "name": "Acerca de Bogotá", "url": "aboutBogota" },
		"accomodation": { "name": "Acomodación", "url": "accomodation" },
		"toolsPapers": { "name": "Trabajos de herramientas" },
		"technicalAndEmergingPapers": { "name": "Trabajos técnicos e ideas emergentes" },
		"getting_here": { "name": "Llegando aquí", "url": "gettingHere" },
		"getting_the_venue": { "name": "Llegando al lugar" },
		"getting_bogota": { "name": "Llegando a Bogotá" },
	},
	"br": {
		"title": "Congresso Ibero-Americano de Engenharia de Software",
		"home": { "name": "Inicio", "url": "index.html" },
		"news": { "name": "Notícias", "url": "news" },
		"calls": { "name": "Chamadas" },
		"foundationsTracks": { "name": "Trilhas Principais", "url": "foundationstracks" },
		"simposio": { "name": "Simpósio doutoral", "url": "docSymp" },
		"trackst": { "name": "Trilhas", "url": "tracks" },
		"tracks": {
			"1": { "name": "SET", "longName": "Trilha de Engenharia de Software", "url": "track1", "leader": "NN", "email": "", "image": "1cr.jpg" },
			"2": { "name": "WER", "longName": "Engenharia de Requisitos", "url": "track2", "leader": "NN", "email": "", "image": "2rc.jpg" },
			"3": { "name": "ESELAW", "longName": "Trilha de Engenharia de Software Experimental", "url": "track3", "leader": "NN", "email": "", "image": "3rc.jpg" },
			"4": { "name": "Indústria", "longName": "Apresentações Industriais", "url": "track4", "leader": "NN", "email": "", "image": "4rc.jpg" },
			"6": { "name": "Simp Doc", "longName": "Simpósio doutoral", "url": "track6", "leader": "NN", "email": "", "image": "6rc.jpg" }
		},
		"program": { "name": "Programa", "url": "conference" },
		"keynotes": { "name": "Palestrantes convidados", "url": "keyNotes" },
		"generalProgram": { "name": "Programa Geral", "url": "timeTable" },
		"school": { "name": "Escola", "url": "school" },
		"socialEvents": { "name": "Eventos sociais", "url": "socialEvents" },
		"organization": { "name": "Organização", "url": "organization" },
		"committee": { "name": "Comité", "url": "committee" },
		"sponsors": { "name": "Patrocinador", "url": "sponsors" },
		"registration": { "name": "Registro", "url": "registration" },
		"venue": { "name": "Lugar", "url": "venue" },
		"conferenceVenue": { "name": "Lugar da conferência", "url": "conferenceVenue" },
		"contact": { "name": "Contato", "url": "contact" },

		"scope": { "name": "Alcance" },
		"structure": { "name": "Estrutura" },
		"importantDates": { "name": "Datas importantes", "url": "importantDatesMain" },
		"submissions": { "name": "Submissões" },
		"submission": { "name": "Submissão" },
		"evaluationProcess": { "name": "Revisão de trabalhos" },
		"datesSubmi": { "name": "Submissions" },
		"datesConf": { "name": "Conference Major Events" },
		"university": { "name": "Universidad de los Andes", "web": "https://uniandes.edu.co", "url": "university" },
		"depto": { "name": "Departamento de ingeniería de sistemas y computación", "url": "http://sistemas.uniandes.edu.co" },
		"organizers": "Organizadores",
		"topics": { "name": "Tópicos" },
		"categories": { "name": "Categorias" },
		"pchairs": { "name": "Coordenadores do comitê de programa" },
		"pchair": { "name": "Coordenação do programa" },
		"pchairEibais": { "name": "Coordenador de EIbAiS" },
		"pc": { "name": "Comitê de programa" },
		"generalCommittee": { "name": "Comitê geral de oranização" },
		"genConfeChairs": { "name": "Coordenadores do Comitê Geral" },
		"genProgChairs": { "name": "Coordenação de Programa Geral" },
		"iberoASchoolChair": { "name": "Coordenação da 1a Escola Ibero-americana de Engenharia de Software" },
		"toolsPaperChair": { "name": "Coordenação dos Trabalhos de Ferramentas" },
		"proStuVolunChair": { "name": "Coordenação dos Estudantes Voluntários e dos Anais" },
		"publicityCoChairs": { "name": "Coordenação da Publicidade" },
		"industryExhibition": { "name": "Coordenação dos Expositores da Indústria" },
		"webChair": { "name": "Coordenação da WEB" },
		"download": { "name": "Versão para download" },
		"eibais": { "name": "EIbAIS", "url": "eibais" },
		"eibaisPresentation": { "name": "Apresentação", "url": "eibais" },
		"eibaisTutorials": { "name": "Tutoriales" },
		"eibaisTutorials1": { "name": "Engenharia de Requisitos" },
		"eibaisTutorials2": { "name": "TBD" },
		"eibaisTutorials3": { "name": "TBD" },
		"eibaisTutorials4": { "name": "Estudos qualitativos" },
		"eibaisTutorials5": { "name": "Derivando Requisitos usando as técnicas e3value e e3fraud" },
		"eibaisTutorials6": { "name": "Engenharia de Software para o IoT" },
		"hackaton": { "name": "Hackaton", "url": "hackaton" },
		"volunteers": { "name": "Voluntários", "url": "volunteers" },
		"about_bogota": { "name": "Sobre Bogotá", "url": "aboutBogota" },
		"accomodation": { "name": "Acomodação", "url": "accomodation" },
		"toolsPapers": { "name": "Trabalhos de ferramentas" },
		"technicalAndEmergingPapers": { "name": "Trabalhos técnicos e idéias emergentes" },
		"getting_here": { "name": "Chegando aqui", "url": "gettingHere" },
		"getting_the_venue": { "name": "Chegando ao lugar" },
		"getting_bogota": { "name": "Chegando a Bogotá" },
	},
	"shortTitle": "CIbSE",
	"date": { "year": "2018", "days": "26-30", "edition": "XXI" },

};

//---- YEARLY CUSTOMIZATIONS ----
var year = "2018";
var country = "Colombia";

//General
var universityURl = "http://uniandes.edu.co";
var universityURl_en = "http://uniandes.edu.co/en";
var easyChairURL = "http://easychair.com";
var cibseURL = "http://cibseconference.org"
