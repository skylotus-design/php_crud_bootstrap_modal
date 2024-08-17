        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <form method="post" action="laman/siswa_update_proses.php">
                    <div class="modal-header bg-primary text-white">
                        <h4 class="modal-title">Ubah Data Siswa</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                            <input type="hidden" name="idnya" id="idup" value="">
                            Nama: 
                            <input type="text" name="nama" class="form-control" id="nsup"><br>
                            Kelas:
                            <select name="kelas" class="form-select">
                                <option class="opt" value="12A">12A</option>
                                <option class="opt"  value="12B">12B</option>
                                <option class="opt"  value="12C">12C</option>
                            </select><br>
                            <input type="number" name="nilai" min="0" max="100" class="form-control" id="nlup"><br>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">BATAL</button>
                        <input type="submit" value="KIRIM" name="send" class="btn btn-primary">
                    </div>
                </form>

                </div>
            </div>
        </div>
