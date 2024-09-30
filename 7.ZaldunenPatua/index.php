<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaldunen zerrenda</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php 
$mysqli =new mysqli("localhost", "root", "", "zaldunak");
if($mysqli->connect_errno){
    echo "Akatsa MySQL konexioan:(" . $mysqli->connect_errno . ") ". $mysqli->connect_error;
}
$emaitza= $mysqli->query("SELECT * FROM zaldunak");
?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Zaldunen zerrenda</h1>
    
    <table class="table table-striped table-bordered">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Izena</th>
                <th scope="col">Indarra</th>
                <th scope="col">Aktiboan</th>
                <th scope="col">Akzioak</th>
            </tr>
        </thead>
        <tbody>
            <!-- Zaldunen adibidea -->
             <?php
             while($row = $emaitza->fetch_assoc()){
                echo " <tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['izena'] . "</td>
                <td>" . $row['indarra'] . "</td>";
                
                if($row['aktiboan']==1){
                echo "<td><span class='badge bg-success'>Bai</span></td>";
                }else{echo "<td><span class='badge bg-danger'>Ez</span></td>";}
               
                echo"<td>
                    <a href='#' class='btn btn-info btn-sm'>Ikusi</a>
                    <a href='#' class='btn btn-warning btn-sm'>Aldatu</a>
                    <a href='#' class='btn btn-danger btn-sm'>Ezabatu</a>
                    </td>
                    </tr>";
             }
             ?>
            <!-- Gehitu lerro gehiago beharren arabera -->
        </tbody>
    </table>
    <a href='./form.html' class='btn btn-info btn-sm'>Zalduna gehitu</a>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>