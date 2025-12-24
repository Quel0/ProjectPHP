<?php include("templates/header.php"); ?>

<div class="container">
    <h2>Título de muestra</h2>
    <h4><a href="#">Año</a></h4>
    <span>Categorías: </span>
    <a href="#"><button class="btn btn-sm btn-default">Categoría 1</button></a>
    <br> <br>
    <div class="row">
        <div class="col-sm">
            <!-- UD3.2.c Imprimir imagen o imagen de notfound si no esiste la imagen con operador ternario -->
            <img src="<?php echo file_exists("static/images/proyecto1.jpg") ? "static/images/proyecto1.jpg": "static/images/notfound.jpg"?>" alt="Proyecto 1" class="img-responsive"><br>
        </div>
        <div class="col-sm">Descripción</div>
    </div>
</div>

<?php include("templates/footer.php"); ?>