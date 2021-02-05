@extends('registerLayout')

@section('title', 'Вход')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Авторизация</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.enter') }}" aria-label="Login">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control"
                                       name="email" value=""  >
                                @error('email')
                                    <div class="alert alert-danger"> {{ $message }}</div>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control"
                                       name="password" >
                                @error('password')
                                <div class="alert alert-danger"> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Войти
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
@endsection




