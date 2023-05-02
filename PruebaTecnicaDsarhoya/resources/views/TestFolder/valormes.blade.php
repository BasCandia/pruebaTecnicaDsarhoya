<!doctype html>

<html>

<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <div class="card">
    
    
        <div class="card-header " style="margin-bottom:8px">
           
            <h1>Valor del Dolar al Año 2022 del mes {{$mes}}</h1>
    
        </div>
        <div>

            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 1000px;">
                <table class="table table-head-fixed text-nowrap" id="tabla1">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Valor</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($decodeadoMensual as $valor)
                        <tr>
                            
                            <td>
                                {{$valor['Fecha']}}
                            </td>

                            <td>
                                {{$valor['Valor']}}
                            </td>
    
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Fecha</th>
                            <th>Valor</th>
                            
                        </tr>
                    </tfoot>
                    
                </table>
    
    
    
                </div>
            </div>
            <a href="{{url('/valordolar')}}" class="btn btn-secondary">Volver</a>
        </div>

</body>

</html>