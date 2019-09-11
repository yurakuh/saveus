@extends('layouts.app')

@section('content')
<section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                       
                    </div>
                    <h1 class="page-title">{{$company->name}}</h1>
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
        START AUTHOR AREA
    ======================-->
    
    <div class="dashboard_menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                         <ul class="dashboard_menu">
                            <li class="active">
                                <a href="author.html">
                                    <span class="lnr lnr-home"></span>Профиль</a>
                            </li>
                            <li >
                                <a href="dashboard-setting.html" >
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
    <section class="author-profile-area">
    
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <aside class="sidebar sidebar_author">
                        <div class="author-card sidebar-card">
                            <div class="author-infos">
                                <div class="author_avatar">
                                    @if(empty($company->logo))
                                    <img src="{{asset('avatar/avatar3.png')}}" alt="Presenting the broken author avatar :D">
                                   @else
                                   <img src="{{asset('uploads/logo')}}/{{$company->logo}}" alt="Presenting the broken author avatar :D">
                                   @endif
                                </div>

                                <div class="author">
                                    <h4>{{$company->name}} <div class="sidebar-card freelance-status">
                            <div class="custom-radio">
                                <input type="radio" id="opt1" class="" name="filter_opt" checked="">
                                <label for="opt1">
                                   @if ($company->verify== 1)  <span class="circle"></span>Подтвержденный профиль!</label> 
                                   @else 
                                   Пользователь еще не прошел верификацию</label> 
                                   @endif
                            </div>
                        </div> </h4> 
                                    <p>Участник сообщества с: <br>{{$company->created_at}}</p>
                                </div>
                                <!-- end /.author -->

                            
                                <!-- end /.author-badges -->

                                <div class="social social--color--filled">
                                    <ul>
                                        <li>
                                            <a href="{{$company->fblink}}">
                                                <span class="fa fa-facebook"></span>
                                            </a>
                                        </li>
                                      
                                        <li>
                                            <a href="{{$company->instlink}}">
                                                <span class="fa fa-instagram"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.social -->

                                <div class="author-btn">
                                    <a href="credit_card.html" class="btn btn--md btn--round">Поблагодарить!</a>
                                </div>
                                <!-- end /.author-btn -->
                            </div>
                            <!-- end /.author-infos -->


                        </div>
                        <!-- end /.author-card -->

                        <div class="sidebar-card author-menu">
                            <ul>
                                <li>
                                    <a href="#" class="active">Профиль</a>
                                </li>
                                <li>
                                    <a href="dashboard-manage-item.html">Подопечные</a>
                                </li>
                                <li>
                                    <a href="author-reviews.html">Отзывы и благодарности</a>
                                </li>
                                  <li>
                                    <a href="dashboard-statement.html">Фин. отчет</a>
                                </li>
                              
                            </ul>
                        </div>
                        <!-- end /.author-menu -->

                        <!-- end /.author-card -->

                  
                        <!-- end /.freelance-status -->
                    </aside>
                </div>
                <!-- end /.sidebar -->

                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="author-info mcolorbg4">
                                <p>Подопечных всего</p>
                                <h3>25</h3>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-4 col-sm-4">
                            <div class="author-info pcolorbg">
                                <p>Актуальных подопечных</p>
                                <h3>2</h3>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-4 col-sm-4">
                            <div class="author-info scolorbg">
                                <p>Общий рейтинг</p>
                                <div class="rating product--rating">
                                    <ul>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-half-o"></span>
                                        </li>
                                    </ul>
                                    <span class="rating__count">(26)</span>
                                </div>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-12 col-sm-12">
                           

                            <div class="author_module about_author">


                                <h2>@if ($company->organisation== null)
                                    О себе: {{$company->name}}
                                    @else 
                                    Организация: {{$company->name}}
                                    @endif
                                </h2>
                                @if(empty($company->bio))
                                <p>Пользователь еще ничего не рассказал о себе.</p>
                                @else
                                <p>{{$company->bio}}</p>
                             
                                 @endif                               
                            </div>
                        </div>
                    </div>
                    <!-- end /.row -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-title-area">
                                <div class="product__title">
                                    <h2>Актуальные подопечные</h2>
                                </div>

                                <a href="dashboard-manage-item.html" class="btn btn--sm">Посмотреть всех</a>
                            </div>
                            <!-- end /.product-title-area -->
                        </div>
                        <!-- end /.col-md-12 -->
                        @foreach($company->pets as $pets)
                        @if ($pets->status == 1)
                        <!-- start .col-md-4 -->
                        <div class="col-lg-6 col-md-6">
                            <!-- start .single-product -->
                            <div class="product product--card">

                                <div class="product__thumbnail">
                                     @foreach ($pets->album as $albums)
                                @if ($loop->first)
                                <img src="{{asset('uploads/petimages')}}/{{$albums->image_url}}" alt="Pet Image">
                                @break
                                @endif
                                @endforeach
                                   
                                    <div class="prod_btn">
                                        <a href="{{route('pets.show',[$pets->id,$pets->slug])}}" class="transparent btn--sm btn--round">Помочь!</a>
                                   
                                    </div>
                                    <!-- end /.prod_btn -->
                                </div>
                                <!-- end /.product__thumbnail -->

                                <div class="product-desc">
                                    <a href="{{route('pets.show',[$pets->id,$pets->slug])}}" class="product_title">
                                        <h4>{{$pets->title}}</h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            @if(empty($company->logo))
                                    <img class="auth-img" src="{{asset('avatar/avatar3.png')}}" alt="Presenting the broken author avatar :D">
                                   @else
                                   <img class="auth-img" src="{{asset('uploads/logo')}}/{{$company->logo}}" alt="Presenting the broken author avatar :D">
                                   @endif
                                            <p>
                                                <a href="{{route('company.index',[$pets->company->id,$pets->company->slug])}}">{{$company->name}}</a>
                                            </p>
                                        </li>

                                    </ul>

                                    <p>{{$pets->subtitle}} </p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product-purchase">
                                    <div class="price_love">
                                       <a href="{{route('pets.show',[$pets->id,$pets->slug])}}">
                                       <button class="btn btn--icon btn-sm btn--round btn-info">
                                <span class="lnr lnr-thumbs-up"></span>Помочь</button>
                            </a>
                                        <p>
                                            <span class="lnr lnr-heart"></span> 48</p>
                                    </div>

                                    <div class="rating product--rating">
                                        <ul>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star-half-o"></span>
                                            </li>
                                        </ul>
                                    </div>

                                  
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                            <!-- end /.single-product -->
                        </div>
                        <!-- end /.col-md-4 -->
                         @endif
                        @endforeach
                       
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.col-md-8 -->

            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
@endsection
