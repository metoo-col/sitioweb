<?php include("../template/cabecera.php");?>
<?php
$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";
include("../config/bd.php");


switch($accion){
    case "Agregar";
    
    $sentenciaSQL= $conexion->prepare("INSERT INTO libros (nombre,imagen ) VALUES (:nombre,:imagen);");
    $sentenciaSQL->bindParam(':nombre',$txtNombre);
    $sentenciaSQL->bindParam(':imagen',$txtImagen);
    $sentenciaSQL->execute();
    echo "presionado boton agregar";
    break;
    case "Modificar";
    echo "presionado boton modificar";
    break;
    case "Cancelar";
    echo "presionado boton cancelar";
    break;
}

?>
<div class="col-md-5">
    <div class="card">
        <div class="card-header">
            Datos de los libros
        </div>

        <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
    <div class = "form-group">
    <label for="txtID">ID:</label>
    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID">
    </div>

    <div class = "form-group">
    <label for="txtID">Nombre:</label>
    <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="nombre del producto">
    </div>

    
    <div class = "form-group">
    <label for="txtID">Imagen:</label>
    <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="nombre del producto">
    </div>

    
   <div class="btn-group" role="group" aria-label="">
    <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
    <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
    <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
   </div>

    </form>
          
        </div>

      
    </div>
 
    
    
    
</div>
<div class="col-md-7">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>aprende php</td>
                <td>imagen.jpg</td>
                <td>Seleccionar / Borrar</td>
            </tr>
         
        </tbody>
    </table>
    
</div>
<?php include("../template/pie.php");?>
