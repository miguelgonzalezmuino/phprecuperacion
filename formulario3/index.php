<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>Formulario 3</div>
        <form action="recoge.php" method="GET"> 
        <p>Nombre: <input type="text" name="nombre" /></p>
        <p>Fecha de nacimiento: <input type="date" name="fechanacimiento" /></p>
        <p>Email: <input type="text" name="email" /></p>
        <p>Sexo: </p>
        <p>
            Mujer<input type="radio" name="sexo" value="Mujer" />
            Hombre<input type="radio" name="sexo" value="Hombre" />
        </p>
        <p>Familia Numerosa:    <input type="checkbox" name="familianumerosa" value="Si"</>
        </p>
        <p><input type="submit" value="enviar" /></p>
        </form>
    </body>
</html>
