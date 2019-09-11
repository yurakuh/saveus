<!DOCTYPE html>
<html lang="ru-ru">

<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
<meta name="theme-color" content="#0674ec"> 

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
   <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
    <!-- inject:css -->
   
     <link rel="stylesheet" href="{{ asset('css/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   
    <link rel="stylesheet" href="{{ asset('css/cropper.min.css') }}">

   
    <!-- endinject -->

    <!-- Favicon -->
   
</head>

<body class="preload home1 mutlti-vendor">

    <!-- ================================
    START MENU AREA
================================= -->
    <!-- start menu-area -->
 <div class="menu-area">
        <!-- start .top-menu-area -->
     <div class="top-menu-area">
            <!-- start .container -->
            <div class="container">
                <!-- start .row -->
                <div class="row">
                    <!-- start .col-md-3 -->
                    <div class="col-lg-3 col-md-3 col-6 v_middle">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                               {{ config('app.name', 'Laravel') }}
                            </a>
                        </div>
                    </div>
                    <!-- end /.col-md-3 -->

                    <!-- start .col-md-5 -->
                    <div class="col-lg-8 offset-lg-1 col-md-9 col-6 v_middle">
                        <!-- start .author-area -->
                        <div class="author-area">
                         @guest
                            <a href="{{ route('login') }}" class="author-area__seller-btn inline">{{ __('Логин') }}</a>
