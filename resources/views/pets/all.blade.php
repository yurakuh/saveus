@extends('layouts.app')

@section('content')
<section class="search-wrapper">
        <div class="search-area2 bgimage">
            <div class="bg_image_holder">
                <img src="images/catalog_fon.png" alt="">
            </div>
            <div class="container content_above">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="search">
                            <div class="search__title">
                                <h3>
                                    <span>568 </span>волонтерских животных уже ждут вашей помощи</h3>
                            </div>
                            <div class="search__field">
                                <form action="#">
                                    <div class="field-wrapper">
                                        <input class="relative-field rounded" type="text" placeholder="Поиск по подопечным">
                                        <button class="btn btn--round" type="submit">Помочь</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12">
                <div class="counter-up">
                    <div class="counter mcolor2">
                       <img src="images\buy1.png" alt="Buy icon">
                       <br>
                        <span class="count">2,124</span>
                        <p>Животных уже нашли дом</p>
                    </div>
                    <div class="counter mcolor3">
                         <img src="images/give.png" alt="Sell icon">
                         <br>
                        <span class="count">138,436</span>
                        <p>BYN Собрано на 02.06.2019</p>
                    </div>
                    <div class="counter mcolor1">
                         <img src="images/home.png" alt="Sell icon">
                          <br>
                        <span class="count">3,436</span>
                        <p>Подопечных ищут дом прямо сейчас</p>
                    </div>
                    <div class="counter mcolor4">
                       <img src="images\sell.png" alt="Sell icon">
                       <br>
                        <span class="count">1,142</span>
                        <p>Зарегистрированных волонтеров</p>
                    </div>
                </div>
            </div>
                            <div class="breadcrumb">
                                <ul>
                                    <li>
                                        <a href="#">Главная</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">Каталог животных</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.search-area2 -->
    </section>
     <div class="filter-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-bar filter--bar2">
                        <div class="filter__option filter--text pull-left">
                            <a href="#">SOS ситуации</a>
                            <a href="#">Животные Гурского 42</a>
                        </div>
                        <div class="pull-right">
                            <div class="filter__option filter--select">
                                <div class="select-wrap">
                                    <select name="price">
                                        <option value="low">Дата : По убыванию</option>
                                        <option value="high">Дата : По возрастанию</option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>
                            </div>
                            <div class="filter__option filter--select">
                                <div class="select-wrap">
                                    <select name="price">
                                        <option value="12">6 животных</option>
                                        <option value="15">12 животных</option>
                                        <option value="25">24 животных </option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>
                            </div>
                            <div class="filter__option filter--layout">
                                <a href="category-grid.html">
                                    <div class="svg-icon">
                                        <img class="svg" src="images\svg\grid.svg" alt="it's just a layout control folks!">
                                    </div>
                                </a>
                                <a href="category-list.html">
                                    <div class="svg-icon">
                                        <img class="svg" src="images\svg\list.svg" alt="it's just a layout control folks!">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end filter-bar -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end filter-bar -->
        </div>
    </div>
       <section class="products section--padding2">
        <!-- start container -->
        <div class="container">

            <!-- start .row -->
            <div class="row">
                <!-- start .col-md-3 -->
                <div class="col-lg-3">
                    <!-- start aside -->
                    <form method="GET" action="">
                    <aside class="sidebar product--sidebar">
                        <div class="sidebar-card card--category">
                            <a class="card-title" href="#collapse1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                <h4>Категории
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>
                            <div class="collapse show collapsible-content" id="collapse1">
                                <ul class="card-content">
                                    @foreach(App\Category::all() as $cat)
                                    <li>
                                        <a href="#">
                                            <span class="lnr lnr-chevron-right"></span>{{$cat->name}}
                                            <span class="item-count">35</span>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- end /.collapsible_content -->
                        </div>
                        
                        
                        <!-- end /.sidebar-card -->

                        <div class="sidebar-card card--filter">
                            <a class="card-title" href="#collapse2" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse2">
                                <h4>Фильтры
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>
                            <div class="collapse show collapsible-content" id="collapse2">
                                <ul class="card-content">
                                    <li>
                                        <div class="custom-checkbox2">
                                            <input type="checkbox" id="opt1" class="" name="filter_opt">
                                            <label for="opt1">
                                                <span class="circle"></span>Cтаричок</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox2">
                                            <input type="checkbox" id="opt2" class="" name="filter_opt">
                                            <label for="opt2">
                                                <span class="circle"></span>Инвалид</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox2">
                                            <input type="checkbox" id="opt3" class="" name="filter_opt">
                                            <label for="opt3">
                                                <span class="circle"></span>Ищет дом</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox2">
                                            <input type="checkbox" id="opt3" class="" name="filter_opt">
                                            <label for="opt3">
                                                <span class="circle"></span>Автопомощь</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox2">
                                            <input type="checkbox" id="opt3" class="" name="filter_opt">
                                            <label for="opt3">
                                                <span class="circle"></span>Пиар</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox2">
                                            <input type="checkbox" id="opt3" class="" name="filter_opt">
                                            <label for="opt3">
                                                <span class="circle"></span>Фотопомощь</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox2">
                                            <input type="checkbox" id="opt4" class="" name="filter_opt">
                                            <label for="opt4">
                                                <span class="circle"></span>Передержка</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox2">
                                            <input type="checkbox" id="opt5" class="" name="filter_opt">
                                            <label for="opt5">
                                                <span class="circle"></span>Куратор</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox2">
                                            <input type="checkbox" id="opt6" class="" name="filter_opt">
                                            <label for="opt6">
                                                <span class="circle"></span>Нужен донор</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox2">
                                            <input type="checkbox" id="opt7" class="" name="filter_opt">
                                            <label for="opt7">
                                                <span class="circle"></span>Гурского 42</label>
                                        </div>
                                    </li>
                                       <li>
                                        <div class="custom-checkbox2">
                                            <input type="checkbox" id="opt8" class="" name="filter_opt">
                                            <label for="opt8">
                                                <span class="circle"></span>Найден</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end /.sidebar-card -->
                        
                         <div class="sidebar-card card--slider">
                            <a class="card-title" href="#collapse4" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse3">
                                <h4>Город
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>
                            <div class="collapse show collapsible-content" id="collapse4">
                               <div class="input-group">
                                                    <span class="input-group-addon">Начните вводить регион</span>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <input type="text" id="rlicense" class="text_field" placeholder="Например, Минск">
                                                </div>
                                                
                                               
                                                 <button class="btn btn-lg btn--round" type="submit">Найти</button>
                                                 <br>
                                                  <br>
                                              </form>
                                
                            </div>
                        </div>



                    </aside>
                    <!-- end aside -->
                </div>
                <!-- end /.col-md-3 -->

                <!-- start col-md-9 -->
                <div class="col-lg-9">
                    <!-- start .single-product -->
                    @foreach($pets as $pet)
                    
                    <div class="product product--list product--list-small">

                        <div class="product__thumbnail">
                            
                             @foreach ($pet->album as $albums)
                                @if ($albums->image_url_resized != null) 
                                <img src="{{asset('uploads/petimages')}}/{{$albums->image_url_resized}}" alt="Pet Image">
                                @break
                                @endif
                                @endforeach
                            <div class="prod_btn">
                              
                                <a href="{{route('pets.show',[$pet->id,$pet->slug])}}" class="transparent btn--sm btn--round">Помочь</a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product__details">
                            <div class="product-desc">
                                 <a href="{{route('pets.show',[$pet->id,$pet->slug])}}" class="product_title">
                                    <h4>{{$pet->title}}</h4>
                                </a>
                               <p>{{$pet->subtitle}} </p>
                                
                               
                               
                                <ul class="titlebtm">
                                     @if ($pet->inv=== 1)
                                <li>Инвалид</li>
                                 @endif
                                 @if ($pet->old=== 1)
                                <li>Старичок</li>
                                 @endif
                                  @if ($pet->hands=== 1)
                                <li>Ищет дом</li>
                                 @endif
                                 @if ($pet->auto=== 1)
                                <li>Автопомощь</li>
                                 @endif
                                 @if ($pet->piar=== 1)
                                <li>Пиар</li>
                                 @endif
                                    @if ($pet->photo=== 1)
                                <li>Фотопомощь</li>
                                 @endif
                                 @if ($pet->kurator=== 1)
                                <li>Куратор</li>
                                 @endif
                                  @if ($pet->donor=== 1)
                                <li>Донор</li>
                                 @endif
                                  @if ($pet->gurskogo=== 1)
                                <li>Гурского</li>
                                 @endif
                                 @if ($pet->naiden=== 1)
                                <li> Найден</li>
                                 @endif
                                </ul>
                            
                                
                                <!-- end /.titlebtm -->
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-meta">
                                <div class="author">
                                    
                                    @if(empty($pet->company->logo))
                                    <img class="auth-img" src="{{asset('avatar/avatar3.png')}}" alt="Presenting the broken author avatar :D">
                                   @else
                                   <img class="auth-img" src="{{asset('uploads/logo')}}/{{$pet->company->logo}}" alt="Presenting the broken author avatar :D">
                                   @endif
                                    <p>
                                        <a href="{{route('company.index',[$pet->company->id,$pet->company->slug])}}">{{$pet->company->name}}</a>
                                    </p>
                                </div>
                                <!-- end /.author -->

                                <div class="love-Отзывов">
                                    <p>
                                        <span class="lnr lnr-heart"></span> 90 нравится</p>
                                    <p>
                                        <span class="lnr lnr-bubble"></span> 90 Отзывов</p>
                                </div>
                                <!-- end /.love-Отзывов -->

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
                                    <span class="rating__count">(34)</span>
                                </div>
                                <!-- end /.rating -->
                            </div>
                            <!-- end /.product-meta -->
                           
                           
                        
                                <div class="product-purchase">
                         <a href="{{route('pets.show',[$pet->id,$pet->slug])}}">    <button class="btn btn--icon btn-sm btn--round btn-info">
                                <span class="lnr lnr-thumbs-up"></span>Помочь</button></a>
                                <br>
                                <br>
                                @if ($pet->company->verify=== 1)
                                <div class="price_love">
                                    <span>BYN {{$pet->amount}}</span>
                                </div>
                                
                               
                                @endif
                                <div class="sell">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <span>16</span>
                                    </p>
                                </div>
                            </div>
                             
                            <!-- end /.product-purchase -->
                        </div>
                    </div>
                    <!-- end /.single-product -->
                    @endforeach
                  

                   

                  
                {{$pets->links()}}
                              
                </div>
                <!-- end /.col-md-9 -->
            </div>
            <!-- end /.row -->

            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END PRODUCTS AREA
    =================================-->

    <!--================================
        START SEARCH AREA
    =================================-->
    <section class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </section>
    <!--================================
       END SEARCH AREA
    =================================-->


    <!--================================
        START CALL TO ACTION AREA
    =================================-->
