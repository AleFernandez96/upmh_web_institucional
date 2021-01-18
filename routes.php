<?php

/*----------------------------------------------------------------------------------------------------------------------------------------*/
#Configuración de páginas
/*----------------------------------------------------------------------------------------------------------------------------------------*/

$app->get('/page/:idpage', function($pagename) {
    require_once('lib/singepagehelper.php');
    cargarSinglePage($pagename);
});

$app->get('/', function() {     
    require_once('lib/iniciohelper.php');
    getInicio();
});
$app->get('/bis', function() {  
    require_once('lib/iniciohelper.php');
    getbis();
});
$app->get('/accesible', function() {  
    require_once('lib/iniciohelper.php');
    getaccesible();
});
$app->get('/inicio/intranet/blank', function() {    
    require_once('lib/iniciohelper.php');
    getInicio('blank', 2);
});

$app->get('/inicio/pagina/blank', function() {  
    require_once('lib/iniciohelper.php');
    getInicio('blank', 1);
});

$app->notFound(function () { get404Error(); });

$app->get('/404', function() {
    cargarPaginaTemplate('content-template', '404', 'errores/error404');
});

$app->get('/system-information/phpinfo', function() {
    phpinfo();
});



// $app->get('/vinculacion/bolsa-trabajo-prueba/', function() {require_once('lib/bolsatrabajopruebahelper.php');
//     getBolsaTrabajo();
// });
// $app->get('/vinculacion/bolsa-trabajo-prueba/oferta/:id', function($id) {
//     require_once('lib/bolsatrabajopruebahelper.php');
//     getOfertaTrabajo($id);
// });
// $app->get('/vinculacion/bolsa-trabajo-prueba/', function() use ($app) {  $app->redirect(AppConfig::get('BASE_URL') . 'vinculacion/bolsa-trabajo-prueba/'); });



/*----------------------------------------------------------------------------------------------------------------------------------------*/
#Comunicación Social Boletines Informativos
/*----------------------------------------------------------------------------------------------------------------------------------------*/

$app->get('/nota/:id/:nombre', function($id, $nombre) {
	require_once('lib/notashelper.php');
	getNota($id, $nombre);
});

$app->get('/comunicacion-social/notas/', function() {require_once('lib/notasinformativashelper.php');
    getNota();
});

$app->get('/comunicacion-social/notas/:id/:nombre', function($id, $nombre) {
    require_once('lib/notainformativahelper.php');
    getNota($id, $nombre);
});

$app->get('/comunicacion-social/notas/', function() use ($app) {  $app->redirect(AppConfig::get('BASE_URL') . 'comunicacion-social/notas/'); });


/*----------------------------------------------------------------------------------------------------------------------------------------*/
#Bolsa de Trabajo y Practicas Profesionales
/*----------------------------------------------------------------------------------------------------------------------------------------*/

$app->get('/vinculacion/bolsa-trabajo/', function() {require_once('lib/bolsatrabajohelper.php');
    getBolsaTrabajo();
});
$app->get('/vinculacion/bolsa-trabajo/oferta/:id', function($id) {
    require_once('lib/bolsatrabajohelper.php');
    getOfertaTrabajo($id);
});
$app->get('/vinculacion/bolsa-trabajo/', function() use ($app) {  $app->redirect(AppConfig::get('BASE_URL') . 'vinculacion/bolsa-trabajo/'); });

$app->get('/vinculacion/estancias-estadias/', function() {require_once('lib/practicasprofesionaleshelper.php');
    getBolsaTrabajo();
});
$app->get('/vinculacion/estancias-estadias/vacante/:id', function($id) {
    require_once('lib/practicasprofesionaleshelper.php');
    getOfertaTrabajo($id);
});
$app->get('/vinculacion/estancias-estadias/', function() use ($app) {  $app->redirect(AppConfig::get('BASE_URL') . 'vinculacion/estancias-estadias/'); });



/*----------------------------------------------------------------------------------------------------------------------------------------*/
#Página regreso seguro
/*----------------------------------------------------------------------------------------------------------------------------------------*/
$app->get('/regreso-seguro', function() {
    cargarPaginaTemplate('regreso-seguro-template', 'Regreso seguro', 'regreso-seguro/regreso-seguro');
});


/*----------------------------------------------------------------------------------------------------------------------------------------*/
#Plaza QUBIKA
/*----------------------------------------------------------------------------------------------------------------------------------------*/
$app->get('/QUBIKA', function() {
    cargarPaginaTemplate('qubika-template', 'Convocatoria QUBIKA', 'QUBIKA/plaza-qubika');
});


/*----------------------------------------------------------------------------------------------------------------------------------------*/
#Quienes somos
/*----------------------------------------------------------------------------------------------------------------------------------------*/

$app->get('/acerca-de', function() {
    cargarPaginaTemplate('content-template', 'Acerca de nosotros', 'quienes-somos/acerca-de-nosotros');
});

$app->get('/mensaje-titular', function() {
    cargarPaginaTemplate('content-template', 'Mensaje de nuestra titular', 'quienes-somos/mensaje-titular');
});

$app->get('/valores', function() {
    cargarPaginaTemplate('content-template', 'Valores', 'quienes-somos/valores');
});

$app->get('/organigrama', function() {
    cargarPaginaTemplate('content-template', 'Organigrama', 'quienes-somos/organigrama');
});

$app->get('/comite-etica', function() {
    cargarPaginaTemplate('content-template', 'Comité de ética', 'quienes-somos/comite-etica');
});

$app->get('/directorio-institucional/', function() {require_once('lib/directoriohelper.php');
    getBolsaTrabajo();
});


/*----------------------------------------------------------------------------------------------------------------------------------------*/
#Oferta Educativa
/*----------------------------------------------------------------------------------------------------------------------------------------*/

