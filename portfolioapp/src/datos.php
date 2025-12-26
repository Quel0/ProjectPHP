
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

$proyectos = [
    [
        "id" => 1,
        "clave" => "proyecto1",
        "titulo" => "Laravel PHP",
        "descripcion" => "Framework backend en PHP",
        "imagen" => "static/images/proyecto1.jpg",
        "fecha" => "15/01/2025",
        "categorias" => [1, 3, 6]
    ],
    [
        "id" => 2,
        "clave" => "proyecto2",
        "titulo" => "Django Python",
        "descripcion" => "Framework backend en Python",
        "imagen" => "static/images/proyecto1.jpg",
        "fecha" => "02/02/2025",
        "categorias" => [1, 3, 5]
    ],
    [
        "id" => 3,
        "clave" => "proyecto3",
        "titulo" => "Node JS",
        "descripcion" => "Entorno backend con JavaScript",
        "imagen" => "static/images/proyecto1.jpg",
        "fecha" => "18/03/2025",
        "categorias" => [1, 4]
    ],
    [
        "id" => 4,
        "clave" => "proyecto4",
        "titulo" => "Angular",
        "descripcion" => "Framework frontend para SPA",
        "imagen" => "static/images/proyecto1.jpg",
        "fecha" => "05/04/2025",
        "categorias" => [2, 3, 4]
    ],
    [
        "id" => 5,
        "clave" => "proyecto5",
        "titulo" => "Next JS",
        "descripcion" => "Framework frontend/backend basado en React",
        "imagen" => "static/images/proyecto1.jpg",
        "fecha" => "21/05/2025",
        "categorias" => [2, 3, 4]
    ],
];


?>