<section class="more_product_area section--padding">
    <div class="container">
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="section-title">
                    <h1>В вашей помощи нуждаются!

                    </h1>
                </div>
            </div>
            <!-- end /.col-md-12 -->

            <!-- start .col-md-4 -->
            <div class="col-lg-4 col-md-6">
                <!-- start .single-product -->
                <div class="product product--card">

                    <div class="product__thumbnail">
                        <img src="images/fluk.jpg" alt="Product Image">
                        <div class="prod_btn">
                            <a href="{{route('pets.show',[$pet->id,$pet->slug])}}" class="transparent btn--sm btn--round">Больше </a>
                            <a href="{{route('pets.show',[$pet->id,$pet->slug])}}" class="transparent btn--sm btn--round">Помочь</a>
                        </div>
                        <!-- end /.prod_btn -->
                    </div>
                    <!-- end /.product__thumbnail -->

                    <div class="product-desc">
                        <a href="#" class="product_title">
                            <h4>Флюк</h4>
                        </a>
                        <ul class="titlebtm">
                            <li>
                                <img class="auth-img" src="images/fluk.jpg" alt="author image">
                                <p>
                                    <a href="#">Катя</a>
                                </p>

                        </li></ul>

                        <p>Обаятельная кошечка нуждается в лечении.</p>
                    </div>
                    <!-- end /.product-desc -->

                    <div class="product-purchase">
                        <div class="price_love">
                            <span>BYN 10</span>
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

                        <div class="sell">
                            <p>
                                <span class="lnr lnr-cart"></span>
                                <span>50</span>
                            </p>
                        </div>
                    </div>
                    <!-- end /.product-purchase -->
                </div>
                <!-- end /.single-product -->
            </div>
            <!-- end /.col-md-4 -->

            <!-- start .col-md-4 -->
            <div class="col-lg-4 col-md-6">
                <!-- start .single-product -->
                <div class="product product--card">

                    <div class="product__thumbnail">
                        <img src="images/lilu.jpg" alt="Product Image">
                        <div class="prod_btn">
                            <a href="{{route('pets.show',[$pet->id,$pet->slug])}}" class="transparent btn--sm btn--round">Больше</a>
                            <a href="{{route('pets.show',[$pet->id,$pet->slug])}}" class="transparent btn--sm btn--round">Помочь</a>
                        </div>
                        <!-- end /.prod_btn -->
                    </div>
                    <!-- end /.product__thumbnail -->

                    <div class="product-desc">
                        <a href="#" class="product_title">
                            <h4>Лилу</h4>
                        </a>
                        <ul class="titlebtm">
                            <li>
                                <img class="auth-img" src="images\auth2.jpeg" alt="author image">
                                <p>
                                    <a href="#">Валерия</a>
                                </p>
                            </li>

                        </ul>

                        <p>Лилу нуждается в вашей помощи для борьбы с пироплазмозом. Очень срочно!</p>
                    </div>
                    <!-- end /.product-desc -->

                    <div class="product-purchase">
                        <div class="price_love">
                            <span>BYN 10</span>
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

                        <div class="sell">
                            <p>
                                <span class="lnr lnr-cart"></span>
                                <span>50</span>
                            </p>
                        </div>
                    </div>
                    <!-- end /.product-purchase -->
                </div>
                <!-- end /.single-product -->
            </div>
            <!-- end /.col-md-4 -->

            <!-- start .col-md-4 -->
            <div class="col-lg-4 col-md-6">
                <!-- start .single-product -->
                <div class="product product--card">

                    <div class="product__thumbnail">
                        <img src="images/gerd.jpg" alt="Product Image">
                        <div class="prod_btn">
                            <a href="{{route('pets.show',[$pet->id,$pet->slug])}}" class="transparent btn--sm btn--round">Больше</a>
                            <a href="{{route('pets.show',[$pet->id,$pet->slug])}}" class="transparent btn--sm btn--round">Помочь</a>
                        </div>
                        <!-- end /.prod_btn -->
                    </div>
                    <!-- end /.product__thumbnail -->

                    <div class="product-desc">
                        <a href="#" class="product_title">
                            <h4>Герд</h4>
                        </a>
                        <ul class="titlebtm">
                            <li>
                                <img class="auth-img" src="images\auth.jpeg" alt="author image">
                                <p>
                                    <a href="#">Антон</a>
                                </p>
                            </li>

                        </ul>

                        <p>Верный Герд ищет новый дом. Готов жить в вольере.</p>
                    </div>
                    <!-- end /.product-desc -->

                    <div class="product-purchase">

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

        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.container -->
</section>
@endsection