$app->get('/oferta-educativa/IA', function() {
    cargarPaginaTemplate('content-template', 'IA', 'oferta-educativa/IA');
});

$app->get('/oferta-educativa/IAEV', function() {
    cargarPaginaTemplate('content-template', 'IAEV', 'oferta-educativa/IAEV');
});

$app->get('/oferta-educativa/IE', function() {
    cargarPaginaTemplate('content-template', 'IE', 'oferta-educativa/IE');
});

$app->get('/oferta-educativa/ILT', function() {
    cargarPaginaTemplate('content-template', 'ILT', 'oferta-educativa/ILT');
});

$app->get('/oferta-educativa/ITI', function() {
    cargarPaginaTemplate('content-template', 'ITI', 'oferta-educativa/ITI');
});

$app->get('/oferta-educativa/LAB', function() {
    cargarPaginaTemplate('content-template', 'LAB', 'oferta-educativa/LAB');
});

$app->get('/oferta-educativa/LAGE', function() {
    cargarPaginaTemplate('content-template', 'LAGE', 'oferta-educativa/LAGE');
});

$app->get('/oferta-educativa/LCIA', function() {
    cargarPaginaTemplate('content-template', 'LCIA', 'oferta-educativa/LCIA');
});

/*----------------------------------------------------------------------------------------------------------------------------------------*/
#Directorio de Trámites y Servicios
/*----------------------------------------------------------------------------------------------------------------------------------------*/

$app->get('/estudiantes', function() {
    cargarPaginaTemplate('content-template', 'Estudiantes', 'estudiantes/tramites-servicios');
});

$app->get('/estudiantes/becas', function() {
    cargarPaginaTemplate('content-template', 'Becas', 'estudiantes/becas');
});

$app->get('/admision', function() {
    cargarPaginaTemplate('content-template', 'Admisión', 'aspirantes/admision');
});

$app->get('/estudiantes/reglamento', function() {
    cargarPaginaTemplate('content-template', 'Reglamento para estudiantes', 'estudiantes/reglamento-estudiantes');
});

$app->get('/calendario-escolar', function() {
    cargarPaginaTemplate('content-template', 'Calendario escolar', 'general/calendario-escolar');
});


$app->get('/estudiantes/titulacion', function() {
    cargarPaginaTemplate('content-template', 'Titulación', 'estudiantes/titulacion-estudiantes');
});

$app->get('/movilidad', function() {
    cargarPaginaTemplate('content-template', 'Movilidad', 'vinculacion/movilidad-internacional');
});

$app->get('/cuadro-de-honor', function() {
    cargarPaginaTemplate('content-template', 'Cuadro de honor', 'general/cuadro-honor');
});

/*----------------------------------------------------------------------------------------------------------------------------------------*/
#Centro informacion
/*----------------------------------------------------------------------------------------------------------------------------------------*/

$app->get('/centro-informacion', function() {
    cargarPaginaTemplate('content-template', 'Centro de Información', 'c-informacion/c-informacion');
});

$app->get('/centro-informacion/servicios', function() { 
    cargarPaginaTemplate('content-template', 'Servicios Bibliotecarios', 'centro-informacion/servicios');
});

$app->get('/centro-informacion/normatividad', function() { 
    cargarPaginaTemplate('content-template', 'Normatividad', 'centro-informacion/normatividad'); 
});

$app->get('/centro-informacion/colecciones', function() { 
    cargarPaginaTemplate('content-template', 'Colecciones', 'centro-informacion/colecciones'); 
});

$app->get('/centro-informacion/bd', function() { 
    cargarPaginaTemplate('content-template', 'Bases de Datos', 'centro-informacion/basesdatos'); 
});

$app->get('/centro-informacion/catalogoenlinea', function() { 
    cargarPaginaTemplate('content-template', 'Catálogo en Línea', 'centro-informacion/catalogoenlinea'); 
});

$app->get('/centro-informacion/nuevasadquisiciones', function() { 
    cargarPaginaTemplate('content-template', 'Nuevas Adquisiciones', 'centro-informacion/nuevasadquisiciones'); 
});

$app->get('/centro-informacion/boletin', function() { 
    cargarPaginaTemplate('content-template', 'Boletín de Adquisiciones', 'centro-informacion/boletin'); 
});

$app->get('/centro-informacion/recursos-digitales', function() { 
    cargarPaginaTemplate('content-template', 'Recursos de Información y Bibliotecas Digitales', 'centro-informacion/recursos-digitales'); 
});

$app->get('/centro-informacion/lineamientos-servicio-bibliotecario', function() { 
    cargarPaginaTemplate('content-template', 'Lineamientos para el Servicio Bibliotecario', 'centro-informacion/lineamientos-servicio-bibliotecario'); 
});

$app->get('/centro-informacion/lineamientos-reservacion-equipo', function() { 
    cargarPaginaTemplate('content-template', 'Lineamientos para la Reservación de Equipos Multimedia', 'centro-informacion/lineamientos-reservacion-equipo'); 
});


/*----------------------------------------------------------------------------------------------------------------------------------------*/
#General
/*----------------------------------------------------------------------------------------------------------------------------------------*/

$app->get('/licitaciones', function() { 
    cargarPaginaTemplate('content-template','Licitaciones', 'general/licitaciones');
});
$app->get('/accesibilidad', function() { 
    cargarPaginaTemplate('content-template','Declaración de accesibilidad', 'general/accesibilidad');
});
// $app->get('/general/calendario-escolar', function() { cargarPagina('Calendario Escolar', 'general/calendario-escolar'); });
// $app->get('/cuadro-honor', function() { cargarPagina('Cuadro de honor', 'cuadro-honor/cuadro-honor'); });
// $app->get('/general/ubicacion', function() { cargarPagina('Ubicación', 'general/ubicacion'); });
// $app->get('/aviso-de-privacidad', function() { cargarPagina('Aviso de Privacidad', 'general/aviso-de-privacidad'); });
// $app->get('/general/pifi', function() { cargarPagina('pifi', 'general/pifi'); });
// $app->get('/general/profocie', function() { cargarPagina('profocie', 'general/profocie'); });
// $app->get('/general/profocie2015', function() { cargarPagina('profocie2015', 'general/profocie2015'); });
// $app->get('/general/revista', function() { cargarPagina('revista', 'general/revista'); });


