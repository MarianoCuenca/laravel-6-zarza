<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <a href="/producto/create" class="btn btn-primary">NUEVO</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th>Activo</th>
                    <th>Vencimiento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $file)
                    <tr>
                        <td>{{$file->id}}</td>
                        <td>{{$file->nombre}}</td>
                        <td>{{$file->precio}}</td>
                        <td>{{$file->marca}}</td>
                        <td>{{$file->activo}}</td>
                        <td>{{$file->vencimiento}}</td>
                        <td>
                            <a href="/producto/edit/{{$file->id}}"><i class="fa fa-pencil text-blue" style="font-size:15px;"></i> Editar</a>
                            <a href="/producto/delete/{{$file->id}}"><i class=" text-red fa fa-times" style="font-size:15px;"></i> Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>