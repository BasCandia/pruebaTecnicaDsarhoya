
<!doctype html>

<html>

<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

    <form action="{{url('/test')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <section class="content">

        <label for="nombre">{{'Nombre'}}</label>
        <input type="text" name="nombre" id="nombre">

        <input type="submit" value="Agregar" class="btn btn-success float-right">

        </section>
    </form>

</body>
    
</html>