// $app->get('/mision', function() { cargarPagina('Misión', 'quienes-somos/mision'); });
// $app->get('/vision', function() { cargarPagina('Visión', 'quienes-somos/vision'); });
// $app->get('/valores', function() { cargarPagina('Valores', 'quienes-somos/valores'); });
// $app->get('/politica-calidad', function() { cargarPagina('Política de calidad', 'quienes-somos/politica-calidad'); });
// $app->get('/antecedentes', function() { cargarPagina('Antecedentes', 'quienes-somos/antecedentes'); });
// $app->get('/organigrama', function() { cargarPagina('Organigrama', 'quienes-somos/organigrama'); });
// $app->get('/codigoetica', function() { cargarPagina('codigoetica', 'quienes-somos/codigoetica'); });
// $app->get('/comite-etica', function() { cargarPagina('Comité de Ética', 'quienes-somos/comite-etica'); });
$app->get('/estatutoorganico', function() { cargarPagina('Estatuto Orgánico', 'quienes-somos/estatutoorganico'); });
$app->get('/reglamentointerno', function() { cargarPagina('Reglamento Interno', 'quienes-somos/reglamentointerno'); });
$app->get('/filosofiaupmh', function() { cargarPagina('Filosofía', 'quienes-somos/filosofiaupmh'); });
$app->get('/MO', function() { cargarPagina('MO', 'quienes-somos/MO'); });
// $app->get('/mensaje-titular', function() { cargarPagina('Mensaje del Titular', 'quienes-somos/mensaje-titular'); });
// $app->get('/directorio', function() { cargarPagina('Directorio', 'general/directorio'); });
$app->get('/informes', function() { cargarPagina('Informes', 'general/informes'); });
$app->get('/directorio-blank', function() { cargarPaginaTemplate('blank', 'Directorio', 'general/directorio'); });
$app->get('/general/modelobilingue', function() { cargarPagina('modelobilingue', 'general/modelobilingue'); });
$app->get('/personal/convocatorias-ingreso-docente', function() { cargarPagina('Convocatorias de Ingreso de Docentes', 'general/convocatorias-ingreso-docente'); });
$app->get('/publicaciones', function() { cargarPagina('Publicaciones', 'quienes-somos/publicaciones'); });

/*----------------------------------------------------------------------------------------------------------------------------------------*/
#Certificaciones y acreditaciones
/*----------------------------------------------------------------------------------------------------------------------------------------*/
$app->get('/general/certificaciones/Certificacioniso', function() { cargarPagina('Certificación ISO 9001:2015', 'general/certificaciones/Certificacioniso'); });
$app->get('/general/certificaciones/Certificacion2004', function() { cargarPagina('Certificación ISO 14001:2004', 'general/certificaciones/Certificacion2004'); });
$app->get('/general/certificaciones/Acreditacionielcia', function() { cargarPagina('Acreditación CACECA', 'general/certificaciones/Acreditacionielcia'); });
$app->get('/general/certificaciones/Acreditacionilt', function() { cargarPagina('Acreditación CACEI', 'general/certificaciones/Acreditacionilt'); });
$app->get('/general/certificaciones/Acreditacionie', function() { cargarPagina('Acreditación CACEI', 'general/certificaciones/Acreditacionie'); });
$app->get('/general/certificaciones/Acreditacioniti', function() { cargarPagina('Acreditación CONAIC', 'general/certificaciones/Acreditacioniti'); });
$app->get('/general/certificaciones/Acreditacionp', function() { cargarPagina('Acreditación CONAIC', 'general/certificaciones/Acreditacionp'); });
$app->get('/general/certificaciones/Reconocimiento', function() { cargarPagina('Reconocimiento IAE', 'general/certificaciones/Reconocimiento'); });
$app->get('/general/certificaciones/ReconocimientoMIA', function() { cargarPagina('Reconocimiento MIA', 'general/certificaciones/ReconocimientoMIA'); });

/*----------------------------------------------------------------------------------------------------------------------------------------*/
#Transparencia
/*----------------------------------------------------------------------------------------------------------------------------------------*/

$app->get('/transparencia', function() { cargarPaginaTemplate('transparencia', 'Transparencia', 'transparencia/inicio'); });
$app->get('/transparencia/conac', function() use ($app) {  $app->redirect(AppConfig::get('BASE_URL') . '/transparencia/conac/normatividad'); });
$app->get('/transparencia/conac/normatividad', function() { cargarPaginaTemplate('transparencia', 'CONAC - Normatividad - Transparencia', 'transparencia/conac-normatividad'); });
$app->get('/transparencia/conac/cumplimiento-a-la-normatividad', function() { cargarPaginaTemplate('transparencia', 'CONAC - Normatividad - Transparencia', 'transparencia/conac-cumplimiento'); });
$app->get('/transparencia/estados-e-informes-contables-presupuestarios-programaticos', function() { cargarPaginaTemplate('transparencia', 'Estados e informes contables, presupuestarios, programáticos e indicadores de postura fiscal y complementarios - Transparencia', 'transparencia/estados-informes'); });

$app->get('/transparencia', function() { cargarPaginaTemplate('Transparencia', 'transparencia/inicio2'); });

$app->get('/transparencia_2017', function() { cargarPaginaTemplate('transparencia_2017', 'Transparencia', 'transparencia/inicio_2017'); });

