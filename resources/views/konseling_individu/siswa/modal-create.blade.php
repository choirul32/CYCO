<div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Mendaftarkan Permintaan Konseling Individu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="custom-validation" action="#">
                    <div class="form-group">
                        <h5 class="font-size-14">Pilih Konselor</h5>
                        <select class="form-control">
                            <option>X</option>
                            <option>XI</option>
                            <option>XII</option>
                            <option>XIII</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <h5 class="font-size-14">Pilih Tanggal</h5>
                        <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
                    </div>
                    <div class="form-group">
                        <h5 class="font-size-14">Pilih Jam</h5>
                        <input type="time" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <h5 class="font-size-14">Ringkas Masalah</h5>
                        <div>
                            <textarea required class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <h5 class="font-size-14">Harapan Konseling</h5>
                        <div>
                            <textarea required class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->