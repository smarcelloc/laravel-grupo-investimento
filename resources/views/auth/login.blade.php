@extends('layout.login.index')

@section('title')
    Login
@endsection

@section('content')
    <form>
        @csrf
        <div class="form-floating mb-3">
            <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" />
            <label for="email">E-mail</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="password" name="password" type="password" placeholder="Password" />
            <label for="password">Senha</label>
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" id="remember_password" name="remember_password" type="checkbox" checked />
            <label class="form-check-label" for="remember_password">Lembrar senha</label>
        </div>
        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
            <a class="small" href="{{ route('auth.forget') }}">Esqueceu a sua senha?</a>
            <button type="submit" class="btn btn-primary">Acessar</button>
        </div>
    </form>
@endsection

@section('footer')
    <div class="small"><a href="{{ route('auth.register') }}">Precisa de uma conta? Inscrever-se!</a></div>
@endsection
