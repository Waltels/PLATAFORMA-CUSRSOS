<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        strong{
            color: blue;
            font-size: 20px
        }
    </style>
</head>
<body>
    <h1>este es un correo electronico de prueba</h1>
    <p>El curso <strong>{{$course->title}}</strong> ha sido rechazado</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi corporis quod eveniet, quos quis aliquid assumenda dignissimos veritatis minima ipsam consequatur laborum maiores asperiores sint voluptate aliquam quisquam, ducimus saepe?</p>
    <h2>Motivo del rechazo</h2>
    {!!$course->observation->body!!}
</body>
</html>