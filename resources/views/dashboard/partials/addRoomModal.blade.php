<div class="modal fade" id="addRoom" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Form {{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align: left;">
                <form action="/dashboard/rooms" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="room_id" id="room_id">
                    <div class="mb-3">
                        <label for="code" class="form-label">Kode Ruangan</label>
                        <input type="text" class="form-control" id="code" name="code" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Ruangan</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class='mb-3'>
                        <label for='img' class='form-label'>Foto Ruangan</label>
                        <input class='form-control' type='file' id='img' name='img'/>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-6">
                            <label for="floor" class="form-label">Lantai</label>
                            <input type="number" class="form-control" id="floor" name="floor" required>
                        </div>
                        <div class="col-6">
                            <label for="capacity" class="form-label">Kapasitas</label>
                        <input type="number" class="form-control" id="capacity" name="capacity" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="building_id" class="form-label d-block">Gedung</label>
                        <select class="form-select" aria-label="Default select example" name="building_id" id="building_id"
                            required>
                            <option selected disabled>Pilih Gedung</option>
                            @foreach ($buildings as $building)
                                <option value="{{ $building->id }}">{{ $building->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipe Ruangan</label>
                        <select class="form-select" name="type" id="type" required>
                            <option selected disabled>Pilih Tipe Ruangan</option>
                            <option value="Laboratorium">Laboratorium</option>
                            <option value="Ruang Kelas">Ruang Kelas</option>
                            <option value="Ruang Dosen">Ruang Dosen</option>
                            <option value="Ruang Umum">Ruang Umum</option>
                            <option value="Auditorium">Auditorium</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">deskripsi ruangan</label>
                        <textarea name="description" id="description" cols="30" rows="5" class="form-control" required></textarea>
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