@extends('layouts.app')

@section('content')
<section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                       
                    </div>
                    <h1 class="page-title">{{Auth::user()->name}}</h1>
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
                                <a href="{{ route('profile.show') }}">
                                    <span class="lnr lnr-home"></span>Профиль</a>
                            </li>
                            <li>
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
    <section class="author-profile-area">
    
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <aside class="sidebar sidebar_author">
                        <div class="author-card sidebar-card">
                            <div class="author-infos">
                                <div class="author_avatar">
                                    @if(empty(Auth::user()->profile->avatar))
                                            <img src="{{asset('avatar/avatar3.png')}}" alt="Author profile area">
                                            @else
                                            <img src="{{asset('uploads/avatar')}}/{{Auth::user()->profile->avatar}}" alt="Author profile area">
                                            @endif
                                </div>

                                <div class="author">
                                    <h4>{{Auth::user()->name}} <div class="sidebar-card freelance-status">
                                    <p>Участник платформы с: <br>{{Auth::user()->created_at}}</p>

                          
                        </div> </h4> 
                                   
                                </div>
                                <!-- end /.author -->

                            
                                <!-- end /.author-badges -->

                                <div class="social social--color--filled">
                                    <ul>
                                        <li>
                                            <a href="{{Auth::user()->profile->fblink}}" target="blank">
                                                <span class="fa fa-facebook"></span>
                                            </a>
                                        </li>
                                      
                                        <li>
                                            <a href="{{Auth::user()->profile->instlink}}" target="blank">
                                                <span class="fa fa-instagram"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.social -->

                               
                                <!-- end /.author-btn -->
                            </div>
                            <!-- end /.author-infos -->


                        </div>
                        <!-- end /.author-card -->

                    
                      

                  
                        <!-- end /.freelance-status -->
                    </aside>
                </div>
                <!-- end /.sidebar -->

                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="author-info mcolorbg4">
                                <p>Помог всего</p>
                                <h3>25</h3>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-4 col-sm-4">
                            <div class="author-info pcolorbg">
                                <p>Бонусов всего</p>
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
                                <h2>{{Auth::user()->name}}
                                </h2>

                                <p>{{Auth::user()->profile->bio}}</p>
                
                               
                             
                            </div>
                        </div>
                    </div>
                    <!-- end /.row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-title-area">
                                <div class="product__title">
                                    <h2>Понравившиеся подопечные</h2>
                                </div>

                                
                            </div>
                            <!-- end /.product-title-area -->
                        </div>
                   @foreach  (Auth::user()->favourites as $fav)
                   <div class="col-lg-6 col-md-6">
                            <!-- start .single-product -->
                             
                            <div class="product product--card">

                                <div class="product__thumbnail">
                                     @foreach ($fav->album as $albums)
                                @if ($loop->first)
                                <img src="{{asset('uploads/petimages')}}/{{$albums->image_url}}" alt="Pet Image">
                                @break
                                @endif
                                @endforeach
                                   
                                    <div class="prod_btn">
                                        <a href="{{route('pets.show',[$fav->id,$fav->slug])}}" class="transparent btn--sm btn--round">Помочь!</a>
                                   
                                    </div>
                                    <!-- end /.prod_btn -->
                                </div>
                                <!-- end /.product__thumbnail -->

                                <div class="product-desc">
                                    <a href="{{route('pets.show',[$fav->id,$fav->slug])}}" class="product_title">
                                        <h4>{{$fav->title}}</h4>
                                    </a>
                                  

                                    <p>{{$fav->subtitle}} </p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product-purchase">
                                    <div class="price_love">
                                       <a href="{{route('pets.show',[$fav->id,$fav->slug])}}">
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
                        @endforeach
                    <!-- end /.row -->
                </div>
                <!-- end /.col-md-8 -->

            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
@endsection
