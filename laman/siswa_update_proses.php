<?php include("../conn/koneksi.php"); ?>

<?php
        if(isset($_POST['send'])){

            $id = $_POST['idnya'];
            $nm = $_POST['nama'];
            $kls = $_POST['kelas'];
            $nl = $_POST['nilai'];

            $sql = "UPDATE siswa SET nama_siswa = '$nm', kelas = '$kls', nilai_ujian = '$nl' WHERE id_siswa = '$id'";
            $query = $conn->query($sql);

            if($query===true){
                session_start();
                $_SESSION['pesan'] = "<div class='alert alert-success mt-3'>Data siswa berhasil diubah</div>";
                echo header("Location:../index.php");
            }
        }
    ?>

    