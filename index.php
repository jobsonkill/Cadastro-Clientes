<head>
    <title>Clientes</title>
    <meta charset="utf-8"></meta>
    <style>
        body table tr td{
            text-align: center;
        }
    </style>
</head>
<?php
    $serverdata = array("localhost", "root", "");
    $conn = new mysqli($serverdata[0], $serverdata[1], $serverdata[2], "clients");

    $sql = "SELECT * FROM clients";

    $result = $conn->query($sql);
    //Open table element
    echo ("<table border='1'>");
    if ($result->num_rows >= 1) {
        echo ("<tr><td>Data</td><td>Cliente</td><td>Cidade</td><td>Endereço</td><td>Bairro</td><td>Contato</td><td>Email/Site</td><td>Telefone</td><td>Comentários</td></tr>");
        while ($row = $result->fetch_assoc()) {
            echo ("<tr><td>".$row["dateAdded"]."</td><td>".$row["client"]."</td><td>".$row["city"]."</td><td>".$row["address"]."</td><td>".$row["district"]."</td><td>".$row["contact"]."</td><td>".$row["email"]."</td><td>".$row["telephone"]."</td><td>".$row["comments"]."</td></tr>");
        }
    }else {
        echo ("Nenhum cliente cadastrado");
    }
    echo ("</table>");

    $conn->close();
?>
<body>
<form action="addClient.php" method="post">
    <input type="text" name="client" placeholder="Cliente"></input>
    <input type="text" name="city" placeholder="Cidade"></input>
    <input type="text" name="address" placeholder="Endereço"></input>
    <input type="text" name="district" placeholder="Bairro"></input>
    <input type="text" name="contact" placeholder="Contato"></input>
    <input type="text" name="email" placeholder="E-mail"></input>
    <input type="text" name="telephone" placeholder="Telefone"></input>
    <input type="text" name="comments" placeholder="Comentários"></input>
    <input type="submit" style="display:none"></input>
</form>
</body>
