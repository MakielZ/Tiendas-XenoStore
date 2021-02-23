<?php
   session_start();
   require_once '../app/vistas/inc/header-administrador.php'; 

   require('conexion.php');
  /* Getting demo_viewer table data */
    $sql = "SELECT idSubCategorias as count FROM subcategorias";
    $cantidad = mysqli_query($mysqli,$sql);
    $cantidad = mysqli_fetch_all($cantidad,MYSQLI_ASSOC);
    $cantidad = json_encode(array_column($cantidad, 'count'),JSON_NUMERIC_CHECK);

    $sql = "SELECT nombreSubCategoria as count FROM subcategorias";
    $nombres = mysqli_query($mysqli,$sql);
    $nombres = mysqli_fetch_all($nombres,MYSQLI_ASSOC);
    $nombres = json_encode(array_column($nombres, 'count'));

  

?>

<div class="row mt-2">
        <div class="col-2">
            <div class="container-fluid mt-2"> 
                <a class="btn-login btn-login-header text-light mt-1" href="<?php RUTA_URL?>administradorC">
                    Volver
                </a>   
            </div>
        </div>
    

        <div class="col-10">

            <div id="container" style="height: 400px">

                <script type="text/javascript">

                var data_cantidad = <?php echo $cantidad?>


                    Highcharts.chart('container', {
                        chart: {
                            type: 'pie',
                            options3d: {
                                enabled: true,
                                alpha: 45,
                                beta: 0
                            }
                        },
                        title: {
                            text: 'Productos por sub categoria'
                        },
                        xAxis: {
                            categories: ['Videojuegos', 'Smartphones', 'Camaras', 'Headsets', 'Consolas','Computadoras'],
                        },
                        tooltip: {
                            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                        },
                        subtitle: {
                        text: 'Tiendas XenoStore'
                        },
                        plotOptions: {
                            pie: {
                                allowPointSelect: true,
                                cursor: 'pointer',
                                depth: 35,
                                dataLabels: {
                                    formatter: function() {
                                    var sliceIndex = this.point.index;
                                    var sliceName = this.series.chart.axes[0].categories[sliceIndex];
                                    this.point.name = sliceName;
                                    return sliceName
                        
                                    }
                                }
                            }
                        },
                        series: [{
                            type: 'pie',
                            name: 'Cantidad de objetos por categoria',
                            data: data_cantidad
                        }]
                    });
            </script>
        </div>
</div>


        

<?php require_once '../app/vistas/inc/footer.php'; ?>