@if (Route::has('register'))
 <a href="{{ route('register') }}" class="author-area__seller-btn inline">{{ __('Регистрация') }}</a>
  <div class="author__notification_area">

                                <ul>
                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                           <a href="https://www.facebook.com/saveus.by/" target="blank"> <img src="https://img.icons8.com/color/26/000000/facebook.png"> </a>
                                            <span class="notification_count noti">👍</span>
                                        </div>
 
                                      
                                    </li>

                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                         <a href="https://www.instagram.com/saveus.by/" target="blank">    <img src="https://img.icons8.com/color/26/000000/instagram-new.png"> </a>
                                            <span class="notification_count msg">👍</span>
                                        </div>

                                     
                                    </li>
                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                        <a href="https://vk.com/saveusby" target="blank">      <img src="https://img.icons8.com/color/26/000000/vk-com.png"> </a>
                                            <span class="notification_count purch">👍</span>
                                        </div>

                                      
                                    </li>
                                
                                      <li class="has_dropdown">
                                        <div class="icon_wrap">
                                             <a href="https://ok.ru/group/60101133795373" target="blank">     <img src="https://img.icons8.com/color/28/000000/odnoklassniki.png"> </a>
                                            <span class="notification_count noti">👍</span>
                                        </div>

                                       
                                    </li>
                                </ul>
                            </div>
                            <!--start .author__notification_area -->

                            <!--start .author-author__info-->
                         
                            <!--end /.author-author__info-->
                        </div>
                        <!-- end .author-area -->

                        <!-- author area restructured for mobile -->
                  
                        <!-- end /.mobile_content -->
                    </div>
                    <!-- end /.col-md-5 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end  -->
 @endif
                        @else
                            <div class="author__notification_area">
                                <ul>
                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                           <a href="https://www.facebook.com/saveus.by/" target="blank"> <img src="https://img.icons8.com/color/26/000000/facebook.png"> </a>
                                            <span class="notification_count noti">👍</span>
                                        </div>

                                       
                                    </li>

                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                         <a href="https://www.instagram.com/saveus.by/" target="blank">    <img src="https://img.icons8.com/color/26/000000/instagram-new.png"> </a>
                                            <span class="notification_count msg">👍</span>
                                        </div>

                                     
                                    </li>
                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                        <a href="https://vk.com/saveusby" target="blank">      <img src="https://img.icons8.com/color/26/000000/vk-com.png"> </a>
                                            <span class="notification_count purch">👍</span>
                                        </div>

                                      
                                    </li>
                                
                                      <li class="has_dropdown">
                                        <div class="icon_wrap">
                                            @if(Auth::user()->user_type=='volounteer')
                                            <a href="{{ route('pets.create') }}" class="author-area__seller-btn inline">Разместить подопечного</a>
                                             @else
                                             <a href="https://ok.ru/group/60101133795373" target="blank"> <span class="notification_count msg">👍</span><img src="https://img.icons8.com/color/28/000000/odnoklassniki.png"> </a>
                                             @endif
                                            
                                        </div>

                                       
                                    </li>
                                </ul>
                            </div>
                            <div class="author-author__info inline has_dropdown">

                                <div class="author__avatar"> 
                                 @if(Auth::user()->user_type=='volounteer')
                                 @if(empty(Auth::user()->company->logo))
                                  <img src="{{asset('avatar/avatar3.png')}}" alt="user avatar">
                                   @else
                                            <img src="{{asset('uploads/logo')}}/{{Auth::user()->company->logo}}" alt="Author profile area">
                                 @endif
                                 @else
                                     @if(empty(Auth::user()->profile->avatar))
                                    <img src="{{asset('avatar/avatar3.png')}}" alt="user avatar">
                                    @else
                                            <img src="{{asset('uploads/avatar')}}/{{Auth::user()->profile->avatar}}" alt="Author profile area">
                                            @endif
                                             @endif

                                </div>
                                <div class="autor__info">
                                    <p class="name">
                                        @if(Auth::user()->user_type=='volounteer')
                                        {{Auth::user()->company->name}}
                                        @else
                                        {{ Auth::user()->name }}
                                        @endif 
                                    </p>
                                  
                                </div>

                                <div class="dropdowns dropdown--author" >
                                    <ul>
                                         <li>  @if(Auth::user()->user_type=='volounteer')
                                             <a href="{{route('company.index',[Auth::user()->company->id,Auth::user()->company->slug])}}">
                                                 @else
                                            <a href="{{ route('profile.show') }}">
                                                @endif
                                                <span class="lnr lnr-user"></span>{{ __('Профиль') }}</a>
                                                
                                                
                                        </li>
                                        
                                        <li>@if(Auth::user()->user_type=='volounteer')
                                             <a href="{{ route('company.settings') }}">
                                            @else
                                            <a href="{{ route('user.profile') }}">
                                                @endif
                                                <span class="lnr lnr-cog"></span>{{ __('Настройки') }}</a>
                                                
                                                
                                        </li>
                                        @if(Auth::user()->user_type=='volounteer')
                                         <li>
                                             <a href="{{ route('mypets.show') }}">
                                    <span class="lnr lnr-cog"></span>{{ __('Мои подопечные') }}</a>
                                                
                                        </li>
                                        @else
                                         @endif
                                         <li>
                                            <a href="">
                                                <span class="lnr lnr-heart"></span>{{ __('Отслеживаемые') }}</a>
                                                
                                                
                                        </li>
                                       <li>
                                            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <span class="lnr lnr-exit"></span>{{ __('Выйти') }}</a>
                                                
                                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                        </li>
                                       
                                       
                                    </ul>
                                </div>
                            </div>
                            @endguest
                            <!--start .author__notification_area -->

                            <!--start .author-author__info-->
                         
                            <!--end /.author-author__info-->
                        </div>
                        <!-- end .author-area -->

                        <!-- author area restructured for mobile -->
                  
                        <!-- end /.mobile_content -->
                    </div>
                    <!-- end /.col-md-5 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end  -->

        <!-- start .mainmenu_area -->
        <div class="mainmenu">
            <!-- start .container -->
            <div class="container">
                <!-- start .row-->
                <div class="row">
                    <!-- start .col-md-12 -->
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <!-- start mainmenu__search -->
                           
                            <!-- start mainmenu__search -->
                        </div>

                        <nav class="navbar navbar-expand-md navbar-light mainmenu__menu">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="has_dropdown">
                                        <a href="{{ route('pets.main') }}">Главная</a>
                                      
                                    </li>
                        
                           <li class="has_dropdown">
                                        <a href="{{ route('pets.catalog') }}">Каталог</a>
                                      
                                    </li>
                               
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row-->
            </div>
            <!-- start .container -->
        </div>
        <!-- end /.mainmenu-->
    </div>

        <main class="py-4" >
            @yield('content')
        </main>
    </div>
       <footer class="footer-area">
        <div class="footer-big section--padding">
            <!-- start .container -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="info-footer">
                            <div class="info__logo">
                                <img src="assets/white.png" alt="footer logo">
                            </div>
                            <p class="info--text">Единая благотворительная платформа SaveUs.</p>
                            <ul class="info-contact">
                                
                                <li>
                                    <span class="lnr lnr-envelope info-icon"></span>
                                    <span class="info">info@saveus.by</span>
                                </li>
                              
                            </ul>
                        </div>
                        <!-- end /.info-footer -->
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-lg-5 col-md-6">
                        <div class="footer-menu">
                            <h4 class="footer-widget-title text--white">О нас</h4>
                            <ul>
                                <li>
                                    <a href="team.html">Присоединиться к нам!</a>
                                </li>
                                <li>
                                    <a href="index.html">Больше о платформе</a>
                                </li>
                                <li>
                                    <a href="blog.html">Наш блог</a>
                                </li>
                                <li>
                                    <a href="index.html">Главная</a>
                                </li>
                                <li>
                                    <a href="contact.html">Задать вопрос</a>
                                </li>
                              
                            </ul>
                        </div>
                        <!-- end /.footer-menu -->

                        <!-- end /.footer-menu -->
                    </div>
                    <!-- end /.col-md-5 -->

                    <div class="col-lg-4 col-md-12">
                        <div class="newsletter">
                            <h4 class="footer-widget-title text--white">Подписывайтесь на наши новости!</h4>
                            <p>Подписывайтесь и получайте последние новости о развитии нашей платформы. Мы не рассылаем спам!</p>
                            <div class="newsletter__form">
                                <form action="https://saveus.by/sendmail.php" method="POST">
                                    <div class="field-wrapper">
                                        <input class="relative-field rounded" type="email" placeholder="Ваш email" required="" name="your-email">
                                        <button class="btn btn--round" type="submit">Отправить</button>
                                    </div>
                                </form>
                            </div>

                            <!-- start .social -->
                            <div class="social social--color--filled">
                                <ul>
                                    <li>
                                        <a href="https://vk.com/saveusby" target="blank">   
                                           <img src="https://img.icons8.com/color/48/000000/vk-com.png">
                                        </a>
                                    </li>
                                    <li>
                                         <a href="https://www.instagram.com/saveus.by/" target="blank">  
                                            <img src="https://img.icons8.com/color/48/000000/instagram-new.png">
                                        </a>
                                    </li>
                                    <li>
                                       <a href="https://www.facebook.com/saveus.by/" target="blank">   
                                            <img src="https://img.icons8.com/color/48/000000/facebook.png">
                                        </a>
                                    </li>
                                    <li>
                                       <a href="https://ok.ru/group/60101133795373" target="blank">   
                                        <img src="https://img.icons8.com/color/48/000000/odnoklassniki.png">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                          
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                           
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.social -->
                        </div>
                        <!-- end /.newsletter -->
                    </div>
                    <!-- end /.col-md-4 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.footer-big -->

        <div class="mini-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-text">
                            <p>© 2019
                                <a href="#">SaveUs</a>. All rights reserved. 
                              
                            </p>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--================================
        END FOOTER AREA
    =================================-->

    <!--//////////////////// JS GOES HERE ////////////////-->

   
    <!-- inject:js -->
    
 <script src="{{ asset('js\plugins.min.js')}}"></script>
 <script src="{{ asset('js\cropper.min.js')}}"></script>
 <script src="{{asset('js\script.min.js')}}"></script>
 <script src="{{asset('js\axios.min.js')}}"></script> 
 <script src="{{asset('js\jquery-3.4.1.min.js')}}"></script> 
</body>
</html>
