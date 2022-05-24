<div class="modal fade" id="pinjamRuangan" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Form {{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align: left;">
                <form action="/dashboard/rents" method="post">
                    @csrf
                    <input type="hidden" name="room_id" id="room_id">
                    <div class="mb-3">
                        <label for="room_id" class="form-label d-block">Kode Ruangan</label>
                        <select class="form-select" aria-label="Default select example" name="room_id"
                            id="room_id" required>
                            @if (count(request()->segments()) < 3)
                                <option selected disabled>Pilih Kode Ruangan</option>
                            @endif
                            @foreach ($rooms as $room)
                                @if ($room->code == request()->segment(count(request()->segments())))
                                    <option value="{{ $room->id }}" selected>{{ $room->code }} - {{ $room->name }}</option>
                                @else
                                    <option value="{{ $room->id }}">{{ $room->code }} - {{ $room->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="time_start" class="form-label">Mulai Pinjam</label>
                        <input type="datetime-local" class="form-control" id="time_start_use" 
                        name="time_start_use"  
                        value="{{ old('time_start_use')}}"
                        required>
                    </div>
                    <div class="mb-3">
                        <label for="time_end" class="form-label">Selesai Pinjam</label>
                        <input type="datetime-local" class="form-control" id="time_end_use" 
                        name="time_end_use" 
                        value="{{ old('time_end_use')}}"
                        required>
                    </div>
                    <div class="mb-3">
                        <label for="purpose" class="form-label">Tujuan</label>
                        <input type="text" class="form-control  @error('capacity') is-invalid @enderror" id="purpose" 
                        name="purpose" value="{{ old('purpose')}}" required>
                        @error('purpose')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
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