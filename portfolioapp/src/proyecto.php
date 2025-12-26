<?php include("templates/header.php"); ?>

<?php 
// UD3.3.c.d Crear variable para recoger el id del proyecto y que se muestre solo el proyecto recojido. Se muestran tambien las categorías y la fecha.
$proyectoId = $_GET['proyectoId']
?>
<div class="container">

 
    <div class="row">
        <?php foreach ($proyectos as $proyecto): ?>
            <?php if($proyectoId==$proyecto['id']): ?>
                <div class="col-sm-3">
                    <!-- UD3.2.c Envia dinamicamente a cada proyecto regodiendo la variable usando GET -->
                    <a href="proyecto.php?proyectoId=<?php echo $proyecto["id"] ?>">
                        <div class="card" style="width: 18rem;">
                            <!-- UD3.2.c Imprimir imagen o imagen de notfound si no esiste la imagen con operador ternario -->
                            <img class="card-img-top"
                                src="<?php echo file_exists($proyecto['imagen']) ? $proyecto['imagen'] : "static/images/notfound.jpg" ?>"
                                alt="Proyecto 1">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo  $proyecto['titulo'] ?></h5>
                                    <p class="card-text"><?php echo nl2br($proyecto['descripcion']) ?></p>
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
                                    <p class="card-text"><?php echo $proyecto['fecha'] ?></p>
                                </div>
                        </div>
                    </a>
                </div>
                <?php endif;?>
            <?php endforeach; ?>
    </div>
</div>

<?php include("templates/footer.php"); ?>