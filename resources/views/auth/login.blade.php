@extends('layouts.app')

@section('content')



<section class="login_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form method="POST" action="{{ route('login') }}">@csrf
                        @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                        @endif
                        <div class="cardify login">
                            <div class="login--header">
                                <h3>Добро пожаловать!</h3>
                                <p>Пожалуйста, войдите в Ваш аккаунт!</p>
                            </div>
                            <!-- end .login_header -->

                            <div class="login--form">
                                <div class="form-group">
                                    <label for="user_name">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <label for="pass">Пароль</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                     @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <div class="custom_checkbox">
                                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember">
                                            <span class="shadow_checkbox"></span>
                                            <span class="label_text">Запомнить меня</span>
                                        </label>
                                    </div>
                                </div>

                                <button class="btn btn--md btn--round" type="submit">Войти</button>

                                <div class="login_assist">
                                    
                                         <a  href="{{ route('password.request') }}">
                                       Забыли пароль?</a>
                                    
                                        
                                </div>
                            </div>
                            <!-- end .login--form -->
                        </div>
                        <!-- end .cardify -->
                    </form>
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
@endsection
