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
                            <li>
                                <a href="{{ route('profile.show') }}">{{ Auth::user()->name }}</a>
                            </li>
                            <li class="active">
                                <a href="#">Настройки</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">{{ Auth::user()->name }}</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--======================
        END BREADCRUMB AREA
    ======================-->

    <!--======================
            START DASHBOARD AREA
    ======================-->
    <section class="dashboard-area">
        <div class="dashboard_menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                      <ul class="dashboard_menu">
                            <li >
                                <a href="{{ route('profile.show') }}">
                                    <span class="lnr lnr-home"></span>Профиль</a>
                            </li>
                            <li class="active">
                                            <a href="{{ route('user.profile') }}">
                                    <span class="lnr lnr-cog"></span>Настройки</a>
                            </li>
                           
                        
                            <li>
                                <a href="dashboard-manage-item.html">
                                    <span class="lnr lnr-heart"></span>Отслеживаемые</a>
                            </li>
                     
                        </ul>
                        <!-- end /.dashboard_menu -->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->

        <div class="dashboard_contents">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard_title_area">
                            <div class="dashboard__title">
                                <h3>Настройка аккаунта</h3>
                            </div>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                
                    <div class="row">
                        <div class="col-lg-6">
                             <div class="information_module">
                                <a class="toggle_title">
                                    <h4>Аватар и верификация
                                      
                                    </h4>
                                </a>
                                <div class="information__set profile_images" >
                                    <div class="information_wrapper">
                                        <div class="profile_image_area">
                                            @if(empty(Auth::user()->profile->avatar))
                                            <img src="{{asset('avatar/avatar3.png')}}" id="image" alt="Author profile area">
                                            @else
                                            <img src="{{asset('uploads/avatar')}}/{{Auth::user()->profile->avatar}}" id="image" alt="Author profile area sds">
                                            @endif
                                            <div class="img_info w-25" >
                                                <p class="bold">Фото профиля</p>
                                                <p class="subtitle">JPG или PNG</p>
                                            </div>
                                            
                                            <label for="input" class="upload_btn" data-toggle="tooltip">
                                                <span class="btn btn--sm btn--round" >Загрузить фото</span>
                                            </label>
                                           @if($errors->has('avatar'))
                                                <p class="error" style="color: red;">
                                                    {{$errors->first('avatar')}}
                                                    @endif
                                        </div>

                                         <button class="btn btn--round btn--md" id="updateAvatar">Обновить</button>
                                     
                                    </div>
                                    <input type="hidden" id="filename" value="avatar">
                                    <div id="app">
                                        <icon-component><icon-component>
                                    </div>
                                </div>
                                  
                            </div>
                             <form action="{{route('profile.update')}}" class="setting_form" method="POST">@csrf
                            <div class="information_module">
                                <a class="toggle_title" >
                                    <h4>Личные данные
                                    </h4>
                                </a>

                                <div class="information__set toggle_module collapse show" id="collapse2">
                                    <div class="information_wrapper form--fields">
                                        
                                        <div class="form-group">
                                            <label for="authbio">Информация о вас</label>
                                            <textarea name="bio" id="authbio" class="form-control " maxlength="250">{{Auth::user()->profile->bio}}</textarea>
                                        </div>
                                    </div>
                                    <!-- end /.information_wrapper -->
                                </div>
                                <!-- end /.information__set -->
                            </div>
                            <!-- end /.information_module -->
                            
                        </div>

                        <!-- end /.col-md-6 -->

                        <div class="col-lg-6">
                            
                                                    <!-- end /.information_module -->
                     
                            <div class="information_module">
                                <a class="toggle_title" >
                                    <h4>Социальные сети
                                     
                                    </h4>
                                </a>

                                <div class="information__set social_profile ">
                                    <div class="information_wrapper">
                                        <div class="social__single">
                                            <div class="social_icon">
                                                <span class="fa fa-facebook"></span>
                                            </div>

                                            <div class="link_field">
                                                     @if(empty(Auth::user()->profile->fblink))
                                                   <input type="url" class="form-control " name="fblink" placeholder="ex: www.facebook.com/saveus" value="https://">
                                                   @else
                                                <input type="url" class="form-control " name="fblink" placeholder="ex: www.facebook.com/saveus" value="{{Auth::user()->profile->fblink}}">
                                                @endif
                                                @if($errors->has('fblink'))
                                                <div class="error" style="color: red;">
                                                    {{$errors->first('fblink')}}
                                                    @endif
                                            </div>
                                        </div>
                                        <!-- end /.social__single -->

                                        <div class="social__single">
                                            <img src="{{asset('avatar/vk.png')}}"> </img>

                                            <div class="link_field">
                                                @if(empty(Auth::user()->profile->vklink))
                                                   <input type="url" class="form-control " name="vklink" placeholder="ex: vk.com/saveus" value="https://">
                                                   @else
                                                <input type="url" class="form-control " name="vklink" placeholder="ex: vk.com/saveus" value="{{Auth::user()->profile->vklink}}">
                                                @endif
                                                @if($errors->has('vklink'))
                                                <div class="error" style="color: red;">
                                                    {{$errors->first('vklink')}}
                                                    @endif
                                            </div>
                                        </div>
                                        <!-- end /.social__single -->

                                        <div class="social__single">
                                            <img src="{{asset('avatar/inst.png')}}"> </img>

                                            <div class="link_field">
                                                 @if(empty(Auth::user()->profile->instlink))
                                                   <input type="url" class="form-control " name="instlink" placeholder="ex: instagram.com/saveus" value="https://">
                                                   @else
                                                <input type="url" class="form-control " name="instlink" placeholder="ex: instagram.com/saveus" value="{{Auth::user()->profile->instlink}}">
                                                @endif
                                                @if($errors->has('instlink'))
                                                <div class="error" style="color: red;">
                                                    {{$errors->first('instlink')}}
                                                    @endif
                                            </div>
                                        </div>
                                        <!-- end /.social__single -->

                                    
                                       

                                        <!-- end /.social__single -->
                                    </div>
                                    <!-- end /.information_wrapper -->
                                </div>
                                <!-- end /.social_profile -->
                            </div>
                            <!-- end /.information_module -->
                                @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                        @endif
                          
                            <!-- end /.information_module -->
                        </div>
                        <!-- end /.col-md-6 -->

                        <div class="col-md-12">
                            <div class="dashboard_setting_btn">
                                <button type="submit" class="btn btn--round btn--md">Сохранить изменения</button>
                            </div>
                        </div>
                       
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                </form>
                <!-- end /form -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
@endsection
