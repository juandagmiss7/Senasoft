<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- empresa -->
<form>
  <div class="form-group row">
    <label for="empresa" class="col-4 col-form-label">Empresa</label> 
    <div class="col-8">
      <input id="empresa" name="empresa" placeholder="nombre" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nit" class="col-4 col-form-label">NIT</label> 
    <div class="col-8">
      <input id="nit" name="nit" placeholder="NIT" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="direccion" class="col-4 col-form-label">Direccion</label> 
    <div class="col-8">
      <input id="direccion" name="direccion" placeholder="Direcciòn" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="telefonos" class="col-4 col-form-label">Telefonos</label> 
    <div class="col-8">
      <input id="telefonos" name="telefonos" placeholder="Telefonos" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="web" class="col-4 col-form-label">Web</label> 
    <div class="col-8">
      <input id="web" name="web" placeholder="Web" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="correo" class="col-4 col-form-label">Correo</label> 
    <div class="col-8">
      <input id="correo" name="correo" placeholder="Correo" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<!-- bodega -->

<form>
  <div class="form-group row">
    <label for="bodega" class="col-4 col-form-label">Bodega</label> 
    <div class="col-8">
      <input id="bodega" name="bodega" placeholder="Bodega" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="ciudad" class="col-4 col-form-label">Ciudad</label> 
    <div class="col-8">
      <input id="ciudad" name="ciudad" placeholder="Ciudad" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="direccion" class="col-4 col-form-label">Direccion</label> 
    <div class="col-8">
      <input id="direccion" name="direccion" placeholder="Direcciòn" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<!-- stock -->

<form>
  <div class="form-group row">
    <label for="producto" class="col-4 col-form-label">Producto</label> 
    <div class="col-8">
      <input id="producto" name="producto" placeholder="producto" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="cod_barras" class="col-4 col-form-label">Código de barras</label> 
    <div class="col-8">
      <input id="cod_barras" name="cod_barras" placeholder="codigo" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="descripcion" class="col-4 col-form-label">Descripción</label> 
    <div class="col-8">
      <textarea id="descripcion" name="descripcion" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="categoria" class="col-4 col-form-label">Categoria</label> 
    <div class="col-8">
      <select id="categoria" name="categoria" class="custom-select">
        <option value="rabbit">Rabbit</option>
        <option value="duck">Duck</option>
        <option value="fish">Fish</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="precio_unidad" class="col-4 col-form-label">Precio Unidad</label> 
    <div class="col-8">
      <input id="precio_unidad" name="precio_unidad" placeholder="Precio" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="iva" class="col-4 col-form-label">IVA</label> 
    <div class="col-8">
      <input id="iva" name="iva" placeholder="IVA" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="stock_min" class="col-4 col-form-label">Stock Mínimo</label> 
    <div class="col-8">
      <input id="stock_min" name="stock_min" placeholder="stock" type="number" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>


<form>
 <div class="form-group row">
    <label for="bodega" class="col-4 col-form-label">Stock</label> 
    <div class="col-8">
      <input id="stock" name="stock" placeholder="Stock" type="number" class="form-control">
    </div>
  </div>
</form>

<!-- solicitud producto -->
<form>
  <div class="form-group row">
    <label for="iva" class="col-4 col-form-label">IVA</label> 
    <div class="col-8">
      <input id="iva" name="iva" placeholder="IVA" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="cantidad" class="col-4 col-form-label">Cantidad</label> 
    <div class="col-8">
      <input id="cantidad" name="cantidad" placeholder="Cantidad" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="costo_unitario" class="col-4 col-form-label">Costo Unitario</label> 
    <div class="col-8">
      <input id="costo_unitario" name="costo_unitario" placeholder="Costo" type="number" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

</body>
</html>