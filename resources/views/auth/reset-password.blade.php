@extends('layout.login.index')

@section('title')
    Resetar a sua senha
@endsection

@section('content')
    <form>
        <div class="small mb-3 text-muted">Informe a sua nova senha para acessar o nosso sistema</div>
        <div class="form-floating mb-3">
            <input class="form-control" id="password" name="password" type="password" placeholder="Nova senha" />
            <label for="password">Nova Senha</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="password" name="password-confirm" type="password"
                placeholder="Confirma a Nova senha" />
            <label for="password-confirm">Confirmar a Nova Senha</label>
        </div>
        <div class="mt-4 mb-0">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-block">Resetar a sua senha</a>
            </div>
        </div>
    </form>
@endsection

@section('footer')
    <div class="small"><a href="{{ route('auth.login') }}">Voltar para tela de login</a></div>
@endsection
