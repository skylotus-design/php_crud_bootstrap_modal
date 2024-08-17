<?php include("../conn/koneksi.php"); ?>

<?php

    $id = $_POST['hapus'];

    $sql = "DELETE FROM siswa WHERE id_siswa = '$id'";
    $query = $conn->query($sql);

    if($query===true){
        session_start();
        $_SESSION['pesan'] = "<div class='alert alert-danger mt-3'>Data siswa berhasil dihapus</div>";
        header("Location:../index.php");
    }

?>