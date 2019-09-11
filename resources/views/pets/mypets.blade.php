@extends('layouts.app')

@section('content')
 <!--======================
        START BREADCRUMB AREA
    ======================-->
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
                                <a href="#">Список подопечных</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Список подопечных</h1>
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
  <section class="dashboard-area">
          <div class="dashboard_menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="dashboard_menu">
                            <li >
                                <a href="author.html">
                                    <span class="lnr lnr-home"></span>Профиль</a>
                            </li>
                            <li >
                                <a href="dashboard-setting.html">
                                    <span class="lnr lnr-cog"></span>Настройки</a>
                            </li>
                            <li>
                                <a href="dashboard-statement.html">
                                    <span class="lnr lnr-cart"></span>Транзакции</a>
                            </li>
                        
                            <li class="active">
                                <a href="dashboard-manage-item.html">
                                    <span class="lnr lnr-dice"></span>Прошлые подопечные</a>
                            </li>
                             <li>
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
                        <div class="filter-bar dashboard_title_area clearfix filter-bar2">
                            <div class="dashboard__title dashboard__title pull-left">
                                <h3>Редактировать карточки подопечных</h3>
                            </div>

                            <div class="pull-right">
                                <div class="filter__option filter--text">
                                    <p>
                                        <span>6</span> подопечных</p>
                                </div>

                                <div class="filter__option filter--select">
                                    <div class="select-wrap">
                                        <select name="price">
                                            <option value="low">Дата : по убыванию</option>
                                            <option value="high">Дата : по возрастанию</option>
                                        </select>
                                        <span class="lnr lnr-chevron-down"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- end /.pull-right -->
                        </div>
                        <!-- end /.filter-bar -->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <div class="row">
                    <!-- start .col-md-4 -->
                    @foreach($pets as $pets)
                    <div class="col-lg-4 col-md-6">
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
                                    @if ($pets->status == 1)
                                        <a href="{{route('pets.edit',[$pets->id])}}" class="transparent btn--sm btn--round">Редактировать</a>

                                        <a href="single-product.html" class="transparent btn--sm btn--round">Архивировать</a>
                                        @else
                                        <a href="{{route('pets.show',[$pets->id,$pets->slug])}}" class="transparent btn--sm btn--round">Просмотреть</a>
                                        @endif
                                    </div>
                            </div>
                            <!-- end /.product__thumbnail -->

                            <div class="product-desc">
                                <a href="{{route('pets.show',[$pets->id,$pets->slug])}}" class="product_title">
                                    <h4>{{$pets->title}}</h4>
                                </a>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="{{asset('uploads/logo')}}/{{$pets->company->logo}}" alt="author image">
                                        <p>
                                            <a href="{{route('company.index',[$pets->company->id,$pets->company->slug])}}">{{$pets->company->name}}</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        <a href="#">
                                            <span class="lnr lnr-book"></span>передержка</a>
                                    </li>
                                </ul>

                                <p>{{$pets->subtitle}}</p>
                            </div>
                            <!-- end /.product-desc -->

                           <div class="product-purchase">
                            @if ($pets->status == 1)
                                    <div class="price_love">
                                       <a href="{{route('pets.edit',[$pets->id])}}">
                                       <button class="btn btn--icon btn-sm btn--round btn-info">
                                <span class="lnr lnr-cog"></span>Обновить</button>
                                     @else
                                     <div class="price_love">
                                       <a href="{{route('pets.show',[$pets->id,$pets->slug])}}">
                                       <button class="btn btn--icon btn-sm btn--round btn-info">
                                <span class="lnr lnr-cog"></span>Посмотреть</button>
                                    @endif
                            </a>
                                        <p>
                                            
                                    </div>
                                   
                                  
                                </div>
                            <!-- end /.product-purchase -->
                        </div>
                        <!-- end /.single-product -->
                    </div>
                    <!-- end /.col-md-4 -->

                    <!-- start .col-md-4 -->
                   @endforeach
                    <!-- end /.col-md-4 -->
                </div>

           
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
@endsection
