<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("conn/koneksi.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container mt-5">

    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahSiswa">Tambah +</button>


    <?php
    session_start();
        if(isset($_SESSION['pesan'])){
            echo $_SESSION['pesan'];
            unset($_SESSION['pesan']);
        }
    ?>

    <?php include("laman/siswa_tambah.php"); ?>

        <table class="table table-bordered text-center align-middle mt-4">
            <tr class="table-primary">
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Nilai Ujian</th>
                <th>Aksi</th>
            </tr>
            <?php
            $no = 1;
                $sql = $conn->prepare("SELECT * FROM siswa");
                $sql->execute();
                $query = $sql->get_result();
                while($hs = $query->fetch_array()){
                    $ids = $hs['id_siswa'];
                    $nama = $hs['nama_siswa'];
                    $kelas = $hs['kelas'];
                    $nilai = $hs['nilai_ujian'];
            ?>
            <tr>
                <td><?=$no++?></td>
                <td><?=$nama?></td>
                <td><?=$kelas?></td>
                <td>
                    <?php if($nilai>=65): ?>
                        <h6 class="text-success"><?=$nilai?></h6>
                    <?php else: ?>
                        <h6 class="text-danger"><?=$nilai?></h6>
                    <?php endif; ?>
                </td>
                <td>
                    <button onclick="myCl('<?=$ids?>', '<?=$nama?>', '<?=$nilai?>', '<?=$kelas?>')" id="kirimdata" type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">
                        Edit
                    </button>

                    <button onclick="myHps('<?=$ids?>')" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myHapus">Hapus</button>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>

        <?php include("laman/siswa_update.php"); ?>
        <?php include("laman/siswa_hapus.php"); ?>

        <script>
            function myCl(a, b, c, d){
                
                const idn = document.getElementById("idup");
                const nma = document.getElementById("nsup");
                const nli = document.getElementById("nlup");
                
                idn.value = a;
                nma.value = b;
                nli.value = c;

                let opts = document.getElementsByClassName("opt"); //opt > nama class pada select option kelas di siswa_update.php
                for(let i = 0; i < opts.length; i++){
                    if(opts[i].value == d){
                        opts[i].selected = "true";
                    }
                }
            }

            function myHps(x){
                const sid = document.getElementById('idhps');
                sid.value = x
            }
        </script>
        
    </div>
</body>
</html>