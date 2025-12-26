<?php include("templates/header.php"); ?>
<?php include("utils/utiles.php"); ?>
<?php include("datos.php"); ?>
<?php

// UD.3.2.f Funcion para ordenar proyectos por título
$orden = isset($_GET['orden']) ? $_GET['orden'] : null;
if ($orden === 'asc'):
    $proyectos = ordenaProyectosAsc($proyectos);
elseif ($orden === 'dsc'):
    $proyectos = ordenaProyectosDsc($proyectos);
endif;
?>

<div class="container mb-5">
    <div class="row">

        <div class="col-12 d-flex justify-content-center my-3 gap-2" role="group" aria-label="Orden de proyectos">
            <button type="button" class="btn btn-primary"><a href="?orden=asc">A–Z</a></button>
            <button type="button" class="btn btn-outline-secondary"><a href="?orden=dsc">Z–A</a></button>
        </div>

    </div>
    <div class="container mb-5">
        <div class="row">
            <?php foreach ($proyectos as $proyecto): ?>
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