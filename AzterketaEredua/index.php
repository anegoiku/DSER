<?php
require_once("Controller/IkusiLaguntzak.php");
require_once("Controller/MaterialakIkusi.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOS valencia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h1>Gestor ayudas</h1>
                <a href="./Views/formMaterial.html" class="btn btn-primary">Crear material</a>
                <a href="./Views/formDonacion.php" class="btn btn-primary">Donar</a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="accordion" id="accordionExample">
                    <?php
                    foreach($materialak as $materiala){
                    ?>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <?php echo $materiala['nombre']?>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Nota</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach($laguntzaZerrenda as $items){
                                            if($items['id_material']==$materiala['id']){
                                            echo    '<tr>
                                                        <td>'.$items['cantidad'].'</td>
                                                        <td>'.$items['nota'].'</td>
                                                    </tr>';

                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>