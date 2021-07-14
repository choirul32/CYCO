@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Upload Berkas</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Form Validation</li>
                    </ol>
                </div>
                <div class="col-md-4">

                </div>
            </div>

        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <div class="page-content-wrapper">
        <div class="container-fluid">
            <form action="{{url('siswa/edit/unggah_berkas')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                {{-- <h4 class="header-title">Validation type</h4>
                                <p class="card-title-desc">Parsley is a javascript form validation
                                    library. It helps you provide your users with feedback on their form
                                    submission before sending it to your server.</p> --}}
                                <div>
                                    <div class="file-upload" id="foto_diri">

                                        <h3 class="font-size-14">Foto Diri</h3>
                                        {{-- <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button> --}}

                                        <div class="image-upload-wrap" >
                                        <input id="foto_diri_input" name="foto_diri" class="file-upload-input" type='file'  onchange="readURL(this);" accept="image/*,.pdf" />
                                        <div class="drag-text">
                                            <h3>Drag and drop a file or select add Image</h3>
                                        </div>
                                        </div>
                                        <div class="file-upload-content">
                                            <img class="file-upload-image" alt="your image"
                                            @if (isset($siswa->foto_diri))
                                                @if (pathinfo($siswa->foto_diri, PATHINFO_EXTENSION) == 'jpeg' || pathinfo($siswa->foto_diri, PATHINFO_EXTENSION) == 'jpg' || pathinfo($siswa->foto_diri, PATHINFO_EXTENSION) == 'png')
                                                    src="{{ asset("data_berkas/foto_diri/". $siswa->foto_diri) }}"
                                                @else
                                                    src="http://127.0.0.1:8000/image/file-extension/thumbnail-pdf.png"
                                                @endif
                                            @endif/>
                                            <div class="image-title-wrap">
                                                <button type="button" onclick="removeUpload_(this);" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="file-upload" id="ijazah">

                                        <h3 class="font-size-14">Ijazah</h3>
                                        {{-- <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button> --}}

                                        <div class="image-upload-wrap">
                                        <input name="ijazah" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*,.pdf" />
                                        <div class="drag-text">
                                            <h3>Drag and drop a file or select add Image</h3>
                                        </div>
                                        </div>
                                        <div class="file-upload-content">
                                            <img class="file-upload-image" alt="your image"
                                            @if (isset($siswa->ijazah))
                                                @if (pathinfo($siswa->ijazah, PATHINFO_EXTENSION) == 'jpeg' || pathinfo($siswa->ijazah, PATHINFO_EXTENSION) == 'jpg' || pathinfo($siswa->ijazah, PATHINFO_EXTENSION) == 'png')
                                                    src="{{ asset("data_berkas/ijazah". $siswa->ijazah) }}"
                                                @else
                                                    src="http://127.0.0.1:8000/image/file-extension/thumbnail-pdf.png"
                                                @endif
                                            @endif/>
                                        <div class="image-title-wrap">
                                            <button type="button" onclick="removeUpload_(this);" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="file-upload" id="skhu">

                                        <h3 class="font-size-14">SKHU</h3>
                                        {{-- <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button> --}}

                                        <div class="image-upload-wrap">
                                        <input name="skhu" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*,.pdf"  />
                                        <div class="drag-text">
                                            <h3>Drag and drop a file or select add Image</h3>
                                        </div>
                                        </div>
                                        <div class="file-upload-content">
                                            <img class="file-upload-image" alt="your image"
                                            @if (isset($siswa->skhu))
                                                @if (pathinfo($siswa->skhu, PATHINFO_EXTENSION) == "png" || pathinfo($siswa->skhu, PATHINFO_EXTENSION) == "jpeg" || pathinfo($siswa->skhu, PATHINFO_EXTENSION) == "jpg")
                                                    src="{{ asset("data_berkas/skhu/". $siswa->skhu) }}"
                                                @else
                                                    src="http://127.0.0.1:8000/image/file-extension/thumbnail-pdf.png"
                                                @endif
                                            @endif/>
                                        <div class="image-title-wrap">
                                            <button type="button" onclick="removeUpload_(this);" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="file-upload" id="kk">

                                    <h3 class="font-size-14">KK</h3>
                                    {{-- <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button> --}}

                                    <div class="image-upload-wrap">
                                    <input name="kk" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*,.pdf" />
                                    <div class="drag-text">
                                        <h3>Drag and drop a file or select add Image</h3>
                                    </div>
                                    </div>
                                    <div class="file-upload-content">
                                        <img class="file-upload-image" alt="your image"
                                        @if (isset($siswa->kk))
                                            @if (pathinfo($siswa->kk, PATHINFO_EXTENSION) == 'jpeg' || pathinfo($siswa->kk, PATHINFO_EXTENSION) == 'jpg' || pathinfo($siswa->kk, PATHINFO_EXTENSION) == 'png')
                                                src="{{ asset("data_berkas/kk/". $siswa->kk) }}"
                                            @else
                                                src="http://127.0.0.1:8000/image/file-extension/thumbnail-pdf.png"
                                            @endif
                                        @endif/>
                                    <div class="image-title-wrap">
                                        <button type="button" onclick="removeUpload_(this);" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                    </div>
                                    </div>
                                </div>
                                <div class="file-upload" id="akta_kelahiran">

                                    <h3 class="font-size-14">Akta Kelahiran</h3>
                                    {{-- <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button> --}}

                                    <div class="image-upload-wrap">
                                    <input name="akta_kelahiran" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*,.pdf"  />
                                    <div class="drag-text">
                                        <h3>Drag and drop a file or select add Image</h3>
                                    </div>
                                    </div>
                                    <div class="file-upload-content">
                                        <img class="file-upload-image" alt="your image"
                                        @if (isset($siswa->akta_kelahiran))
                                            @if (pathinfo($siswa->akta_kelahiran, PATHINFO_EXTENSION) == 'jpeg' || pathinfo($siswa->akta_kelahiran, PATHINFO_EXTENSION) == 'jpg' || pathinfo($siswa->akta_kelahiran, PATHINFO_EXTENSION) == 'png')
                                                src="{{ asset("data_berkas/akta_kelahiran/". $siswa->akta_kelahiran) }}"
                                            @else
                                                src="http://127.0.0.1:8000/image/file-extension/thumbnail-pdf.png"
                                            @endif
                                        @endif/>
                                    <div class="image-title-wrap">
                                        <button type="button" onclick="removeUpload_(this);" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                    </div>
                                    </div>
                                </div>
                                <div class="file-upload" id="lain_lain">

                                    <h3 class="font-size-14">Lain Lain</h3>
                                    {{-- <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button> --}}

                                    <div class="image-upload-wrap">
                                    <input name="lain_lain" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*,.pdf"/>
                                    <div class="drag-text">
                                        <h3>Drag and drop a file or select add Image</h3>
                                    </div>
                                    </div>
                                    <div class="file-upload-content">
                                        <img class="file-upload-image" alt="your image"
                                        @if (isset($siswa->lainnya))
                                            @if (pathinfo($siswa->lainnya, PATHINFO_EXTENSION) == 'jpeg' || pathinfo($siswa->lainnya, PATHINFO_EXTENSION) == 'jpg' || pathinfo($siswa->lainnya, PATHINFO_EXTENSION) == 'png')
                                                src="{{ asset("data_berkas/lain_lain/". $siswa->lainnya) }}"
                                            @else
                                                src="http://127.0.0.1:8000/image/file-extension/thumbnail-pdf.png"
                                            @endif
                                        @endif/>
                                    <div class="image-title-wrap">
                                        <button type="button" onclick="removeUpload_(this);" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                    </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group mb-0">
                                    <div>
                                        <button type="submit" class="float-right btn btn-success waves-effect waves-light mr-1">
                                            Lanjut
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end page-content-wrapper -->
</div>
@endsection
@push('css')
<link href="{{ url('Vertical/dist/assets/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
<style>
    .file-upload {
        background-color: #ffffff;
        width: 600px;
        margin: 0 auto;
        padding: 20px;
    }

    .file-upload-btn {
        width: 100%;
        margin: 0;
        color: #fff;
        background: #1FB264;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #15824B;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .file-upload-btn:hover {
        background: #1AA059;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .file-upload-btn:active {
        border: 0;
        transition: all .2s ease;
    }

    .file-upload-content {
        display: none;
        text-align: center;
    }

    .file-upload-input {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }

    .image-upload-wrap {
        margin-top: 20px;
        border: 4px dashed #E4E9F8;
        position: relative;
    }

    .image-dropping,
    .image-upload-wrap:hover {
        background-color: #e4e9f8;
        border: 4px dashed #ffffff;
    }

    .image-title-wrap {
        padding: 0 15px 15px 15px;
        color: #222;
    }

    .drag-text {
        text-align: center;
    }

    .drag-text h3 {
        font-weight: 100;
        text-transform: uppercase;
        color: #6A716D;
        padding: 60px 0;
    }

    .file-upload-image {
        max-height: 200px;
        max-width: 200px;
        margin: auto;
        padding: 20px;
    }

    .remove-image {
        width: 200px;
        margin: 0;
        color: #fff;
        background: #cd4535;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #b02818;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .remove-image:hover {
        background: #c13b2a;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .remove-image:active {
        border: 0;
        transition: all .2s ease;
    }
