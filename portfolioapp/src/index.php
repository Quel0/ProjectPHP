<?php include("templates/header.php"); ?>
<?php include_once("utils/utiles.php"); ?>
<?php include("datos.php"); ?>
<?php

// UD3.3.h Borrar el último proyecto del array usando el parámetro delete
if (isset($_GET['delete']) && $_GET['delete'] === 'true') {
    array_pop($proyectos);
}

// UD3.3.f Filtrado de proyectos por categoría
$categoria_filtro = isset($_GET['categoria']) ? $_GET['categoria'] : null;

if ($categoria_filtro !== null) {
    $proyectos_filtrado = array_filter($proyectos, function($proyecto) use ($categoria_filtro) {
        return in_array($categoria_filtro, $proyecto['categorias']);
    });
} else {
    $proyectos_filtrado = $proyectos;
}

// UD.3.2.f Funcion para ordenar proyectos por título
$orden = isset($_GET['orden']) ? $_GET['orden'] : null;
if ($orden === 'asc'):
    $proyectos_filtrado = ordenaProyectosAsc($proyectos_filtrado);
elseif ($orden === 'dsc'):
    $proyectos_filtrado = ordenaProyectosDsc($proyectos_filtrado);
endif;
?>

<div class="container mb-5">
    <div class="row">
 
        <div class="col-12 d-flex justify-content-center my-3 gap-2" role="group" aria-label="Orden de proyectos">
            <button type="button" class="btn btn-primary"><a href="?<?php echo $categoria_filtro ? 'categoria=' . $categoria_filtro . '&' : '' ?>orden=asc">A–Z</a></button>
            <button type="button" class="btn btn-outline-secondary"><a href="?<?php echo $categoria_filtro ? 'categoria=' . $categoria_filtro . '&' : '' ?>orden=dsc">Z–A</a></button>
        </div>

    </div>
    <!-- UD3.3.h Borrado ultimo elemento del array -->
    <div class="col-12 d-flex justify-content-center my-3 gap-2">
    <button type="button" class="btn btn-danger">
        <a href="?delete=true">DELETE</a>
    </button>
</div>
    
    <div class="container mb-5">
        <div class="row">
            <?php foreach ($proyectos_filtrado as $proyecto): ?>
                <div class="col-sm-3">
                    <!-- UD3.2.c Envia dinamicamente a cada proyecto regodiendo la variable usando GET -->
                    <a href="proyecto.php?proyectoId=<?php echo $proyecto["id"] ?>">
                        <div class="card" style="width: 18rem;">
                            <!-- UD3.2.c Imprimir imagen o imagen de notfound si no esiste la imagen con operador ternario -->
                            <img class="card-img-top"
                                src="<?php echo file_exists($proyecto['imagen']) ? $proyecto['imagen'] : "static/images/notfound.jpg" ?>"
                                alt="Proyecto 1">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $proyecto['titulo'] ?></h5>
                                    <p class="card-text"><?php echo $proyecto['descripcion'] ?></p>
                                    <!-- UD3.3.c Imprimir nombre categorias en la card. -->
                                    <?php
                                    $nombreCategorias = [];
                                    foreach ($proyecto['categorias'] as $categoriaId) {
                                        if (array_key_exists($categoriaId, $categorias)) {
                                            $nombreCategorias[] = $categorias[$categoriaId];

                                        }
                                    }
                                   
                                    ?>
                                    <p class="card-text"><?php echo implode(", ",$nombreCategorias) ?></p>

                                </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    </div>



    <?php include("templates/footer.php"); ?>