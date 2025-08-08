<?php
include("db.php");

$sql = "SELECT * FROM usuarios"; 

$resultado = $conn->query($sql);

echo "<h1>Lista de Usuários</h1>";

if($resultado->num_rows > 0) {

    echo "<table border = '1'>
        <tr>
            <th> ID </th>
            <th> Nome </th>
            <th> Email </th>
            <th> Ações </th>
        </tr>
    ";

    while ($linha = $resultado->fetch_assoc()) {

        echo "<tr>
            <td> {$linha['id']} </td>
            <td> {$linha['name']} </td>
            <td> {$linha['email']} </td>
            <td>
                <a href='editar.php?id={row['id']}'>Editar<a>
                <a href='delete.php?id={row['id']}'>Excluir<a>
            </td>
        </tr>
        ";
            
}
echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

$conn -> close();

echo "<a href='create.php'>Inserir novo Registro</a>";