// articulo 22
$app->get('/transparencia/22', function() { cargarPaginaTemplate('transparencia-22', 'Transparencia', 'transparencia/articulo22'); });


/*----------------------------------------------------------------------------------------------------------------------------------------*/
#Contraloría social
/*----------------------------------------------------------------------------------------------------------------------------------------*/
$app->get('/contraloria-social', function() { 
    cargarPaginaTemplate('content-template', 'Contraloría social', 'contraloria-social/contraloria-social'); 
});

$app->get('/contraloria-social-2014', function() { 
    cargarPaginaTemplate('content-template', 'Contraloría social', 'contraloria-social/contraloria-social-2014'); 
});

$app->get('/contraloria-social-2015', function() { 
    cargarPaginaTemplate('content-template', 'Contraloría social', 'contraloria-social/contraloria-social-2015'); 
});

$app->get('/contraloria-social-2016', function() { 
    cargarPaginaTemplate('content-template', 'Contraloría social', 'contraloria-social/contraloria-social-2016'); 
});

$app->get('/contraloria-social-2017-2018', function() { 
    cargarPaginaTemplate('content-template', 'Contraloría social', 'contraloria-social/contraloria-social-2017-2018'); 
});

$app->get('/contraloria-social-2018-2019', function() { 
    cargarPaginaTemplate('content-template', 'Contraloría social', 'contraloria-social/contraloria-social-2018-2019'); 
});

$app->get('/contraloria-social-2019-2020', function() { 
    cargarPaginaTemplate('content-template', 'Contraloría social', 'contraloria-social/contraloria-social-2019-2020'); 
});

$app->get('/PROFEXCE-2019-2020', function() { 
    cargarPaginaTemplate('content-template', 'Contraloría social', 'contraloria-social/PROFEXCE-2019-2020'); 
});

$app->get('/PFCE-2019-2020', function() { 
    cargarPaginaTemplate('content-template', 'Contraloría social', 'contraloria-social/PFCE-2019-2020'); 
});

$app->get('/PRODEP-2019-2020', function() { 
    cargarPaginaTemplate('content-template', 'Contraloría social', 'contraloria-social/PRODEP-2019-2020'); 
});



// Página accesibilidad




// $app->get('/contacto', function() {
//     cargarPaginaTemplate('content-template', 'Contacto', 'general/contacto');
// });

// $app->post('/contacto', function() {
//     cargarPaginaTemplate('content-template', 'Contacto', 'general/contacto');
// });

// $app->get('/working', function() {
//     cargarPaginaTemplate('accesibilidad-working', 'working', 'accesibilidad/working');
// });

// $app->post('/accesibilidad/contacto', function() { cargarPagina('Contacto', 'general/contacto'); });




/*----------------------------------------------------------------------------------------------------------------------------------------*/
#Mi Universidada en Casa
/*----------------------------------------------------------------------------------------------------------------------------------------*/

$app->get('/mi_universidad_en_casa_upmh', function() {
    cargarPaginaTemplate('mi-escuela-en-casa', 'Mi Universidad En Casa', 'mi_universidad_en_casa/inicio');
});


$app->get('/miuniversidadencasa-lcia', function() { cargarPagina('Mi Universidad en Casa', 'general/miuniversidadencasa-lcia'); });

$app->get('/miuniversidadencasa-ia', function() { cargarPagina('Mi Universidad en Casa', 'general/miuniversidadencasa-ia'); });

$app->get('/miuniversidadencasa-ilt', function() { cargarPagina('Mi Universidad en Casa', 'general/miuniversidadencasa-ilt'); });

$app->get('/miuniversidadencasa-lage', function() { cargarPagina('Mi Universidad en Casa', 'general/miuniversidadencasa-lage'); });

$app->get('/miuniversidadencasa-iti', function() { cargarPagina('Mi Universidad en Casa', 'general/miuniversidadencasa-iti'); });

$app->get('/miuniversidadencasa-iaev', function() { cargarPagina('Mi Universidad en Casa', 'general/miuniversidadencasa-iaev'); });

$app->get('/miuniversidadencasa-idiomas', function() { cargarPagina('Mi Universidad en Casa', 'general/miuniversidadencasa-iaev'); });

$app->get('/miuniversidadencasa-ie', function() { cargarPagina('Mi Universidad en Casa', 'general/miuniversidadencasa-ie'); });

$app->get('/miuniversidadencasa-lab', function() { cargarPagina('Mi Universidad en Casa', 'general/miuniversidadencasa-lab'); });

/*----------------------------------------------------------------------------------------------------------------------------------------*/
#Vinculación
/*----------------------------------------------------------------------------------------------------------------------------------------*/
// Movilidad
// $app->get('/movilidad', function() { cargarPagina('Movilidad', 'vinculacion/movilidad/movilidad'); });
// $app->get('/mprueba', function() { cargarPagina('Movilidad', 'vinculacion/mprueba'); });
// Seguimiento a egresados y casos de exito
// $app->get('/segresados', function() { cargarPagina('Egresados', 'vinculacion/egresados/egresados'); });
// $app->get('/registro-egresados', function() { cargarPagina('Registro', 'vinculacion/egresados/registro-egresados'); });
// $app->get('/revista-egresados', function() { cargarPagina('Revistas', 'vinculacion/egresados/revista-egresados'); });
// $app->get('/semana-cyt', function() { cargarPagina('Semana estatatal femenil de ciencia y tecnología', 'vinculacion/semana-cyt/semana-cyt'); });


// $app->get('/transparencia/PROFOCIE', function() {require_once('pages/transparencia/PROFOCIE.php');
//     getBolsaTrabajo();
// });

// Bolsa de trabajo prueba





// Bolsa de trabajo

