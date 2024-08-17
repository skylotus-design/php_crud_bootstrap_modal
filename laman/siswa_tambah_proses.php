<?php include("../conn/koneksi.php"); ?>

<?php
        if(isset($_POST['send'])){

            $nm = $_POST['nama'];
            $kls = $_POST['kelas'];
            $nl = $_POST['nilai'];

            $sql = "INSERT INTO siswa(nama_siswa, kelas, nilai_ujian) VALUES('$nm', '$kls', '$nl')";
            $query = $conn->query($sql);

            if($query===true){
                session_start();
                $_SESSION['pesan'] = "<div class='alert alert-info mt-3'>Data siswa berhasil ditambahkan</div>";
                echo header("Location:../index.php");
            }
        }
    ?>