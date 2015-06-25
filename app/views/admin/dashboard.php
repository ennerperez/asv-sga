<?php
    use Core\Language;
    use Core\View;
    
	use Helpers\Session;
    use Helpers\Assets;
    use Helpers\Url;
    use Helpers\Hooks;
    //initialise hooks
    $hooks = Hooks::get();
    
?>

<div class="container-fluid" style="padding-top: 70px;">
    <div class="row">
        <div class="col-sm-8 col-md-9">
            <div class="page-header page-header-bleed-right">
                <div class="actions pull-right">
                    <a href="admin"><span class="pficon pficon-refresh"></span>Recargar</a>
                </div>
                <h1>Bienvenido, <?php echo Session::get("userdata")->nombre.' '.Session::get("userdata")->apellido; ?></h1>
            </div>
            <h2 class="h4">Crecimiento de la población</h2>
            <div id="chart0" style="max-height: 128px;"></div>
            <hr>

            <div class="row">
                <div class="col-sm-6">
                    <h2 class="h4">Distribución etaria</h2>
                    <div id="chart1"></div>
                </div>
                                    <!--<div class="col-sm-3">
                                        <div id="chart2"></div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div id="chart3"></div>
                                    </div>
                                </div>
                                <hr>-->
                <div class="col-md-6">
                    <h2 class="h4">Capacidad de los grupos</h2>

                    <div id="chart4"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-3 sidebar-pf sidebar-pf-right">
            <div class="sidebar-header sidebar-header-bleed-left sidebar-header-bleed-right">
                <div class="actions pull-right">
                    <a href="#">Limpiar</a>
                </div>
                <h2 class="h5">Últimas notificaciones</h2>
            </div>
            <?php  View::render('general/announcements', $data); ?>
        </div>
    </div>
</div>
<?php
    Assets::js(array(Url::templatePath() . 'js/d3.min.js', Url::templatePath() . 'js/c3.min.js'));
    
     //hook for plugging in javascript
    $hooks->run('js');
    //hook for plugging in code into the footer
    $hooks->run('footer');
    
?>

<script>
    
       var chart0 = c3.generate({
            bindto: '#chart0',
        data: {
            columns: [
                ['Hombres', 300, 350, 300, 0, 0, 0],
                ['Mujeres', 130, 100, 140, 200, 150, 50]
            ],
            types: {
                data1: 'area',
                data2: 'area-spline'
            }
        },
            grid: {
              y: {
                show: true
              }
            },
            size: {
              height: 200
            }
    });
    
        var chart1 = c3.generate({
              bindto: '#chart1',
              data: {
                colors: {
                  Adultos: '#E23D28',     
                  Jovenes: '#AABA0A',
                  Otros: '#0054A0'
                },
                columns: [
                  ['Adultos', 4,828],
                  ['Jovenes', 11,1124],
                  ['Otros', 13,258]
                ],
                type : 'donut',
                onclick: function (d, i) { console.log("onclick", d, i); },
                onmouseover: function (d, i) { console.log("onmouseover", d, i); },
                onmouseout: function (d, i) { console.log("onmouseout", d, i); }
              },
              donut: {
                title: "29,210"
              }
            });
    
        var chart2 = c3.generate({
              bindto: '#chart2',
              data: {
                columns: [
                  ['Mujeres', 40]
                ],
                type : 'gauge',
                onclick: function (d, i) { console.log("onclick", d, i); },
                onmouseover: function (d, i) { console.log("onmouseover", d, i); },
                onmouseout: function (d, i) { console.log("onmouseout", d, i); }
              }
            });
    
        var chart3 = c3.generate({
              bindto: '#chart3',
              data: {
                columns: [
                  ['Hombres', 60]
                ],
                type : 'gauge',
                onclick: function (d, i) { console.log("onclick", d, i); },
                onmouseover: function (d, i) { console.log("onmouseover", d, i); },
                onmouseout: function (d, i) { console.log("onmouseout", d, i); }
              }
            });
    
             var chart4 = c3.generate({
        axis: {
          rotated: true,
          x: {
            categories: ['Location 1', 'Location 2', 'Location 3', 'Location 4', 'Location 5', 'Location 6', 'Location 7', 'Location 8'],
            tick: {
              outer: false
            },
            type: 'category'
          },
          y: {
            tick: {
              format: function(d) { return d + "%"; },
              outer: false
            }
          }
        },
        bindto: '#chart4',
        color: {
          pattern: ['#006e9c','#00a8e1', '#3f9c35', '#ec7a08', '#cc0000']
        },
        data: {
          columns: [
            ['Virtual Resources', 25, 35, 18, 78, 32,48,20, 10],
            ['Physical Resources', 60, 40, 48, 8,  35, 18, 78, 32,]
          ],
          groups: [
            ['Virtual Resources', 'Physical Resources']
          ],
          type: 'bar'
        },
        grid: {
          y: {
            show: true
          }
        },
        
      });
    
</script>