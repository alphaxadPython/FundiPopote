<?php
    include "connection.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM request WHERE id ='$id'";
    mysqli_query($conn, $sql);

    echo "
        <script>
            window.location = 'myRequest.php';
        </script>
    ";

?>