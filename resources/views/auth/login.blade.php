@extends('layouts.login')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card shadow border-0">
            <div class="card-header bg-primary text-white text-center">
                <h4>Silahkan Login</h4>
            </div>
            <div class="card-body">
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form action="{{ route('login.process') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required autofocus>
                    </div>
                    <div class="mb-3 position-relative">
                        <label>Password</label>
                        <div class="input-group">
                            <input type="password" name="password" class="form-control" id="login-password" required>
                            <span class="input-group-text" onclick="togglePassword('login-password', this)" style="cursor:pointer;">
                                <i class="fa fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-success" type="submit">Login</button>
                    </div>
                </form>
                <div class="mt-3 text-center">
                    <small>Belum punya akun? <a href="{{ route('register') }}" class="text-primary fw-bold" style="text-decoration: underline;">Daftar</a></small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
