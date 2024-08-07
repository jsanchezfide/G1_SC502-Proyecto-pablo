<?php include_once '../layout.php';
include_once '../../Controller/productoController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php HeadCSS(); ?>

<body>
  <?php superiorProductos(); ?>

  

  <!-- Ventana modal -->
  <div class="modal" id="add-product-modal" style="display: none">
  <div class="modal-content">
    <h2>Agregar producto</h2>
    <form id="add-product-form" action="<?php echo $_SERVER['REQUEST_URI'] ?>/Controller/productoController.php" method="post">
        <div class="form-group">
          <label for="product-name">Nombre del producto:</label>
          <input type="text" id="product-name" name="txtName" placeholder="Ingrese el nombre del producto" class="form-control">
        </div>
        <div class="form-group">
          <label for="product-description">Precio del producto:</label>
          <input type="text" placeholder="Ingrese el precio del producto" id="product-description" name="txtPrecio" class="form-control">
        </div>
        <div class="form-group">
          <label for="product-image">Imagen del producto:</label>
          <input type="file" id="product-image" name="product-image" class="form-control">
        </div>
        <button id="add-product-submit" name="btnAgregarLaserMadera" type="submit" class="btn btn-primary">Agregar producto</button>
    </form>
  </div>
</div>
  <?php ConsultarProductos(4); ?>

  <?php bajo(); ?>

  <script src="../vendors/base/vendor.bundle.base.js"></script>
  <script src="../js/template.js"></script>
  <script src="../vendors/chart.js/Chart.min.js"></script>
  <script src="../vendors/progressbar.js/progressbar.min.js"></script>
  <script src="../vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
  <script src="../vendors/justgage/raphael-2.1.4.min.js"></script>
  <script src="../vendors/justgage/justgage.js"></script>
  <script src="../js/jquery.cookie.js" type="text/javascript"></script>
  <script src="../js/dashboard.js"></script>
  <script src="../js/rutinas.js"></script>
  <script>
  document.getElementById('add-product-submit').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('add-product-form').submit();
  });
</script>
</body>

</html>