<div class="modal fade" id="tambahDsn" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Form Tambah Data Dosen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align: left;">
                <form action="dosen/tambah" method="post">
                    <input type="hidden" name="id_dosen" id="id_dosen">
                    <div class="mb-3">
                        <label for="nip_dosen" class="form-label">NIP</label>
                        <input type="text" class="form-control" id="nip_dosen" placeholder="Contoh: 1234567"
                            name="nip_dosen" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_dosen" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama_dosen" placeholder="Masukan Nama Dosen"
                            name="nama_dosen" required>
                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir_dosen" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir_dosen"
                            aria-describedby="tempatLahirdesc" placeholder="Masukan Tempat Lahir Kamu"
                            name="tempat_lahir_dosen" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir_dosen" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir_dosen"
                            aria-describedby="tgl-lahirdesc" placeholder="Masukan Tanggal Lahir Kamu"
                            name="tanggal_lahir_dosen" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin_dosen" class="form-label d-block">Jenis Kelamin</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin_dosen" required id="lk2"
                                value="Laki-laki">
                            <label class="form-check-label" for="lk2">Laki-Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin_dosen" required id="pr"
                                value="Perempuan">
                            <label class="form-check-label" for="pr">Perempuan</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="fakultas_dosen" class="form-label d-block">Fakultas</label>
                        <select class="form-select" aria-label="Default select example" name="fakultas_dosen"
                            id="fakultas_dosen" required>
                            <option selected disabled>Pilih Fakultas</option>
                            <option value="FIP">FIP</option>
                            <option value="FPIPS">FPIPS</option>
                            <option value="FPBS">FPBS</option>
                            <option value="FPSD">FPSD</option>
                            <option value="FPMIPA">FPMIPA</option>
                            <option value="FPTK">FPTK</option>
                            <option value="FPEB">FPEB</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan_dosen" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan_dosen" aria-describedby="jurusan_dosendesc"
                            placeholder="Masukan Jurusan Kamu" name="jurusan_dosen" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>