// $app->get('/vinculacion/bolsa-trabajo/', function() {require_once('lib/bolsatrabajohelper.php');
//     getBolsaTrabajo();
// });
// $app->get('/vinculacion/bolsa-trabajo/oferta/:id', function($id) {
//     require_once('lib/bolsatrabajohelper.php');
//     getOfertaTrabajo($id);
// });
// $app->get('/vinculacion/bolsa-trabajo/', function() use ($app) {  $app->redirect(AppConfig::get('BASE_URL') . 'vinculacion/bolsa-trabajo/'); });


// Practicas


// Movilidad

// $app->get('/movilidadprueba/', function() {require_once('lib/movilidadhelper.php');
// });
// $app->get('/movilidadprueba/', function() use ($app) {  $app->redirect(AppConfig::get('BASE_URL') . 'movilidadprueba/'); });

// Directorio


/*----------------------------------------------------------------------------------------------------------------------------------------*/
#Oferta educativa
/*----------------------------------------------------------------------------------------------------------------------------------------*/
// $app->get('/oferta-educativa/lcia', function() {
//     cargarPagina('Licenciatura en Comercio Internacional y Aduanas', 'oferta-educativa/lcia');
// });
// $app->get('/oferta-educativa/LAB', function() {
//     cargarPagina('Licenciatura en Arquitectura Bioclimática', 'oferta-educativa/LAB');
// });
// $app->get('/oferta-educativa/licenciatura-en-administracion-y-gestion-de-pymes', function() {
//     cargarPagina('Administración y Gestión de Pequeñas y Medianas Empresas', 'oferta-educativa/licenciatura-administracion-gestion-pymes');
// });
// $app->get('/oferta-educativa/ingenieria-en-animacion-y-efectos-visuales', function() {
//     cargarPagina('Ingeniería en Animación y Efectos Visuales', 'oferta-educativa/ingenieria-animacion-efectos-visuales');
// });
// $app->get('/oferta-educativa/ingenieria-en-aeronautica', function() {
//     cargarPagina('Ingeniería en Aeronaútica', 'oferta-educativa/ingenieria-aeronautica');
// });

// $app->get('/oferta-educativa/manualesaeronautica', function() {
//     cargarPagina('Manuales', 'oferta-educativa/manualesaeronautica');
// });
// $app->get('/oferta-educativa/ingenieria-en-energia', function() {
//     cargarPagina('Ingeniería en Energía', 'oferta-educativa/ingenieria-energia');
// });
// $app->get('/oferta-educativa/ingenieria-en-tecnologias-de-la-informacion', function() {
//     cargarPagina('Ingeniería en Tecnologías de la Información', 'oferta-educativa/ingenieria-tecnologias-informacion');
// });
// $app->get('/oferta-educativa/ingenieria-en-logistica-y-transporte', function() {
//     cargarPagina('Ingeniería en Logística y Trasporte', 'oferta-educativa/ingenieria-logistica-transporte');
// });
// $app->get('/oferta-educativa/modelo-educativo', function() {
//     cargarPagina('Modelo educativo', 'oferta-educativa/modelo-educativo');
// });

// $app->get('/oferta-educativa/maestria-en-comercio-logistica-internacional', function() {
//     cargarPagina('Maestría en Comercio y Logística Internacional', 'oferta-educativa/maestrica-comercio-logistica-internacional');
// });

// $app->get('/oferta-educativa/publicaciones', function() {
//     cargarPagina('Publicaciones', 'oferta-educativa/publicaciones');
// });

/*Licenciatura en Comercio Internacional y Aduanas*/
// $app->get('/oferta-educativa/licenciatura-en-comercio-internacional', function() {
//     cargarPaginaTemplate('micrositio-lcia', 'Licenciatura en Comercio Internacional y Aduanas', 'oferta-educativa/lcia/inicio');
// });
// $app->get('/oferta-educativa/licenciatura-en-comercio-internacional/quienes-somos', function() {
//     cargarPaginaTemplate('micrositio-lcia', 'Licenciatura en Comercio Internacional y Aduanas', 'oferta-educativa/lcia/quienes-somos');
// });
// $app->get('/oferta-educativa/licenciatura-en-comercio-internacional/objetivos', function() {
//     cargarPaginaTemplate('micrositio-lcia', 'Licenciatura en Comercio Internacional y Aduanas', 'oferta-educativa/lcia/objetivos');
// });
// $app->get('/oferta-educativa/licenciatura-en-comercio-internacional/perfiles-y-campo-laboral', function() {
//     cargarPaginaTemplate('micrositio-lcia', 'Licenciatura en Comercio Internacional y Aduanas', 'oferta-educativa/lcia/perfiles-y-campo-laboral');
// });
// $app->get('/oferta-educativa/licenciatura-en-comercio-internacional/plan-de-estudios', function() {
//     cargarPaginaTemplate('micrositio-lcia', 'Licenciatura en Comercio Internacional y Aduanas', 'oferta-educativa/lcia/plan-de-estudios');
// });
// $app->get('/oferta-educativa/licenciatura-en-comercio-internacional/cuerpo-academico', function() {
//     cargarPaginaTemplate('micrositio-lcia', 'Licenciatura en Comercio Internacional y Aduanas', 'oferta-educativa/lcia/cuerpo-academico');
// });
// $app->get('/oferta-educativa/licenciatura-en-comercio-internacional/visitas-industriales', function() {
//     cargarPaginaTemplate('micrositio-lcia', 'Licenciatura en Comercio Internacional y Aduanas', 'oferta-educativa/lcia/visitas-industriales');
// });
// $app->get('/oferta-educativa/licenciatura-en-comercio-internacional/estancias-y-estadias', function() {
//     cargarPaginaTemplate('micrositio-lcia', 'Licenciatura en Comercio Internacional y Aduanas', 'oferta-educativa/lcia/estancias-y-estadias');
// });
// $app->get('/oferta-educativa/licenciatura-en-comercio-internacional/informes', function() {
//     cargarPaginaTemplate('micrositio-lcia', 'Licenciatura en Comercio Internacional y Aduanas', 'oferta-educativa/lcia/informes');
// });

