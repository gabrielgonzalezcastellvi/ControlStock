<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Control Stock | SKIL</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<script src="https://kit.fontawesome.com/f7e8945371.js" crossorigin="anonymous"></script>
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="skill.php" class="nav-link">Inicio</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link"  href="cerrarSesion.php">
        <i class="fa-sharp fa-solid fa-right-from-bracket"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="skill.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Panel de control</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"><?php session_start(); echo $_SESSION['NombreUsuario'];?></a> <!--Traer nombre de la persona que inicia sesion-->
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Panel de control
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./bosh.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bosh</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./dremel.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dremel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./skill.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Skil</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ventas | Skil</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="skill.php">Inicio</a></li>
              <li class="breadcrumb-item active">Control Stock | Skil</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <!-- /.col -->
          
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><a href="ventasSkil.php"><i class="fas fa-shopping-cart"></a></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Ventas</span>
                <span class="info-box-number"><?php ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><a href="agregarProductosSkil.php"><i class="fa-sharp fa-solid fa-circle-plus"></a></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Agregar Productos</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-tag"></i></span>
<?php
require 'conexion.php';

$query = "SELECT COUNT(*) as total FROM skil";

$Result = mysqli_query($conexion,$query);
while($row=$Result->fetch_assoc()){
$Total = $row['total'];
}
?>

              <div class="info-box-content">
                <span class="info-box-text">Inventario</span>
                <span class="info-box-number"><?php echo $Total; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
        
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
  
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    
              </div>

              <!-- /.col -->
              
            </div>

            <!-- /.row -->
