@extends('auth.layouts.main')

@section('title', 'Login Guru')

@section('content')
<div class="row justify-content-center">
    <div class="col-xl-5 col-sm-8">
        <div class="card">
            <div class="card-body p-4">
                <div class="p-2">
                    <h5 class="mb-5 text-center">Login Guru</h5>
                    <form class="form-horizontal" action="{{ url('/guru/login') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group form-group-custom mb-4">
                                    <input name="username" type="text" class="form-control" id="username" required>
                                    <label for="username">User Name</label>
                                </div>

                                <div class="form-group form-group-custom mb-4">
                                    <input name="password" type="password" class="form-control" id="userpassword" required>
                                    <label for="userpassword">Password</label>
                                </div>
                                @if(Session::has('error'))
                                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('error') }}</p>
                                @endif
                                @if ($message = Session::get('success-register'))
                                    <div class="alert alert-success">{{ $message }}</div>
                                @endif
                                {{-- <div class="row">
                                    <div class="col-md-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-md-right mt-3 mt-md-0">
                                            <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="mt-4">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Log In</button>
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="{{ url('guru/register') }}" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Buat akun baru</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