</style>
@endpush
@push('js')
<script src="{{ url('Vertical/dist/assets/libs/dropzone/min/dropzone.min.js') }}"></script>
<script>
$('document').ready(function(){
    console.log($('#foto_diri').find('.file-upload-image').attr('src'));
    if ($('#foto_diri').find('.file-upload-image').attr('src') !== undefined) {
        $('#foto_diri').find('.file-upload-content').show();
        $('#foto_diri').find('.image-upload-wrap').hide();
    }
    if ($('#ijazah').find('.file-upload-image').attr('src') !== undefined) {
        $('#ijazah').find('.file-upload-content').show();
        $('#ijazah').find('.image-upload-wrap').hide();
    }
    if ($('#skhu').find('.file-upload-image').attr('src') !== undefined) {
        $('#skhu').find('.file-upload-content').show();
        $('#skhu').find('.image-upload-wrap').hide();
    }
    if ($('#kk').find('.file-upload-image').attr('src') !== undefined) {
        $('#kk').find('.file-upload-content').show();
        $('#kk').find('.image-upload-wrap').hide();
    }
    if ($('#akta_kelahiran').find('.file-upload-image').attr('src') !== undefined) {
        $('#akta_kelahiran').find('.file-upload-content').show();
        $('#akta_kelahiran').find('.image-upload-wrap').hide();
    }
    if ($('#lain_lain').find('.file-upload-image').attr('src') !== undefined) {
        $('#lain_lain').find('.file-upload-content').show();
        $('#lain_lain').find('.image-upload-wrap').hide();
    }
});
function readURL(input, data) {
    var element = $(input).parents().closest(".file-upload");
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            element.find('.image-upload-wrap').hide();
            element.find('.file-upload-image').attr('src', e.target.result);
            element.find('.file-upload-content').show();
            element.find('.image-title').html(input.files[0].name);
        };
        reader.readAsDataURL(input.files[0]);
    } else {
        removeUpload(element);
    }
}

function removeUpload(element) {
    element.find('#foto_diri_iinput').replaceWith($('#foto_diri').clone());
    element.find('.file-upload-content').hide();
    element.find('.image-upload-wrap').show();
}


function removeUpload_(input) {
    var element = $(input).parents().closest(".file-upload");
    element.find('.file-upload-input').replaceWith(element.find('.file-upload-input').clone());
    element.find('.file-upload-content').hide();
    element.find('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
});
$('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');
});
</script>
@endpush