/* idiomas */
// $app->get('/oferta-educativa/idiomas/arte-terapia', function() {
//     cargarPagina('Arte Terapia', 'oferta-educativa/idiomas/arte-terapia');
// });
// $app->get('/oferta-educativa/idiomas/chino-mandarin', function() {
//     cargarPagina('Chino Mandarin', 'oferta-educativa/idiomas/chino-mandarin');
// });
// $app->get('/oferta-educativa/idiomas/cocina-china', function() {
//     cargarPagina('Cocina China', 'oferta-educativa/idiomas/cocina-china');
// });
// $app->get('/oferta-educativa/idiomas/frances', function() {
//     cargarPagina('Frances', 'oferta-educativa/idiomas/frances');
// });
// $app->get('/oferta-educativa/idiomas/ingles', function() {
//     cargarPagina('Inglés', 'oferta-educativa/idiomas/ingles');
// });
// $app->get('/oferta-educativa/idiomas/ingles-intensivo', function() {
//     cargarPagina('Inglés Intensivo', 'oferta-educativa/idiomas/ingles-intensivo');
// });
// $app->get('/oferta-educativa/idiomas/stop', function() {
//     cargarPagina('Stop', 'oferta-educativa/idiomas/stop');
// });
// $app->get('/oferta-educativa/idiomas/aleman', function() {
//     cargarPagina('Aleman', 'oferta-educativa/idiomas/aleman');
// });


/*----------------------------------------------------------------------------------------------------------------------------------------*/
#Maestría
/*----------------------------------------------------------------------------------------------------------------------------------------*/
/*$app->get('/maestria', function() {
	
	$acceso = getItemUrl('pages/oferta-educativa/maestria-cli/conacyt/index.php', FALSE);
    cargarIframeTemplate('maestria-cli', 'Maestría en Comercio y Logística Internacional', $acceso);
});

$app->get('/maestria/cli', function() {
    cargarPaginaTemplate('maestria-cli', 'Maestría en Comercio y Logística Internacional', 'oferta-educativa/maestria-cli/inicio');
});

$app->get('/maestria/cli/objetivos', function() {
    cargarPaginaTemplate('maestria-cli', 'Maestría en Comercio y Logística Internacional', 'oferta-educativa/maestria-cli/objetivos');
});

$app->get('/maestria/cli/requisitos-ingreso', function() {
    cargarPaginaTemplate('maestria-cli', 'Maestría en Comercio y Logística Internacional', 'oferta-educativa/maestria-cli/requisitos-ingreso');
});

$app->get('/maestria/cli/perfil-ingreso', function() {
    cargarPaginaTemplate('maestria-cli', 'Maestría en Comercio y Logística Internacional', 'oferta-educativa/maestria-cli/perfil-ingreso');
});

$app->get('/maestria/cli/perfil-egreso', function() {
    cargarPaginaTemplate('maestria-cli', 'Maestría en Comercio y Logística Internacional', 'oferta-educativa/maestria-cli/perfil-egreso');
});

$app->get('/maestria/cli/nucleo-academico-basico', function() {
    cargarPaginaTemplate('maestria-cli', 'Maestría en Comercio y Logística Internacional', 'oferta-educativa/maestria-cli/nucleo-academico');
});

$app->get('/maestria/cli/lineas-generacion-aplicacion', function() {
    cargarPaginaTemplate('maestria-cli', 'Maestría en Comercio y Logística Internacional', 'oferta-educativa/maestria-cli/lineas');
});

$app->get('/maestria/cli/tutoria', function() {
    cargarPaginaTemplate('maestria-cli', 'Maestría en Comercio y Logística Internacional', 'oferta-educativa/maestria-cli/tutoria');
});

$app->get('/maestria/cli/proceso-admision', function() {
    cargarPaginaTemplate('maestria-cli', 'Maestría en Comercio y Logística Internacional', 'oferta-educativa/maestria-cli/proceso-admision');
});

$app->get('/maestria/cli/convocatoria', function() {
    cargarPaginaTemplate('maestria-cli', 'Maestría en Comercio y Logística Internacional', 'oferta-educativa/maestria-cli/convocatoria');
});
*/



/*----------------------------------------------------------------------------------------------------------------------------------------*/
#Aspirantes
/*----------------------------------------------------------------------------------------------------------------------------------------*/
// $app->get('/metroadmision-posgrado', function() { redireccionarPagina('http://sistemas.upmh.edu.mx/metroadmisionposgrado/'); });
// $app->get('/metroadmision-licenciatura-e-ingenierias', function() { redireccionarPagina('http://sistemas.upmh.edu.mx/metroadmision/'); });

/*----------------------------------------------------------------------------------------------------------------------------------------*/
#Tramites y servicios - Estudiantes
/*----------------------------------------------------------------------------------------------------------------------------------------*/

// $app->get('/estudiantes/titulacion', function() { cargarPagina('Titulación', 'estudiantes/titulacion'); });
// $app->get('/estudiantes/becas', function() { cargarPagina('Becas', 'estudiantes/becas'); });
// $app->get('/estudiantes/admision', function() { cargarPagina('Requisitos de Admisión', 'estudiantes/admision'); });
// $app->get('/estudiantes/reglamento', function() { cargarPagina('Reglamento Institucional', 'estudiantes/reglamento'); });


