<?php 
ob_start();
include_once '../layout.php';
include_once '../../Controller/productoController.php';
include_once '../../Controller/categoriaController.php'; 
$opcionesCategorias = ObtenerOpcionesCategorias();
$opcionesMaterial = ObtenerOpcionesMaterial();
ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
<?php HeadCSS(); ?>

<body>

    <?php superiorProductos(); ?>
    <div class="container-fluid page-body-wrapper" style="height: 100vh; display: flex; justify-content: center; align-items: center;">
        <div class="main-panel" style="max-width: 500px; margin: 0 auto;">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="heading text-danger  text-center font-weight-bold">Agregar Productos</h2>
                                <br />
                                <form class="forms-sample" action="" method="post">
                                    <div class="form-group">
                                        <label class="text-dark font-weight-bold">Nombre del producto</label>
                                        <input type="text" class="form-control" name="txtNombreProducto" placeholder="Ingrese el nombre del producto">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-dark font-weight-bold">Precio del producto</label>
                                        <input type="number" name="txtPrecio" class="form-control" id="exampleInputEmail1" placeholder="Ingrese el precio del producto">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-dark font-weight-bold">Imagen del producto</label>
                                        <input type="text" name="txtUrl" class="form-control" id="exampleInputEmail1" placeholder="Ingrese el precio del producto">
                                    </div>
                                    <div class="form-group">
                                            <label class="text-dark font-weight-bold">Categoria del producto</label>
                                            <select id="cboCategoria" name="cboCategoria" class="form-control" required>
                                            <?php echo $opcionesCategorias; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                            <label class="text-dark font-weight-bold">Material del producto</label>
                                            <select id="cboMaterial" name="cboMaterial" class="form-control" required>
                                            <?php echo $opcionesMaterial; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-dark font-weight-bold">Existencias producto</label>
                                        <input type="number" name="txtExistencias" class="form-control" id="exampleInputEmail1" placeholder="Ingrese las existencias del producto">
                                    </div>
                                    <button name="btnAgregarProducto" type="submit" class="btn btn-inverse-primary me-2">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
</body>

</html>