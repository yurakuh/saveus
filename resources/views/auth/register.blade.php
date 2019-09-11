@extends('layouts.app')

@section('content')

<section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="index.html">Главная</a>
                            </li>
                            <li class="active">
                                <a href="#">Регистрация</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Регистрация</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->


    <!--================================
            START SIGNUP AREA
    =================================-->
    <section class="signup_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form method="POST" action="{{ route('register') }} "  class="reg-form" id="target">
                         @csrf
                         
                        <div class="cardify signup_form">
                            <div class="login--header">
                                <h3>Зарегистрируйте ваш аккаунт</h3>
                                <p>Пожалуйста, заполните следующие поля, чтобы зарегистрироваться.
                                </p>
                            </div>
                            <!-- end .login_header -->

                            <div class="login--form">

                                <div class="form-group">
                                    <label for="urname">Ваше имя и фамилию</label>
                                     <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email_ad">Email адрес</label>
                                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                      

                                <div class="form-group">
                                    <label for="password">Пароль</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                                <div class="form-group">
                                    <label for="con_pass">Подтверждение пароля</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="form-group"> 
                                    <div class="col-md-12"> 
                                    <div class="form-group radio-group"> 
                                    <p class="label">Тип вашего профиля:</p> 
                                    <div class="custom-radio"> 
                                    <input type="radio" id="yes" class="" name="user_type" value="donator" data-url="{{ route('register') }}" checked>  
                                    <label for="yes"> 
                                    <span class="circle"></span>Пользователь</label> 
                                     </div> 
                                    <br> 
                                <div class="custom-radio"> 
                                <input type="radio" id="no" class="" name="user_type" value="volounteer" data-url="{{ route('vol.register') }}"> 
                                <label for="no"> 
                                <span class="circle"></span>Индивидуальный волонтер</label> 
                                </div> 
                                    <br> 
                                <div class="custom-radio"> 
                                 <input type="radio" id="no1" class="" name="user_type" value="organisation" data-url="{{ route('vol.register') }}"> 
                                    <label for="no1"> 
                                     <span class="circle"></span>Благотворительная организация</label> 
                                    </div> 
                                    </div> 
                                    </div> 
                                    </div>
                                <button class="btn btn--md btn--round register_btn" type="submit">Зарегистрироваться</button>

                                <div class="login_assist">
                                    <p>Уже есть аккаунт?
                                        <a href="google.com" >Войти на сайт</a>
                                    </p>
                                </div>
                            </div>
                            <!-- end .login--form -->
                        </div>
                      
                        <!-- end .cardify -->
                    </form>
                      <script> 
document.addEventListener('change', function(evt){ 
if (evt.target.matches('[data-url]')) { 
target.action = evt.target.dataset.url 
} 
}) 
</script>
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>

   
@endsection
