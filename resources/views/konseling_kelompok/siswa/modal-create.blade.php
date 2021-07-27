<div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Mendaftarkan/Edit Permintaan Konseling Kelompok</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" class="custom-validation" action="{{ url('siswa/konseling_kelompok/create') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <h5 class="font-size-14">Pilih Konselor</h5>
                        <select class="form-control" name="konselor" id="konselor">
                            @forelse ($guru_bk as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                            @empty
                                <option disabled selected value="">-- Belum Ada Konselor --</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="form-group">
                        <h5 class="font-size-14">Perantara Konseling</h5>
                        <select class="form-control" name="perantara" id="perantara">
                            <option disabled selected value="">-- Pilih Perantara Konseling --</option>
                            <option value="wa">Whatsapp</option>
                            <option value="telegram">Telegram</option>
                            <option value="skype">Skype</option>
                            <option value="web">Web Chat</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <h5 class="font-size-14">Pilih Tanggal</h5>
                        <input name="tanggal" id="tanggal" class="form-control" type="date" value="{{ date('d-m-Y') }}" id="example-date-input">
                    </div>
                    <div class="form-group">
                        <h5 class="font-size-14">Pilih Jam</h5>
                        <input name="jam" id="jam" type="time" class="form-control" required/>
                    </div>
                    <div class="form-group mb-0">
                        <label>Kelompok Siswa</label>
                        <select class="selectize" multiple name="kelompok_siswa[]" id="kelompok_siswa">
                            <option value="">Pilih Siswa...</option>
                            @foreach ($siswa as $item)
                                <option value="{{$item->id}}">{{$item->nama_lengkap ?? $item->username}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <h5 class="font-size-14">Ringkas Masalah</h5>
                        <div>
                            <textarea name="masalah" id="masalah" required class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <h5 class="font-size-14">Harapan Konseling</h5>
                        <div>
                            <textarea name="harapan" id="harapan" required class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


