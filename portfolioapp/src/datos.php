
<?php 
// UD3.2.e. Crear variable llamada loggedIn para mostrar el boton administración
$loggedIn = True;



// UD3.2.c Variable para añadir nombre a contacto
$nombre = 'Miguel Hernández Collado';

//UD3.3.a.b Creación del array, añadir categorias y fecha.
$categorias = [
    1 => "Backend",
    2 => "Frontend",
    3 => "Framework",
    4 => "JavaScript",
    5 => "Python",
    6 => "PHP"
];

// UD3.3.g Lectura de ficheros JSON y fusión en un único array
$json1 = file_get_contents('proyectos1.json');
$json2 = file_get_contents('proyectos2.json');

$proyectos_json1 = json_decode($json1, true);
$proyectos_json2 = json_decode($json2, true);

$proyectos = array_merge($proyectos_json1, $proyectos_json2);

// UD3.3.f Creación el array para filtrar

$proyectos_filtrado =[]

?>