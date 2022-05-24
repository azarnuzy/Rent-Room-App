<div class="modal fade" id="editRoom" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Form Edit {{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align: left;">
                <form action="/dashboard/rooms/{{ $room->code }}" method="post" enctype="multipart/form-data" id="editform">
                    @method('put')
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="code" class="form-label">Kode Ruangan</label>
                        <input type="text" class="form-control  @error('code') is-invalid @enderror" id="code" name="code" required value="{{ old('code') }}">
                        @error('code')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Ruangan</label>
                        <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
                    </div>
                    <div class='mb-3'>
                        <label for='img' class='form-label'>Foto Ruangan</label>
                        <input class="form-control @error('img') is-invalid @enderror" type='file' id='img' name='img'/>
                        @error('img')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3 row">
                        <div class="col-6">
                            <label for="floor" class="form-label">Lantai</label>
                            <input type="number" class="form-control" id="floor" name="floor" required value="{{ old('floor') }}">
                        </div>
                        <div class="col-6">
                            <label for="capacity" class="form-label">Kapasitas</label>
                        <input type="number" class="form-control" id="capacity" name="capacity" required value="{{ old('capacity') }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="building_id" class="form-label d-block">Gedung</label>
                        <select class="form-select" aria-label="Default select example" name="building_id" id="building_id" required>
                            <option selected disabled>Pilih Gedung</option>
                            @foreach ($buildings as $building)
                            @if (old('building_id') == $building->id)
                            <option value="{{ $building->id }}" selected>{{ $building->name }}</option>
                            @else
                            <option value="{{ $building->id }}">{{ $building->name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipe Ruangan</label>
                        <select class="form-select" name="type" id="type" required>
                            <option disabled>Pilih Tipe Ruangan</option>
                            <option value="Laboratorium" {{ old('type') === 'Laboratorium' ? 'selected' : '' }}>Laboratorium</option>
                            <option value="Ruang Kelas" {{ old('type') === 'Ruang Kelas' ? 'selected' : '' }}>Ruang Kelas</option>
                            <option value="Ruang Dosen" {{ old('type') === 'Ruang Dosen' ? 'selected' : '' }}>Ruang Dosen</option>
                            <option value="Ruang Umum" {{ old('type') === 'Ruang Umum' ? 'selected' : '' }}>Ruang Umum</option>
                            <option value="Auditorium" {{ old('type') === 'Auditorium' ? 'selected' : '' }}>Auditorium</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi Ruangan</label>
                        <textarea name="description" id="description" cols="30" rows="5" class="form-control" required>{{ old('description') }}</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="editbtn" name="editbtn">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>