// $app->get('/alumnos/titulacion', function() use ($app) {  $app->redirect(AppConfig::get('BASE_URL') . 'estudiantes/titulacion'); });
// $app->get('/alumnos/becas', function() use ($app) {  $app->redirect(AppConfig::get('BASE_URL') . 'estudiantes/becas'); });
// $app->get('/alumnos/reglamento', function()  use ($app) {  $app->redirect(AppConfig::get('BASE_URL') . 'estudiantes/reglamento'); });
// $app->get('/alumnos/proceso-reinscripcion', function() use ($app) {  $app->redirect(AppConfig::get('BASE_URL') . 'estudiantes/proceso-reinscripcion'); });



/*----------------------------------------------------------------------------------------------------------------------------------------*/
#Adquisiciones
/*----------------------------------------------------------------------------------------------------------------------------------------*/

// $app->get('/foro.educacion.superior.hidalgo', function() { cargarPaginaTemplate('foro.educacion.superior.hidalgo', 'Licitaciones','adquisiciones/licitaciones'); });

// $app->get('/adquisiciones-2', function() { cargarPaginaTemplate('adquisiciones-2', 'Licitaciones','adquisiciones/licitaciones'); });

// $app->get('/foro.ley.superior/', function() { cargarPaginaTemplate('foro.ley.superior', 'foro.ley.superior','foro.ley.superior'); });



/*----------------------------------------------------------------------------------------------------------------------------------------*/
#General
/*----------------------------------------------------------------------------------------------------------------------------------------*/


// $app->get('/general/articulos', function() { cargarPagina('articulos', 'general/articulos'); });
// $app->get('/contacto', function() { cargarPagina('Contacto', 'general/contacto'); });
// $app->post('/contacto', function() { cargarPagina('Contacto', 'general/contacto'); });
// $app->get('/banxico', function() { cargarPagina('Banxico', 'general/banxico'); });

// $app->get('/cedem', function() { cargarPagina('CEDEM', 'general/cedem'); });



// $app->get('/accesibilidad/contacto', function() {
//     cargarPaginaTemplate('prueba-plantilla', 'Contacto', 'general/accesibilidad-contacto');
// });




// Oferta Educativa




/*----------------------------------------------------------------------------------------------------------------------------------------*/
#Micrositios
/*----------------------------------------------------------------------------------------------------------------------------------------*/

/*Seminario de Investigación: Los retos en el Comercio Internacional de México*/




// $app->get('/seminario-cia/ejes-tematicos', function() {
//     cargarPaginaTemplate('micrositio-cia-seminario', 'Seminario de Investigación: Los retos en el Comercio Internacional de México', 'micrositios/cia-seminario/ejes-tematicos');
// });

// $app->get('/seminario-cia/procedimiento-de-inscripcion', function() {
//     cargarPaginaTemplate('micrositio-cia-seminario', 'Seminario de Investigación: Los retos en el Comercio Internacional de México', 'micrositios/cia-seminario/procedimiento-inscripcion');
// });

// $app->get('/seminario-cia/costo-de-participacion', function() {
//     cargarPaginaTemplate('micrositio-cia-seminario', 'Seminario de Investigación: Los retos en el Comercio Internacional de México', 'micrositios/cia-seminario/costo-participacion');
// });

// $app->get('/seminario-cia/criterios-para-publicacion', function() {
//     cargarPaginaTemplate('micrositio-cia-seminario', 'Seminario de Investigación: Los retos en el Comercio Internacional de México', 'micrositios/cia-seminario/criterios-publicacion');
// });

// $app->get('/seminario-cia/fechas-importantes', function() {
//     cargarPaginaTemplate('micrositio-cia-seminario', 'Seminario de Investigación: Los retos en el Comercio Internacional de México', 'micrositios/cia-seminario/fechas-importantes');
// });

// $app->get('/seminario-cia/programacion', function() {
//     cargarPaginaTemplate('micrositio-cia-seminario', 'Seminario de Investigación: Los retos en el Comercio Internacional de México', 'micrositios/cia-seminario/programacion');
// });

// $app->get('/seminario-cia/informes', function() {
//     cargarPaginaTemplate('micrositio-cia-seminario', 'Seminario de Investigación: Los retos en el Comercio Internacional de México', 'micrositios/cia-seminario/informes');
// });

// $app->get('/seminario-cia/convocatoria-completa', function() {
//     cargarPaginaTemplate('micrositio-cia-seminario', 'Seminario de Investigación: Los retos en el Comercio Internacional de México', 'micrositios/cia-seminario/convocatoria-completa');
// });















/*----------------------------------------------------------------------------------------------------------------------------------------*/
                                                    #LIGAS PAGINAS EN INGLES BIS
/*----------------------------------------------------------------------------------------------------------------------------------------*/

/* Who we are*/
// $app->get('/bis/mission', function() { cargarPaginaTemplate('bis', 'Mission', 'bis/mission'); });
// $app->get('/bis/vision', function() { cargarPaginaTemplate('bis', 'Vision', 'bis/vision'); });
// $app->get('/bis/values', function() { cargarPaginaTemplate('bis', 'Values', 'bis/values'); });
// $app->get('/bis/quality-politics', function() { cargarPaginaTemplate('bis', 'Quality Policy', 'bis/quality-politics'); });
// $app->get('/bis/background', function() { cargarPaginaTemplate('bis', 'Background', 'bis/background'); });
// $app->get('/bis/Directory', function() { cargarPaginaTemplate('bis', 'Directory', 'bis/Directory'); });
// $app->get('/bis/Organization', function() { cargarPaginaTemplate('bis', 'Organization', 'bis/Organization'); });
// $app->get('/bis/Rectors-message', function() { cargarPaginaTemplate('bis', 'Rector´s Message', 'bis/Rectors-message'); });

