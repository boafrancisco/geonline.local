@extends('auth.template.index')

@section('content')

    <div class="login-box">
        <div class="login-logo">
        <a href="{{ route("register") }}"><b>Gesta</b>ESCOLAR</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Digite seus dados para criar sua conta!</p>

            <form action="{{ route("register") }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <label for="first_name"></label>
                <input type="text" class="form-control @error("first_name") has-error @enderror" name="first_name" id="first_name" value="{{ old("first_name") ?? "" }}" placeholder="Primeiro Nome">
                <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            @error("first_name")
                <span class="text-danger">{{ $message }}</span>
                <hr>
            @enderror
            <div class="input-group mb-3">
                <label for="last_name"></label>
                <input type="text" class="form-control @error("last_name") has-error @enderror" name="last_name" id="last_name" value="{{ old("last_name") ?? "" }}" placeholder="Apelido">
                <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            @error("last_name")
                <span class="text-danger">{{ $message }}</span>
                <hr>
            @enderror
            <div class="input-group mb-3">
                <label for="email"></label>
                <input type="email" class="form-control @error("email") has-error @enderror" name="email" id="email" value="{{ old("email") ?? "" }}" placeholder="Email">
                <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            @error("email")
                <span class="text-danger">{{ $message }}</span>
                <hr>
            @enderror
            <div class="input-group mb-3">
                <label for="password"></label>
                <input type="password" class="form-control @error("password") has-error @enderror" name="password" id="password" placeholder="Senha">
                <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
                </div>
            </div>
            @error("password")
                    <span class="text-danger">{{ $message }}</span>
                    <hr>
            @enderror
            <div class="input-group mb-3">
                <label for="password_confirmation"></label>
                <input type="password" class="form-control @error("password_confirmation") has-error @enderror" name="password_confirmation" id="password_confirmation" placeholder="Confirme a Senha">
                <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
                </div>
            </div>
            @error("password_confirmation")
                    <span class="text-danger">{{ $message }}</span>
                    <hr>
            @enderror
            <div class="row">

                <!-- /.col -->
                <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                </div>
                <!-- /.col -->
            </div>
            </form>
            <div class="social-auth-links text-center mb-3">
                <hr>
            <a href="{{ route("password.email") }}" class="btn btn-block btn-primary">
                <i class="fab fa-lock mr-2"></i> Esqueci minha senha!
            </a>
            <a href="{{ route("register") }}" class="btn btn-block btn-danger">
                <i class="fab fa-user-circle mr-2"></i> Já tenho a conta.
            </a>
            </div>
            <!-- /.social-auth-links -->
        </div>
        <!-- /.login-card-body -->
        </div>
    </div>

@endsection
