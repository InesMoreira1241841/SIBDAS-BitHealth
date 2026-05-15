<?php
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário
    $codigo = $_POST['codigo'];
    $designacao = $_POST['designacao'];
    $marca = $_POST['marca'];
    $data = $_POST['data'];
    $criticidade = $_POST['criticidade'];
    $estado = $_POST['estado'];

    // Comando SQL para inserir
    $sql = "INSERT INTO equipamentos (codigo_inventario, designacao, marca, data_aquisicao, criticidade, estado) 
            VALUES ('$codigo', '$designacao', '$marca', '$data', '$criticidade', '$estado')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Equipamento guardado com sucesso!'); window.location.href='equipamentos.html';</script>";
    } else {
        echo "Erro: " . mysqli_query_error($conn);
    }
}
?>