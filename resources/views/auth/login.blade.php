@extends('auth.template.index')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('login') }}"><b>Gesta</b>ESCOLAR</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Entre com seus dados!</p>

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <label for="email"></label>
                        <input type="email" class="form-control @error('email') has-error" @enderror name="email"
                            id="email" value="{{ old('email') ?? '' }}" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        <hr>
                    @enderror
                    <div class="input-group mb-3">
                        <label for="password"></label>
                        <input type="password" class="form-control @error('password') has-error" @enderror name="password"
                            id="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        <hr>
                    @enderror
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Lembrar-me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Aceder</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mb-3">
                    <hr>
                    <a href="{{ route('password.email') }}" class="btn btn-block btn-primary">
                        <i class="fab fa-lock mr-2"></i> Esqueci a minha senha
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-block btn-danger">
                        <i class="fab fa-user-plus mr-2"></i> Ainda não tenho uma conta.
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
