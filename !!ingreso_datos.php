
<?php require("header.php")?>


<form action="!!RF_registro_prov.php" method="POST">

<label for="nombreProveedor">Nombre</label>
    <input type="text" name="nombreProveedor" id="nombreProveedor">


<label for="apellidoProveedor">Apellido</label>
    <input type="text" name="apellidoProveedor" id="apellidoProveedor">

    <label for="nombreProveedor">Cedula</label>
    <input type="text" name="cedulaProveedor" id="cedulaProveedor">

    <label for="nombreProveedor">Telefono</label>
    <input type="text" name="telefonoProveedor" id="telefonoProveedor">

    <label for="rootProveedor">Root de la empresa</label>
    <input type="text" name="rootProveedor" id="rootProveedor">


<label for="emailProveedor">Email</label>
    <input type="text" name="emailProveedor" id="emailProveedor">


<label for="passProveedor">Pass</label>
    <input type="password" name="passProveedor" id="passProveedor">

   
   
   
    
    <input type="file" name="fotocedulaDELANTERA" class="imageInput" accept="image/*" id="fotocedulaDELANTERA">
    <div class="preview" >
        <p>Cédula delantera</p>
    </div>

    <input type="file" name="fotocedulaTRASERA" class="imageInput" accept="image/*"  id="fotocedulaTRASERA">
    <div class="preview">
        <p>Cédula trasera</p>
    </div>

    <input type="submit" value="Cargar" name="envio_proveedor">
    <input type="reset" value="Cancelar">
</form>


<script src="app.js"></script>
</form>

<?php require ("footer.php"); ?>