/*Educative Offer*/
// $app->get('/bis/educative-offer/LAB', function() { cargarPaginaTemplate('bis', 'Bio-Climate Arquitecture', 'bis/educative-offer/LAB'); });
// $app->get('/bis/educative-offer/lcia', function() { cargarPaginaTemplate('bis', 'International Trade and Customs', 'bis/educative-offer/lcia'); });
// $app->get('/bis/educative-offer/BASyME', function() { cargarPaginaTemplate('bis', 'Administration and Management of Small and Medium Enterprises', 'bis/educative-offer/BASyME'); });
// $app->get('/bis/educative-offer/Engineering-in-Aeronautics', function() { cargarPaginaTemplate('bis', 'Aeronautics', 'bis/educative-offer/Engineering-in-Aeronautics'); });
// $app->get('/bis/educative-offer/EAVE', function() { cargarPaginaTemplate('bis', 'Animation and Visual Effects', 'bis/educative-offer/EAVE'); });
// $app->get('/bis/educative-offer/Energy-engineering', function() { cargarPaginaTemplate('bis', 'Energy', 'bis/educative-offer/Energy-engineering'); });
// $app->get('/bis/educative-offer/ELT', function() { cargarPaginaTemplate('bis', 'Logistics and Transportation', 'bis/educative-offer/ELT'); });
// $app->get('/bis/educative-offer/ITE', function() { cargarPaginaTemplate('bis', 'Information technology', 'bis/educative-offer/ITE'); });
// $app->get('/bis/educative-offer/educational-model', function() { cargarPaginaTemplate('bis', 'Educational Model', 'bis/educative-offer/educational-model'); });
// $app->get('/bis/educative-offer/MCIL', function() { cargarPaginaTemplate('bis', 'Trade and International Logistics', 'bis/educative-offer/MCIL'); });
// $app->get('/bis/educative-offer/ms_aero/index', function() { cargarPaginaTemplate('bis', 'MSc in Aerospace Engineering', 'bis/educative-offer/ms_aero/index'); });
// $app->get('/bis/reglamento', function() { cargarPaginaTemplate('bis', 'Regulations', 'bis/reglamento'); });
// $app->get('/bis/becas', function() { cargarPaginaTemplate('bis', 'Scholarships', 'bis/becas'); });
// $app->get('/bis/centro_informacion', function() { cargarPaginaTemplate('bis', 'Information Center', 'bis/centro_informacion'); });

/*principal main*/
// $app->get('/bis/educational-model', function() { cargarPaginaTemplate('bis', 'Educational Model', 'bis/educational-model'); });
// $app->get('/bis/calendar-school', function() { cargarPaginaTemplate('bis', 'School calendar', 'bis/calendar-school'); });
// $app->get('/bis/degree_process', function() { cargarPaginaTemplate('bis', 'Degree Process', 'bis/degree_process'); });
// $app->get('/bis/location', function() { cargarPaginaTemplate('bis', 'Location', 'bis/location'); });
// $app->get('/bis/Magazine', function() { cargarPaginaTemplate('bis', 'Scientific Magazine', 'bis/Magazine'); });
// $app->get('/Cedem', function() { cargarPaginaTemplate('bis', 'C.E.D.E.M.', 'bis/Cedem'); });


// $app->get('/bis/Information_Center', function() { cargarPaginaTemplate('bis', 'Information Center', 'bis/Information_Center'); });
// $app->get('/bis/Contact_us', function() { cargarPaginaTemplate('bis', 'Contact us', 'bis/Contact_us'); });


/*links*/

// $app->get('/bis/Entry_requirements', function() { cargarPaginaTemplate('bis', 'Entry Requirements', 'bis/Entry_requirements'); });
// $app->get('/bis/Institutional_Regulation', function() { cargarPaginaTemplate('bis', 'Institutional Regulation', 'bis/Institutional_Regulation'); });
// $app->get('/bis/Scholarships', function() { cargarPaginaTemplate('bis', 'Scholarships', 'bis/Scholarships'); });


/*Cetifications*/

// $app->get('/bis/certifications/Certificationiso', function() { cargarPaginaTemplate('bis', 'Certifications ISO', 'bis/certifications/Certificationiso'); });
// $app->get('/bis/certifications/Certification2004', function() { cargarPaginaTemplate('bis', 'Certification 2004', 'bis/certifications/Certification2004'); });
// $app->get('/bis/certifications/Acreditationielcia', function() { cargarPaginaTemplate('bis', 'Acreditation', 'bis/certifications/Acreditationielcia'); });
// $app->get('/bis/certifications/Acreditationilt', function() { cargarPaginaTemplate('bis', 'Acreditation ', 'bis/certifications/Acreditationilt'); });
// $app->get('/bis/certifications/Acreditationie', function() { cargarPaginaTemplate('bis', 'Acreditation ', 'bis/certifications/Acreditationie'); });
// $app->get('/bis/certifications/Acreditationiti', function() { cargarPaginaTemplate('bis', 'Acreditation ', 'bis/certifications/Acreditationiti'); });
// $app->get('/bis/certifications/Acreditationpymes', function() { cargarPaginaTemplate('bis', 'Acreditation ', 'bis/certifications/Acreditationpymes'); });

// $app->get('/bis/certifications/Reconocimiento', function() { cargarPaginaTemplate('bis', 'Acreditation ', 'bis/certifications/Reconocimiento'); });
// $app->get('/bis/certifications/ReconocimientoMIA', function() { cargarPaginaTemplate('bis', 'Acreditation ', 'bis/certifications/ReconocimientoMIA'); });





/*----------------------------------------------------------------------------------------------------------------------------------------*/
#Información del sistema
/*----------------------------------------------------------------------------------------------------------------------------------------*/



// Rutas de prueba upmetropolitana
// $app->get('/upmetropolitana', function() {  
//     require_once('lib/iniciohelper.php');
//     getupmetropolitana();
// });

// $app->get('/upmetropolitana/acerca-de/mision', function() {
//     cargarPagina('upmetropolitana/acerca-de/mision', 'Misión', 'upmetropolitana/acerca-de/mision');
// });
