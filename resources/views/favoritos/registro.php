<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="container container-style">
        <form action="" method="post">
            <fieldset>
                <legend class="tittle">Personal información</legend>

                <label for="nombre">Usuario
                    <input class="input" type="text" name="nombre" id="nombre" />
                </label>

                <label for="email">Correo
                    <input class="input" type="email" name="email" id="email" />
                </label>

                <label for="contrasena">Contraseña
                    <input class="input" type="password" name="contrasena1" id="password1" />
                </label>

                <label for="contrasena2">Confirme su contraseña
                    <input class="input" type="password2" name="contrasena2" id="password2" />
                </label>

                <input type="submit" name="" id="submit" value="Registrar" />
            </fieldset>
        </form>
    </div>
</body>

</html>