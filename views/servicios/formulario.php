<div class="campo">
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" placeholder="Nombre Servicio" name="nombre" value="<?php echo $servicio->nombre; ?>">
</div>
<div class="campo">
    <label for="nombre">Precio</label>
    <input type="number" min="1" max="999" id="precio" placeholder="Precio Servicio" name="precio" value="<?php echo $servicio->precio; ?>">
</div>