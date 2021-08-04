<div id="modalDetail" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Detail Permintaan Konseling Individu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" class="custom-validation" action="{{ url('guru/konseling_individu/save-link') }}">
                @csrf
                <input type="hidden" id="id_detail" name="id" value="">
                <div class="modal-body">
                    <h4 class="header-title">Ringkasan Masalah</h4>
                    <p class="card-title-desc"></p>
                    <h4 class="header-title">Harapan Konseling</h4>
                    <p class="card-title-desc"></p>
                    <div class="form-group">
                        <h4 class="font-size-14"><strong>Link :</strong></h4>
                        <div id="link-input">
                            <input class="form-control" type="text" id="link" name="link" value="">
                        </div>
                        <div id="link-web-chat">
                            <a id="link-web-button" href="" class="btn btn-info">Masuk Chat Konseling</a>
                        </div>
                    </div>

                    <div class="form-group" id="group-konseling-selesai">
                        <h4 class="font-size-14"><strong>Klik Tombol Dibawah jika konseling telah selesai :</strong></h4>
                        <div>
                            <a href="" class="btn btn-success" id="button-konseling-selesai">Selesaikan Konseling</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>

                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
