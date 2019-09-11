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
                                <a href="dashboard.html">Профиль волонтера</a>
                            </li>
                            <li class="active">
                                <a href="#">Настройки</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">{{Auth::user()->company->name}}</h1>
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
                                <a href="{{route('company.index',[Auth::user()->company->id,Auth::user()->company->slug])}}">
                                    <span class="lnr lnr-home"></span>Профиль</a>
                            </li>
                            <li class="active">
                                <a href="{{ route('company.settings') }}" >
                                    <span class="lnr lnr-cog"></span>Настройки</a>
                            </li>
                            <li>
                                <a href="dashboard-statement.html">
                                    <span class="lnr lnr-cart"></span>Транзакции</a>
                            </li>
                        
                            <li>
                                <a href="dashboard-manage-item.html">
                                    <span class="lnr lnr-dice"></span>Прошлые подопечные</a>
                            </li>
                             <li >
                                <a href="dashboard-upload.html">
                                    <span class="lnr lnr-chart-bars"></span>Загрузить подопечного</a>
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

                <form action="{{route('company.store')}}" class="setting_form" method="POST" enctype="multipart/form-data">@csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="information_module">
                                <a class="toggle_title">
                                    <h4>Личные данные
                                
                                    </h4>
                                </a>

                                <div class="information__set toggle_module collapse show" id="collapse2">
                                    <div class="information_wrapper form--fields">
         

                                        <div class="form-group">
                                            <label for="authbio">Информация о вас</label>
                                            <textarea  name="bio" id="authbio" class="form-control " maxlength="550">{{Auth::user()->company->bio}}</textarea>
                                        </div>
                                    </div>
                                    <!-- end /.information_wrapper -->
                                </div>
                                <!-- end /.information__set -->
                            </div>
                            <!-- end /.information_module -->
                              <div class="information_module">
                                <a class="toggle_title" >
                                    <h4>Социальные сети
                                       
                                    </h4>
                                </a>

                                <div class="information__set social_profile toggle_module  ">
                                    <div class="information_wrapper">
                                        <div class="social__single">
                                            <div class="social_icon">
                                               
                                                <span class="fa fa-facebook"></span>
                                            
                                            </div>

                                            <div class="link_field">
                                                 @if(empty(Auth::user()->company->fblink))
                                                   <input class="form-control " name="fblink" placeholder="ex: www.facebook.com/saveus" value="https://">
                                                   @else
                                                <input  class="form-control " name="fblink" placeholder="ex: www.facebook.com/saveus" value="{{Auth::user()->company->fblink}}">
                                                @endif
                                                 @if($errors->has('fblink'))
                                                <p class="error" style="color: red;">
                                                    {{$errors->first('fblink')}}
                                                    @endif
                                            </div>
                                        </div>
                                        <!-- end /.social__single -->

                                        <div class="social__single">
                                            <img src="{{asset('avatar/vk.png')}}"> </img>

                                            <div class="link_field">
                                                @if(empty(Auth::user()->company->fblink))
                                                 <input  class="form-control " name="vklink" placeholder="ex: vk.com/saveus" value="https://">
                                                 @else
                                                <input  class="form-control " name="vklink" placeholder="ex: vk.com/saveus" value="{{Auth::user()->company->vklink}}">
                                                 @endif
                                                 @if($errors->has('vklink'))
                                                <p class="error" style="color: red;">
                                                    {{$errors->first('vklink')}}
                                                    @endif
                                            </div>
                                        </div>
                                        <!-- end /.social__single -->

                                        <div class="social__single">
                                            <img src="{{asset('avatar/inst.png')}}"> </img>

                                            <div class="link_field">
                                                 @if(empty(Auth::user()->company->instlink))
                                                  <input  class="form-control " name="instlink" placeholder="ex: instagram.com/saveus" value="https://">
                                                  @else
                                                <input class="form-control " name="instlink" placeholder="ex: instagram.com/saveus" value="{{Auth::user()->company->instlink}}">
                                                 @endif
                                                   @if($errors->has('instlink'))
                                                <p class="error" style="color: red;">
                                                    {{$errors->first('instlink')}}
                                                    @endif
                                            </div>
                                        </div>
                                        <!-- end /.social__single -->

                                    
                                        <!-- end /.social__single -->

                                        <!-- end /.social__single -->
                                    </div>
                                    <!-- end /.information_wrapper -->
                                </div>
                                <!-- end /.social_profile -->
                            </div> 
                             @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                        @endif
                             <div class="col-md-12">
                            <div class="dashboard_setting_btn">
                                <button type="submit" class="btn btn--round btn--md">Сохранить изменения</button>
                            </div>
                        </div>
                            <!-- end /.information_module -->
                        </div>
                        <!-- end /.col-md-6 -->
                        </form>
                        <div class="col-lg-6">
                             <div class="information_module" id="app">
                                <a class="toggle_title">
                                    <h4>Аватар и верификация
                                      
                                    </h4>
                                </a>
                                <div class="information__set profile_images" >
                                    <div class="information_wrapper">
                                        <div class="profile_image_area">
                                            @if(empty(Auth::user()->company->logo))
                                            <img src="{{asset('avatar/avatar3.png')}}" id="image" alt="Author profile area">
                                            @else
                                            <img src="{{asset('uploads/logo')}}/{{Auth::user()->company->logo}}" id="image" alt="Author profile area sds">
                                            @endif
                                            <div class="img_info">
                                                <p class="bold">Фото профиля</p>
                                                <p class="subtitle">JPG или PNG</p>
                                            </div>

                                            <label for="input" class="upload_btn" data-toggle="tooltip">
                                                <span class="btn btn--sm btn--round" >Загрузить фото</span>
                                            </label>

                                           @if($errors->has('logo'))
                                                <p class="error" style="color: red;">
                                                    {{$errors->first('logo')}}
                                                    @endif
                                        </div>
                                         <input type="hidden" id="filename" value="logo">
                                         <input type="button" class="btn btn--round btn--md" id="updateAvatar" value="Обновить">
                                         <div id="app">
                                            <icon-component><icon-component>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div> 
                            
                            <div class="information_module">
                                <a class="toggle_title" >
                                    <h4>Аватар и верификация
                                      
                                    </h4>
                                </a>
                                <form action="{{route('vol.verify')}}" method="POST" enctype="multipart/form-data">@csrf
                                <div class="information__set profile_images toggle_module ">
                                    <div class="information_wrapper">
                                        
                                        <div class="prof_img_upload">
                                            <p class="bold">Верификация паспорта</p>
                                            <img src="images/pasport2.png" alt="The great warrior of China">

                                            <div class="upload_title">
                                                <p>JPG или PNG</p>
                                                <label for="cover_photo" class="upload_btn" >
                                                     <input type="file"  name="verify">
                                                     <span class="btn btn--sm btn--round" >Загрузить фото</span>
                                                </label>
                                                @if($errors->has('verify'))
                                                <p class="error" style="color: red;">
                                                    {{$errors->first('verify')}}
                                                    @endif
                                            </div>
                                             <button type="submit" class="btn btn--round btn--md">Обновить</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            </form>
                            <div class="information_module">
                                <a class="toggle_title" >
                                    <h4>Аватар и верификация
                                      
                                    </h4>
                                </a>

                            <form action="{{route('vol.verify')}}" method="POST" enctype="multipart/form-data">@csrf
                                
                                <input type="file" name="verify">
                                 @if($errors->has('verify'))
                                                <p class="error" style="color: red;">
                                                    {{$errors->first('verify')}}
                                                    @endif
                                <button type="submit"> Отправить </button>
                            </form>
                            <br>
                            <br>
                        </div>
                            <!-- end /.information_module -->
<div class="information_module">
                                <a class="toggle_title">
                                    <h4>Карта для получения средств
                                     
                                    </h4>
                                </a>

                                <div class="information__set toggle_module " id="collapse1">
                                    <div class="information_wrapper form--fields">
                                        <div class="row">
                                        <div class="prof_img_upload">
                                      
                                            <img src="/assets/karta.png" alt="The great warrior of China">

                                          
                                        </div>
                                        <div class="payment_info modules__content">
                                    <div class="form-group">
                                    <br>
                                    <br>
                                    <br>
                                        
                                    
                                    </div>

                                    <!-- lebel for date selection -->
                               
                                    
                                    <!-- end /.row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                     


                                            <button  class="btn btn--round btn--default">Добавить карту</button>
                                        </div>
                                    </div>
                                </div>  
                                           

                                            
                                        </div>
                                        <!-- end /.row -->
                                    </div>
                                </div>
                                <!-- end /.information__set -->
                            </div>
                          
                            <!-- end /.information_module -->

                         
                        <!-- end /.col-md-6 -->

                       
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                
                <!-- end /form -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
    <!--======================
            END DASHBOARD AREA
    ======================-->
@endsection
