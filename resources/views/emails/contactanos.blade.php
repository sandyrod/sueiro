<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Contacto</title>
        <style>
            h1,h2{
                text-align: center ;
                color: black;
            }
            table {
		        margin: 0 auto;
            }
        </style>
    </head>
    <body><br>
         <h2> Sueiro E Hijos</h2>

         
         
         <strong>Nombre: </strong> {{$contact['name']}}<br>
         <strong>Apellido: </strong> {{$contact['apellido']}}
        
        <br>
        <p><strong>Mensaje: </strong></p>
        <p>{{$contact['mensaje']}} </p><br>
        
        
        <strong>Correo Electronico: </strong> {{$contact['email']}} <br>
        <strong>Empresa: </strong> {{$contact['empresa']}}
        
        
            
    </body>
</html>