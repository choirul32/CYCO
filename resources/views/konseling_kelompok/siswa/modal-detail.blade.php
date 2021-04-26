<div id="modalDetail" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Detail Permintaan Konseling Kelompok</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" class="custom-validation" action="{{ url('siswa/konseling_individu/create') }}">
                @csrf
                <div class="modal-body">
                    <h4 class="header-title">Ringkasan Masalah</h4>
                    <p class="card-title-desc"></p>
                    <h4 class="header-title">Harapan Konseling</h4>
                    <p class="card-title-desc"></p>
                    <h4 class="header-title">Link</h4>
                    <p id="link" class="card-title-desc"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
