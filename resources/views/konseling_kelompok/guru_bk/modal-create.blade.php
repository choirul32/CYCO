<div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Mendaftarkan Permintaan Konseling Kelompok</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" class="custom-validation" action="{{ url('siswa/konseling_kelompok/create') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <h5 class="font-size-14">Pilih Konselor</h5>
                        <select class="form-control" name="konselor">
                            <option value="0">Guru 1</option>
                            <option value="1">Guru 2</option>
                            <option value="2">Guru 3</option>
                            <option value="3">Guru 4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <h5 class="font-size-14">Pilih Tanggal</h5>
                        <input name="tanggal" class="form-control" type="date" value="2019-08-19" id="example-date-input">
                    </div>
                    <div class="form-group">
                        <h5 class="font-size-14">Pilih Jam</h5>
                        <input name="jam" type="time" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <h5 class="font-size-14">Ringkas Masalah</h5>
                        <div>
                            <textarea name="masalah" required class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <h5 class="font-size-14">Harapan Konseling</h5>
                        <div>
                            <textarea name="harapan" required class="form-control" rows="5"></textarea>
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