<div class="modal fade" id="chooseAdmin" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Form Tambah {{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align: left;">
                <form action="/dashboard/users/edit" method="post">
                    @csrf
                    <select name="user_id" id="user_id" class="form-select">
                        <option disabled selected>Pilih Admin dari User</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->nomor_induk }} - {{ $user->name }}</option>
                        @endforeach
                    </select>
                    <input type="hidden" name="name" id="name">
                    <input type="hidden" name="nomor_induk" id="nomor_induk">
                    <input type="hidden" name="email" id="email">
                    <input type="hidden" name="password" id="password">
                    <input type="hidden" name="role_id" id="role_id">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>