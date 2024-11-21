<?php
require_once (__DIR__ . '/Vista.php');

class VArmas extends Vista{
    public function tablaArmas($armas){ ?>
     <table class="table table-striped">
        <thead>
            <tr>
            <th>ID</th>
            <th>Daño</th>
            <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($armas as $arma) { ?>
                <tr>
                    <td><?= $arma["id"] ?></td>
                    <td><?=$arma["dano"]?> </td>
                    <td><?=$arma["tipo"]?></td>
                    <td>
                        <a class="btn btn-info bi bi-eye" href="arma.php?id=<?=$arma["id"]?>"></a>
                        <a class="btn btn-warning bi bi-pencil-square" href="armaEdit.php?id= <?= $arma["id"]?> "></a>
                        <a class="btn btn-danger bi bi-trash3" href="armaDestroy.php?id= <?= $arma["id"]?>"></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
     </table>  
    <?php }

    public function cabecera(){ ?>
        <h1>Armas</h1>
       <a href="armaCreate.php">Crear arma</a>
    <?php }

    public function formArma(){ ?>
        <br>
        <p class="h1">Crear arma:</p>
        <br>
        <form action="armaStore.php" method="post">
            <div class="mb-3">
                <label for="dano" class="form-label">Daño</label>
                <input type="text" class="form-control" id="dano" name="dano" required>
            </div>
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="tipo" name="tipo" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    <?php }

    public function formEditArma($arma) {
        echo '<form action="armaUpdate.php" method="post">';
        echo '<div>';
        echo '<label for="id">ID</label>';
        echo '<input type="text" id="id" name="id" value="' . $arma["id"] . '" readonly>';
        echo '</div>';
        echo '<div>';
        echo '<label for="dano">Daño</label>';
        echo '<input type="text" id="dano" name="dano" value="' . $arma["dano"] . '" required>';
        echo '</div>';
        echo '<div>';
        echo '<label for="tipo">Tipo</label>';
        echo '<input type="tipo" id="tipo" name="tipo" value="' . $arma["tipo"] . '" required>';
        echo '</div>';
        echo '<button type="submit">Guardar</button>';
        echo '</form>';
    }

    public function verArma($arma) {
        echo '<div>';
        echo '<p>ID: ' . $arma["id"] . '</p>';
        echo '<p>Daño: ' . $arma["dano"] . '</p>';
        echo '<p>Tipo: ' . $arma["tipo"] . '</p>';
        echo '</div>';
    }

    public function eliminarSeguro($arma){
        echo '<form action="armaDestroy.php" method="post">';
        echo '<input type="hidden" value="' .$arma. '" name="'.$arma.'">';
        echo "<p>Estas seguro de que quieres eliminar?</p>";
        echo '<button type="submit" value="si">Si</button>';
        echo '<button type="submit" value="no">No</button>';
        echo '</form>';
    }
}
?>