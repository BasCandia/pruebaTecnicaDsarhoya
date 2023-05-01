

    <!doctype html>

    <html>
    
    <head>
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    </head>
    
    <body>
        <button type="button" class="btn btn-secondary">Left</button>
        <h1>HolakeASE</h1>
        <div class="card">
        
        
            <div class="card-header " style="margin-bottom:8px">
               
        
            </div>
            <div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 1000px;">
                    <table class="table table-head-fixed text-nowrap" id="tabla1">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($nombres as $nombre)
                            <tr>
                                
                                <td>
                                    {{$nombre->nombre}}
                                </td>
        
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                
                            </tr>
                        </tfoot>
                        
                    </table>
        
        
        
        
                    </div>
                </div>
            </div>
    
    </body>
    
    </html>