<!--Lista para agregar productos--->
<div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Lista Productos</h3>
                <br>
                <br>
                <form action="ventasSkil.php" method="post">
                <input type="text" name="codigoii" placeholder="Código 2" required>
                <input type="submit" value="Buscar" class="btn btn-success" title="Buscar">
                <br>
                </form>
                <?php 
                error_reporting(0);
                $Codigo2 = $_POST['codigoii']; 
                ?> <!--Obtengo el codigo del producto-->
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                    <th>Imagen</th>
                    <th>Cantidad</th>
                    <th>Segmento</th>
                    <th>Material</th>
                    <th>Descripcion</th>
                    <th>Presentacion</th>
                    <th>Linea</th>
                    <th>Fuente</th>
                    <th>Ean</th>
                    <th>IVA</th>
                    <th>Precio Lista</th>
                    <th>PVP-Sugerido</th>
                    <th>PVP-Premium</th>
                    <td>Agregar</td>
                    <td>Cancelar</td>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                        require 'conexion.php';
                        $Query2 = "SELECT MAX(numventa)  AS NV FROM ventasfinalesskil"; //Selecciono el numero más alto de la venta
                        $ResultNumeroDeVenta = mysqli_query($conexion,$Query2);
                        while($row3 = $ResultNumeroDeVenta -> fetch_assoc()){
                            $NumeroDeVenta = $row3['NV'] + 1;
                        }
                        $Query = "SELECT *,iva, MAX(id) as id FROM skil";
                        $Result = mysqli_query($conexion,$Query);
                        while($row = $Result ->fetch_assoc()){
                         $Id = $row['id'] + 1;
                         $Iva = $row['iva'];
                        }
                        ?>
                      <tr>
                      <form action="ventasSkilback.php" method="post">
                            <input type="hidden" name="numventa" value="<?php echo $NumeroDeVenta; ?>">
                            <?php 
                            require 'conexion.php';
                            $Query = "SELECT * FROM skil WHERE codigoii LIKE '$Codigo2'";
                            $Result3 = mysqli_query($conexion,$Query);
                            while($row3 = $Result3 -> fetch_assoc()){
                            ?>
                      <td>
                        <script>function previewImage(nb) {
                                var reader = new FileReader();
                                reader.readAsDataURL(document.getElementById('uploadImage' + nb).files[0]);
                                reader.onload = function (e) {
                                    document.getElementById('uploadPreview' + nb).src = e.target.result;
                                };
                            }
                        </script>
                        <img id="uploadPreview1" width="100" height="100" src="images/<?php if(!empty($row3['thumb'])){echo $row3['thumb'];}else{echo 'defaultProduct.jpeg';}?>"/>
                       </td>
                       <input type="hidden" name="codigoii" value="<?php echo $row3['codigoii'];?>">
                      <td><input type="number" name="cantidad" value="<?php echo $row3['cantidad']; ?>" required></td>
                      <td>
                      <select name="segmento">
                        <option value="<?php echo $row3['segmento'];?>" required><?php echo $row3['segmento'];?></option>
                      </select>
                      </td>
                      <td><input type="text" name="material" value="<?php echo $row3['material'];?>"  required>
                    </td>
                      <td><input type="text" name="descripcion" value="<?php echo $row3['descripcion']; ?>" required></td>
                      <td>
                      <select name="presentacion">
                      <option value="<?php echo $row3['presentacion'];?>" required><?php echo $row3['presentacion'];?></option>
                      </td>
                      <td><input type="text" name="linea" value="<?php echo $row3['linea'];?>" required></td>
                      <td>
                        <select name="fuente">
                        <option value="<?php echo  $row3['fuente'];?>"><?php echo $row3['fuente']; ?></option>
                        </select>
                      </td>
                      <td><input type="text" name="ean" value="<?php echo $row3['ean']; ?>"></td>
                      <td><input type="text" name="iva" value="<?php echo $Iva; ?>"></td>
                      <td><input type="text" name="precioLista" placeholder="Precio Lista" required></td>
                      <td><input type="text" name="pvpsugerido" placeholder="Pvp Sugerido" required></td>
                      <td><input type="text" name="pvppremium" placeholder="Pvp Premium" required></td>
                      <?php } ?>
                      <td><input type="submit" value="Agregar" class="btn btn-success" title="Agregar"></td>
                      <td><a href="./skill.php"><input type="button" value="Cancelar" class="btn btn-danger" title="Cancelar"></a></td>
                      </form>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Productos Agregados al carrito</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                    <th>Cantidad</th>
                    <th>Codigo 2</th>
                    <th>Segmento</th>
                    <th>Material</th>
                    <th>Descripcion</th>
                    <th>Presentacion</th>
                    <th>Linea</th>
                    <th>Fuente</th>
                    <th>Ean</th>
                    <th>IVA</th>
                    <th>Precio Lista</th>
                    <th>PVP-Sugerido</th>
                    <th>PVP-Premium</th>
                    <th>Quitar</th>
                    <th>Completar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <form action="ventasFinalesSkil.php" method="post">
                        <?php 
                         require 'conexion.php';
                         $QueryNumVenta = "SELECT MAX(numventa) AS NV FROM ventasfinalesskil"; //Selecciono la ultima venta
                         $ResultNumVenta = mysqli_query($conexion,$QueryNumVenta);
                         while($row1 = $ResultNumVenta -> fetch_assoc()){
                          $NumVenta = $row1['NV'] + 1;
                         }

                        $Query = "SELECT * FROM ventasskil WHERE numventa = '$NumVenta' AND linea <> '0'";
                        $Result = mysqli_query($conexion,$Query);
                        while($row = $Result ->fetch_assoc()){
                        ?>
                     <tr>
                      <td><input type="number" name="cantidadProducto" value="<?php echo $row['cantidad'];?>"></td>
                      <td><input type="text" name="codigoii" value="<?php echo $row['codigoii'];?>" readonly></td>
                      <td><input type="text" name="segmento" value="<?php echo $row['segmento'];?>" readonly></td>
                      <td><input type="text" name="material" value="<?php echo $row['material'];?>" readonly></td>
                      <td><input type="text" name="descripcion" value="<?php echo $row['descripcion'];?>" readonly></td>
                      <td><input type="text" name="presentacion" value="<?php echo $row['presentacion'];?>" readonly></td>
                      <td><input type="text" name="linea" value="<?php echo $row['linea'];?>" readonly></td>
                      <td><input type="text" name="fuente" value="<?php echo $row['fuente'];?>" readonly></td>
                      <td><input type="text" name="ean" value="<?php echo $row['ean'];?>" readonly></td>
                      <td><input type="text" name="iva" value="<?php echo $row['iva'];?>" readonly></td>
                      <td><input type="text" name="precioLista" value="<?php echo $row['preciolista'];?>" readonly></td>
                      <td><input type="text" name="pvpsugerido" value="<?php echo $row['pvpsugerido'];?>" readonly></td>
                      <td><input type="text" name="pvppremium" value="<?php echo $row['pvppremium'];?>" readonly></td>
                      <input type="hidden" name="numventa" value="<?php echo $NumVenta; ?>">
                      <td><a href="./quitarProductoSkill.php?id=<?php echo $row['id']; ?>"><input type="button" value="Quitar" class="btn btn-danger" title="Quitar"></a></td>
                      <?php } ?>  
                      <td><button type="submit" class="btn btn-success" value="Completar" title="Completar">Completar</button></td>
                    </form>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-4">

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<!--<script src="dist/js/demo.js"></script>-->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>
