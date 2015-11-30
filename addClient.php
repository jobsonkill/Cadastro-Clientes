<?php
    $client = $_POST["client"];
    $city = $_POST["city"];
    $address = $_POST["address"];
    $district = $_POST["district"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $comment = $_POST["comments"];

    $format = "d \/ m \/ Y";
    $today = date($format);

    $sql = "INSERT INTO clients VALUES ('$today', '$client', '$city', '$address', '$district', '$contact', '$email', '$telephone', '$comment');";
    $serverdata = array("localhost", "root", "");
    $conn = new mysqli($serverdata[0], $serverdata[1], $serverdata[2], "clients");

    $result = $conn->query($sql);

    $conn->close();

?>
<script>
location.href = "../Admin/index.php";
</script>
