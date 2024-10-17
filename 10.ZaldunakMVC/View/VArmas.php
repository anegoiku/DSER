<?php
require_once (__DIR__ . '/Vista.php');

class VArmas extends Vista{
    public function tablaArmas($armas){
        echo '<table class="table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Daño</th>';
        echo '<th>Tipo</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($armas as $arma) {
            echo '<tr>';
            echo '<td>' . $arma["id"] . '</td>';
            echo '<td>' . $arma["dano"] . '</td>';
            echo '<td>' . $arma["tipo"] . '</td>';
            echo '<td><a href="arma.php?id=' . $arma["id"] . '">Ver</a> | <a href="arma$armaEdit.php?id=' . $arma["id"] . '">Editar</a> | <a href="arma$armaDestroy.php?id=' . $arma["id"] . '">Eliminar</a></td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';  
    }

    public function cabecera(){
        echo '<h1>Armas</h1>';
        echo '<a href="armaCreate.php">Crear arma</a>';
    }

    public function formArma(){
        echo '<form action="armaStore.php" method="post">';
        // echo '<div>';
        // echo '<label for="id">ID de Arma</label>';
        // echo '<input type="text" id="id" name="id" required>';
        // echo '</div>';
        echo '<div>';
        echo '<label for="dano">dano</label>';
        echo '<input type="text" id="dano" name="dano" required>';
        echo '</div>';
        echo '<div>';
        echo '<label for="tipo">Tipo</label>';
        echo '<input type="tipo" id="tipo" name="tipo" required>';
        echo '</div>';
        echo '<button type="submit">Guardar</button>';
        echo '</form>';
    }

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