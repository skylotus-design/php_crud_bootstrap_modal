        <div class="modal fade" id="tambahSiswa">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <form method="post" action="laman/siswa_tambah_proses.php">
                    <div class="modal-header bg-primary text-white">
                        <h4 class="modal-title">Data Data Siswa</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                            Nama: 
                            <input type="text" name="nama" class="form-control" id="ns"><br>
                            Kelas:
                            <select name="kelas" class="form-select">
                                <option value="12A">12A</option>
                                <option value="12B">12B</option>
                                <option value="12C">12C</option>
                            </select><br>

                             Nilai Ujian: <br>
                            <input type="number" name="nilai" min="0" max="100" class="form-control" id="nl"><br>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">BATAL</button>
                        <input type="submit" value="KIRIM" name="send" class="btn btn-primary">
                    </div>
                </form>

                </div>
            </div>
        </div>
