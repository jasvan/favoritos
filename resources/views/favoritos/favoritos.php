<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="reset.css"> -->
    <!-- <link rel="stylesheet" href="main.css"> -->
    <link rel="stylesheet" href="favoritos.css">
</head>

<body>
    <div class='content'>
        <div class="titulo">
            <h1>Tu lista de favoritos</h1>
        </div>
        <div class="table">
            <div class='thead'>
                <div class='tr'>
                    <div id="url1" class='th'>Titulo</div>
                    <div id="url2" class='th'>Url</div>
                    <div id="url3" class='th'>Editar</div>
                    <div id="url5" class='th opcion'>Opcion</div>
                </div>
            </div>
            <form action="" method="POST">
                <div class='tbody'>
                    <div class='tr'>
                        <div id="td1">
                        </div>
                        <?php echo $description ?>
                        <div id="td2">
                            <a href="">
                                <?php echo $url ?>
                            </a>
                        </div>

                        <div id="td3">
                            <div class='btntd penzil'>
                            </div>
                        </div>
                        <div id="td5">
                            <div class='btntd trash'>
                                <input type="hidden" name="<?php echo $id ?>" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="editar">
                    <input type="hidden" id="edit">
                </div>
            </form>
            <div class='tfoot'>
                <div class='tr'>
                    <hr />
                    <div class='td'>Total paginas <strong>77</strong></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>