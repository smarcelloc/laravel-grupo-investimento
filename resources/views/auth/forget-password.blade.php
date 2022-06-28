@extends('layout.login.index')

@section('title')
    Recupera a sua senha
@endsection

@section('content')
    <form>
        <div class="small mb-3 text-muted">Digite seu endereço de e-mail e enviaremos um link para redefinir sua senha.</div>
        <div class="form-floating mb-3">
            <input class="form-control" id="email" type="email" placeholder="name@example.com" />
            <label for="email">Email address</label>
        </div>
        <div class="mt-4 mb-0">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-block">Redefinir a sua senha</a>
            </div>
        </div>
    </form>
@endsection

@section('footer')
    <div class="small"><a href="{{ route('auth.login') }}">Voltar para tela de login</a></div>
@endsection
