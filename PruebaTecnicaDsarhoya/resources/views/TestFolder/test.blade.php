

    <!doctype html>

    <html>
    
    <head>
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    </head>
    
    <body>
        <div class="card">
        
        
            <div class="card-header " style="margin-bottom:8px">
               
                <h1>Valor del Dolar 2022</h1>
        
            </div>
            <div>
                <div>
                    <h1>Seleccione Mes </h1>
                    <select name="mes" id="mes" onchange="ShowSelected();">
                        <option value="">-- Seleccione Mes--</option>
                        @for ($i= 1 ; $i <= 12 ; $i++)
                            <option value="{{$i}}">-- {{$i}} --</option>
                        @endfor
                    </select>
                </div>

                <h1>API ANUAL 2022</h1>

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
                            @foreach($decodeado as $valor)
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
            </div>
    <script>
        function ShowSelected()
        {
        var seleccionado = document.getElementById("mes").value;
        window.location.href = "http://127.0.0.1:8000/valordolar/"+seleccionado;
        console.log(seleccionado);
        }
    </script>
    </body>
    
    </html>
    