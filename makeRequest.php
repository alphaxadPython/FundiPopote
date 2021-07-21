<?php
    include "connection.php";

    session_start();

    $id = $_GET['id'];

    $sql = "SELECT * FROM member WHERE id ='$id'";
    $check = mysqli_query($conn, $sql);

    $rows = mysqli_fetch_assoc($check);

    $fundi = $rows['username'];
    $username = $_SESSION['username'];
    $phone = $rows['phone'];
    $cartegory = $rows['cartegory'];
    $ratings = 3;
    $location = $rows['region'];

    $qry = "INSERT INTO `request`(`username`, `phone`, `fundi`, `cartegory`, `location`, `ratings`) VALUES ('$username','$phone','$fundi','$cartegory','$location','$ratings')";
    mysqli_query($conn, $qry);

    echo "
        <script>
            window.location = 'myRequest.php';
        </script>
    ";

?>