@extends('layouts.main')

@section('content')
<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Form Tambah Unggahan Siswa</h4>
                </div>
                <div class="col-md-4">

                </div>
            </div>

        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <div class="page-content-wrapper">

        <div class="container-fluid">
        <form action="{{ url('siswa/unggahan-siswa/edit/'.$unggahan->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">

                            {{-- <h4 class="header-title">Validation type</h4>
                            <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}
                                <div class="form-group">
                                    <h5 class="header-title">Judul</h5>
                                    {{-- <small>Contoh : Wiro Sableng</small> --}}
                                    <input name="nama" value="{{$unggahan->nama}}" type="text" class="form-control" required placeholder=""/>
                                </div>
                                <div class="form-group">
                                    <h5 class="header-title">Jenis</h5>
                                    <select class="form-control" name="jenis" id="jenis">
                                        <option disabled selected value="">-- Pilih Jenis --</option>
                                        <option value="cerpen" @if ($unggahan->jenis == "cerpen") selected @endif>Cerpen</option>
                                        <option value="gambar" @if ($unggahan->jenis == "gambar") selected @endif>Gambar</option>
                                        <option value="artikel" @if ($unggahan->jenis == "artikel") selected @endif>Artikel</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="header-title">Keterangan</h5>
                                    <textarea name="keterangan" class="form-control" rows="10">{{$unggahan->keterangan}}</textarea>
                                </div>
                        </div>
                    </div>
                </div> <!-- end col -->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            {{-- <h4 class="header-title">Range validation</h4>
                            <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p> --}}

                                <div class="file-upload" id="file">
                                    <h3 class="font-size-14">File Upload</h3>
                                    {{-- <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button> --}}
                                    <div class="image-upload-wrap">
                                    <input name="file_unggahan" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*,.pdf" value="{{$unggahan->file}}"/>
                                    <div class="drag-text">
                                        <h3>Drag and drop a file</h3>
                                    </div>
                                    </div>
                                    <div class="file-upload-content">
                                        <img class="file-upload-image" alt="your image"
                                        @if (isset($unggahan->file))
                                            @if (pathinfo($unggahan->file, PATHINFO_EXTENSION) == 'jpeg' || pathinfo($unggahan->file, PATHINFO_EXTENSION) == 'jpg' || pathinfo($unggahan->file, PATHINFO_EXTENSION) == 'png')
                                                src="{{url('/unggahan-siswa/'.$unggahan->file)}}"
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
                                    <button type="submit" class="float-right btn btn-success waves-effect waves-light mr-1">Simpan</button>
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
        border: 4px dashed #1FB264;
        position: relative;
    }

    .image-dropping,
    .image-upload-wrap:hover {
        background-color: #1FB264;
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
        color: #15824B;
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
        console.log($('#file').find('.file-upload-image').attr('src'));
        if ($('#file').find('.file-upload-image').attr('src') !== undefined && $('#file').find('.file-upload-image').attr('src') !== null) {
            $('#file').find('.file-upload-content').show();
            $('#file').find('.image-upload-wrap').hide();
        }
    });

    function readURL(input, data) {
        var element = $(input).parents().closest(".file-upload");
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                element.find('.image-upload-wrap').hide();
                var extension = input.files[0].name.split('.').pop().toLowerCase();
                if (extension == "pdf") {
                    element.find('.file-upload-image').attr('src', "http://127.0.0.1:8000/image/file-extension/thumbnail-pdf.png");
                }else{
                    element.find('.file-upload-image').attr('src', e.target.result);
                }
                element.find('.file-upload-content').show();
                element.find('.image-title').html(input.files[0].name);
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            removeUpload(element);
        }
    }

    function removeUpload(element) {
        element.find('.file-upload-input').replaceWith($('.file-upload-input').clone());
        element.find('.file-upload-content').hide();
        element.find('.image-upload-wrap').show();
    }

    function removeUpload_(input) {
        var element = $(input).parents().closest(".file-upload");
        element.find('.file-upload-input').replaceWith($('.file-upload-input').clone());
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
