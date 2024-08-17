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

        <table class="table table-bordered text-center alighn-middle">
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
                    $ids = $hs['ids'];
                    $nama = $hs['nsiswa'];
                    $kelas = $hs['kelas'];
                    $nilai = $hs['nilai'];
            ?>
            <tr>
                <td><?=$no++?></td>
                <td><?=$nama?></td>
                <td><?=$kelas?></td>
                <td><?=$nilai?></td>
                <td>
                <button id="myButton" data-id="<?=$ids?>" data-nama="<?=$nama?>" data-nilai="<?=$nilai?>" data-kelas="<?=$kelas?>" onclick="handleClick(event)" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">Edit</button>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>

        <?php include("laman/siswa_update.php"); ?>

        <script>

            function handleClick(event) {  //event adalh buit-in, tidak bisa diubah
                const button = event.target; //tidak bisa menggunakan getElementById

                const id = button.getAttribute('data-id');
                const nama = button.getAttribute('data-nama');
                const nilai = button.getAttribute('data-nilai');
                const kelas = button.getAttribute('data-kelas');
                
                let idn = document.getElementById("idnys");
                let nma = document.getElementById("ns");
                let nli = document.getElementById("nl");
                    
                idn.value = id;
                nma.value = nama;
                nli.value = nilai;

                let opts = document.getElementsByClassName("opt"); //opt > nama class pada select opteion kelas di siswa_update.php
                for(let i = 0; i < opts.length; i++){
                    if(opts[i].value == kelas){
                    opts[i].selected = "true";
                    }
                }
            }
        </script>



        
    </div>
</body>
</html>


