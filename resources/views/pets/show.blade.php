
@extends('layouts.app')

@section('content')
<section class="breadcrumb-area">
    <div class="container" >
        <div class="row">
            <div class="col-md-12">
              
                <h1 class="page-title">{{$pets->title}}</h1>
               
            </div>
        </div>
    </div>
</section>

<section class="single-product-desc">

    <div class="container" >
        <div class="row">
            <div class="col-lg-8">
                @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                        @endif
                <div class="item-preview">
                    <div class="item__preview-slider">
                        @foreach ($pets->album as $albums)
                         @if ($albums->image_url != null)
                        <div class="prev-slide">
                             
                                <img src="{{asset('uploads/petimages')}}/{{$albums->image_url}}" alt="Pet Image">
                         
                        </div>
                        @endif
                         @endforeach
                       
                    </div>

                    <div class="item__preview-thumb">
                        <div class="prev-thumb">
                            <div class="thumb-slider">
                                @foreach ($pets->album as $albums) 
                               
                            @if ($albums->image_url != null)
                                <div class="item-thumb">
                                    <img src="{{asset('uploads/petimages')}}/{{$albums->image_url}}"
                                         alt="This is the thumbnail of the item">
                                </div>
                                @endif
                                 @endforeach
                            
                            </div>

                            <div class="prev-nav thumb-nav">
                                <span class="lnr nav-left lnr-arrow-left"></span>
                                <span class="lnr nav-right lnr-arrow-right"></span>
                            </div>
                        </div>

                        <div class="item-action" >
                            <div class="action-btns" id="app">
                                @if(Auth::check())
                                @if(!$pets->checkAdoption())
                                 
                                
                                <adopt-component :petsid={{$pets->id}}></adopt-component>

                                <br>
                                @endif
                                <favourite-component :petsid={{$pets->id}} :favoutiteid={{$pets->checkSaved()?'true':'false'}}></favourite-component>
                                @else
                                <br>
                                 <a href="{{route('register')}}" class="btn btn--round btn--lg">Стать хозяином</a>
                                  <a href="{{route('register')}}" class="btn btn--round btn--lg"><span class="lnr lnr-heart"></span> Отслеживать</a>
                                    
                                 @endif
                              
                            </div>
                        </div>
                        <!-- end /.item__action -->
                    </div>
                    <!-- end /.item__preview-thumb-->


                </div>
                <!-- end /.item-preview-->

                <div class="item-info">
                    <div class="item-navigation">
                        <ul class="nav nav-tabs">
                            <li>
                                <a href="#product-details" class="active" aria-controls="product-details" role="tab"
                                   data-toggle="tab">Описание</a>
                            </li>
                            <li>
                                <a href="#product-comment" aria-controls="product-comment" role="tab" data-toggle="tab">Фин.
                                    Отчет </a>
                            </li>
                            <li>
                                <a href="#product-review" aria-controls="product-review" role="tab" data-toggle="tab">Поддержали
                                    <span>(35)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#product-support" aria-controls="product-support" role="tab" data-toggle="tab">История</a>
                            </li>

                        </ul>
                    </div>
                    <!-- end /.item-navigation -->

                    <div class="tab-content">
                        <div class="fade show tab-pane product-tab active" id="product-details">
                            <div class="tab-content-wrapper">
                                <h1>{{$pets->title}}</h1>
                                <p>{{$pets->description}}</p>


                            </div>
                            
                        </div>
                        <!-- end /.tab-content -->

                        <div class="fade tab-pane product-tab" id="product-comment">
                            <div class="thread">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="withdraw_module withdraw_history">
                                            <div class="withdraw_table_header">
                                                <h3>История поступлений</h3>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table withdraw__table">
                                                    <thead>
                                                    <tr>
                                                        <th>Дата</th>
                                                        <th>Комментарий</th>
                                                        <th>Сумма</th>
                                                        <th>Статус</th>
                                                    </tr>
                                                    </thead>

                                                    <tbody>
                                                    <tr>
                                                        <td>09 Июль 2019</td>
                                                        <td>На корм</td>
                                                        <td class="bold">BYN 56.50</td>
                                                        <td class="pending">
                                                         <a href="#" data-target="#myModal1" data-toggle="modal">Чек</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>19 Июль 2019</td>
                                                        <td>Пусть все сложится</td>
                                                        <td class="bold">BYN 130.50</td>
                                                        <td class="paid">
                                                            <span>Приход</span>
                                                        </td>
                                                    </tr>
                                                    </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pagination-area pagination-area2">
                                    <nav class="navigation pagination" role="navigation">
                                        <div class="nav-links">
                                            <a class="page-numbers current" href="#">1</a>
                                            <a class="page-numbers" href="#">2</a>
                                            <a class="page-numbers" href="#">3</a>
                                            <a class="next page-numbers" href="#">
                                                <span class="lnr lnr-arrow-right"></span>
                                            </a>
                                        </div>
                                    </nav>
                                </div>

                                <div class="comment-form-area">
                                    <h4>Написать комментарий</h4>
                                    <div class="media comment-form">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="images\m7.png" alt="Commentator Avatar">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <form action="#" class="comment-reply-form">
                                                <textarea name="reply-comment" placeholder=""></textarea>
                                                <button class="btn btn--sm btn--round">Отправить комментарий</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="fade tab-pane product-tab" id="product-review">
                            <div class="thread thread_review">
                                <ul class="media-list thread-list">
                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images\m1.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="clearfix">
                                                    <div class="pull-left">
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4>Themexylum</h4>
                                                            </a>
                                                            <span>90 BYN</span>
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
                                                        <span class="review_tag">Спонсор</span>
                                                    </div>
                                                    <a href="#" class="reply-link">Ответить</a>
                                                </div>
                                                <p>Надеюсь, Найда найдет дом который он заслуживает.

                                                </p>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li class="single-thread depth-2">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object"
                                                                 src="images/anas.jpg"
                                                                 alt="Commentator Avatar">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="media-heading">
                                                            <h4>{{$pets->company->name}}</h4>
                                                            <span>6 часов назад</span>
                                                        </div>
                                                        <span class="comment-tag author">Куратор</span>
                                                        <p>Большое спасибо за вашу помощь и теплые слова! Мы тоже очень
                                                            на это надеемся. </p>
                                                    </div>
                                                </div>

                                            </li>

                                        </ul>
                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images\m2.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea class="bla" name="reply-comment"
                                                              placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--md btn--round">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="pagination-area pagination-area2">
                                    <nav class="navigation pagination " role="navigation">
                                        <div class="nav-links">
                                            <a class="page-numbers current" href="#">1</a>
                                            <a class="page-numbers" href="#">2</a>
                                            <a class="page-numbers" href="#">3</a>
                                            <a class="next page-numbers" href="#">
                                                <span class="lnr lnr-arrow-right"></span>
                                            </a>
                                        </div>
                                    </nav>
                                </div>
                                <!-- end /.comment pagination area -->
                            </div>
                            <!-- end /.comments -->
                        </div>
                        <!-- end /.product-comment -->

                        <div class="fade tab-pane product-tab" id="product-support">


                            <div class="information_module">
                                <a class="toggle_title collapsed" href="#collapse3" role="button" data-toggle="collapse"
                                   aria-expanded="false" aria-controls="collapse1">
                                    <h4>Найда на передержке и в поиске нового дома
                                        <span class="lnr lnr-chevron-down"></span>
                                    </h4>
                                </a>

                                <div class="information__set profile_images toggle_module collapse" id="collapse3"
                                     style="">
                                    <div class="information_wrapper">

                                        <div class="prof_img_upload">
                                            <p class="bold">Пролечили лапку, Найда чувствует себя хорошо, но корм и оплата передержки заканчиваются.</p>
                                            <img src="images/naida2.jpg"
                                                 alt="The great warrior of China">

                                            <div class="upload_title">

                                                <label for="dp" class="upload_btn">
                                                    <input type="file" id="dp">
                                                    <span class="btn btn--sm btn--round"
                                                          aria-hidden="true">Дополнить</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="information_module">
                                <a class="toggle_title collapsed" href="#collapse5" role="button" data-toggle="collapse"
                                   aria-expanded="false" aria-controls="collapse1">
                                    <h4>Забрали с отморожением лапы
                                        <span class="lnr lnr-chevron-down"></span>
                                    </h4>
                                </a>

                                <div class="information__set profile_images toggle_module collapse" id="collapse5"
                                     style="">
                                    <div class="information_wrapper">

                                        <div class="prof_img_upload">
                                            <p class="bold">Нуждается в лечении лапки, передержке и провианте. Мы сняли
                                                Найду с цепи в деревне. Там собака буквально умирала. Сейчас на
                                                временной пердержке Найда расцвела, просто посмотрите на эти фотографии.
                                                Однако ей все еще нужны средства на длительную реабилитацию.</p>
                                            <img src="https://pp.userapi.com/c851136/v851136853/626e/58ggDMCS_EM.jpg"
                                                 alt="The great warrior of China">

                                            <div class="upload_title">

                                                <label for="dp" class="upload_btn">
                                                    <input type="file" id="dp">
                                                    <span class="btn btn--sm btn--round"
                                                          aria-hidden="true">Дополнить</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end /.product-support -->

                       
                    </div>
                    <!-- end /.tab-content -->
                </div>
                <!-- end /.item-info -->
            </div>
            <!-- end /.col-md-8 -->

            <div class="col-lg-4">
                <aside class="sidebar sidebar--single-product">
                    <div class="sidebar-card card-pricing">


                        <!-- end /.pricing-options -->

                        <section class="m-aside-item">
                            <div id="donation" class="o-donations">
                                <div class="o-donations__info">
                                    <section class="m-payment-info">
                                        <div class="m-payment-info__collected-sum">
                                            360 <span class="m-payment-info__collected-sum-currency">BYN</span></div>
                                        <div class="m-payment-info__progress">
                                            <div class="m-payment-info__progress-data">
                                                <div class="m-payment-info__progress-data-sum">
                                                    собрано из {{$pets->amount}} BYN
                                                </div>
                                                <div class="m-payment-info__progress-data-payments">
                                                    17
                                                    платежей
                                                </div>
                                            </div>
                                            <section class="a-progress m-payment-info__progress-line">
                                                <div role="progressbar" aria-valuenow="10" class="a-progress__bar"
                                                     style="width:90%;"></div>
                                            </section>
                                        </div>
                                    </section>
                                </div>
                                <div class="o-donations__form">
                                    <form id="pay_form">
                                        <div class="o-donations__form-row"><h3
                                                class="a-title a-title--size-x-small a-title--ff-default a-title--color-inherit">
                                            Поддержать кампанию
                                        </h3></div>
                                        <div class="o-donations__form-row">
                                            <div class="o-donations__choice">
                                                <div class="o-donations__choice-top"><label
                                                        class="a-radio-pay o-donations__choice-radio"><input name="sum"
                                                                                                             type="radio"
                                                                                                             checked="checked"
                                                                                                             value="5"
                                                                                                             class="a-radio-pay__input">
                                                    <span class="a-radio-pay__name"><span
                                                            class="a-radio-pay__name-text">
      5 <span class="a-radio-pay__name-currency">BYN</span></span></span></label><label
                                                        class="a-radio-pay o-donations__choice-radio"><input name="sum"
                                                                                                             type="radio"
                                                                                                             value="10"
                                                                                                             class="a-radio-pay__input">
                                                    <span class="a-radio-pay__name"><span
                                                            class="a-radio-pay__name-text">
      10 <span class="a-radio-pay__name-currency">BYN</span></span></span></label><label
                                                        class="a-radio-pay o-donations__choice-radio"><input name="sum"
                                                                                                             type="radio"
                                                                                                             value="20"
                                                                                                             class="a-radio-pay__input">
                                                    <span class="a-radio-pay__name"><span
                                                            class="a-radio-pay__name-text">
      20 <span class="a-radio-pay__name-currency">BYN</span></span></span></label><label
                                                        class="a-radio-pay o-donations__choice-radio"><input name="sum"
                                                                                                             type="radio"
                                                                                                             value="50"
                                                                                                             class="a-radio-pay__input">
                                                    <span class="a-radio-pay__name"><span
                                                            class="a-radio-pay__name-text">
      50 <span class="a-radio-pay__name-currency">BYN</span></span></span></label><label
                                                        class="a-radio-pay o-donations__choice-radio"><input name="sum"
                                                                                                             type="radio"
                                                                                                             value="100"
                                                                                                             class="a-radio-pay__input">
                                                    <span class="a-radio-pay__name"><span
                                                            class="a-radio-pay__name-text">
      100 <span class="a-radio-pay__name-currency">BYN</span></span></span></label><label
                                                        class="a-radio-pay o-donations__choice-radio"><input name="sum"
                                                                                                             type="radio"
                                                                                                             value="500"
                                                                                                             class="a-radio-pay__input">
                                                    <span class="a-radio-pay__name"><span
                                                            class="a-radio-pay__name-text">
      500 <span class="a-radio-pay__name-currency">BYN</span></span></span></label></div>
                                                <div class="o-donation__choice-bottom">
                                                    <div class="m-field-text m-field-text--addon-currency m-field-text--design-component">
                                                        <!---->
                                                        <div class="m-field-text__inner"><label
                                                                class="m-field-text__inner-lvl-2"><span
                                                                class="m-field-text__input-wrap"><input
                                                                placeholder="Другая сумма" type="tel" value=""
                                                                class="m-field-text__input"></span></label>
                                                            <span class="m-field-text__addon-currency">byn</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="o-donations__form-row">
                                            <div class="m-field-text m-field-text--design-default"><!---->
                                                <div class="m-field-text__inner"><label
                                                        class="m-field-text__inner-lvl-2"><span
                                                        class="m-field-text__input-wrap"><input
                                                        placeholder="Введите ваш email" type="email" value=""
                                                        class="m-field-text__input"></span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="o-donations__form-row">
                                            <button type="submit"
                                                    class="a-btn a-btn--color-main-gradient a-btn--size-middle a-btn--design-default"
                                                    id="pay"
                                                    style="width:100%;">
                                                <div class="ball-clip-rotate-multiple vue-loaders a-btn__loader"
                                                     style="width:20px;height:20px;">
                                                
                                                    
                                                </div>
                                                <span class="a-btn__text">Поддержать</span>
                                            </button>
                                        </div>
                                        <div class="o-donations__form-row">
                                            <div class="o-donations__terms">
                                                Нажимая кнопку &quot;Поддержать&quot;, вы принимаете
                                                <a href="/agreement" target="_blank">
                                                    пользовательское соглашение
                                                </a>
                                                платформы molamola.by, а также принимаете
                                                <a href="//www.bgpb.by/rules/" target="_blank">
                                                    уcловия договора
                                                </a>
                                                дистанционного банковского обслуживания.
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <section class="m-payment-systems"></section>
                            </div>
                        </section>
                        <!-- end /.purchase-button -->
                    </div>
                    <!-- end /.sidebar--card -->
  <div class="author-card sidebar-card ">
                        <div class="card-title">
                            <h4>Куратор</h4>
                        </div>

                                 
                        <div class="author-infos">
                            <div class="author_avatar">
                                @if(empty($pets->company->logo))
                                 <img src="{{asset('avatar/avatar3.png')}}" alt="Presenting the broken author avatar :D">
                                 @else
                                   <img src="{{asset('uploads/logo')}}/{{$pets->company->logo}}" alt="Presenting the broken author avatar :D">
                                   @endif
                            </div>

                            <div class="author">
                                <h4>{{$pets->company->name}}</h4>
                                <p>Дата регистрации: {{$pets->company->created_at}}</p>
                            </div>
                            <!-- end /.author -->

                            <div class="social social--color--filled">
                                <ul>
                                    <li>
                                        <a href="{{$pets->company->fblink}}" target="blank">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{$pets->company->instlink}}" target="blank">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.social -->

                            <div class="author-btn">
                                <a href="{{route('company.index',[$pets->company->id,$pets->company->slug])}}" class="btn btn--sm btn--round">Профиль</a>
                                <a href="#" class="btn btn--sm btn--round">Написать</a>
                            </div>
                            <!-- end /.author-btn -->
                        </div>
                        <!-- end /.author-infos -->


                    </div>
                     <div class="author-card sidebar-card ">
                        <div class="card-title">
                            <h4>Поделиться в соц сетях</h4>
                        </div>

                        <div class="author-infos1">
                         

                            <!-- end /.author -->

                            <div class="social social--color--filled">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                    </li>

                                    <li>
                                       <img src="images/ok.png">
                                    </li>
                                      <li>
                                     <img src="images/inst.png">
                                    </li>
                                      <li>
                                       <img src="images/vk.png">
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.social -->

                            <!-- end /.author-btn -->
                        </div>
                        <!-- end /.author-infos -->


                    </div>
                    <div class="sidebar-card card--metadata">
                        <ul class="data">
                            <li>
                                <p>
                                    <span class="lnr lnr-cart pcolor"></span>Помогли всего</p>
                                <span>15</span>
                            </li>
                            <li>
                                <p>
                                    <span class="lnr lnr-heart scolor"></span>Понравилось</p>
                                <span>256</span>
                            </li>
                       
                        </ul>


                        <!-- end /.rating -->
                    </div>
                    <!-- end /.sidebar-card -->
  
                    <div class="sidebar-card card--product-infos">
                        <div class="card-title">
                            <h4>О объявлении</h4>
                        </div>

                        <ul class="infos">
                            <li>
                                <p class="data-label">Опубликовано</p>
                                <p class="info">{{$pets->created_at->diffForHumans()}} </p>
                            </li>
                            <li>
                                <p class="data-label">Обновлено</p>
                                <p class="info">{{$pets->updated_at}} </p>
                            </li>

                            <li>
                                <p class="data-label">Категория</p>
                                <p class="info">Собаки</p>
                            </li>


                            <li>
                                <p class="data-label">Теги</p>
                                <p class="info">
                                   @if ($pets->inv=== 1) <a href="#"> Инвалид</a>@endif
                                   @if ($pets->old=== 1) <a href="#">Старичок</a>@endif
                                   @if ($pets->hands=== 1)  <a href="#">Ищет дом</a>@endif
                                   @if ($pets->auto=== 1) <a href="#">Автопомощь</a>@endif
                                    @if ($pets->piar=== 1) <a href="#">Пиар поддержка</a>@endif
                                    @if  ($pets->photo=== 1) <a href="#">Фотопомощь</a>@endif
                                     @if ($pets->kurator=== 1)<a href="#">Куратор</a>@endif
                                     @if ($pets->donor=== 1)<a href="#">Донор</a>@endif
                                     @if ($pets->gurskogo=== 1)<a href="#">Гурского</a>@endif
                                     @if ($pets->naiden=== 1)<a href="#">Найден</a>@endif

                                </p>
                            </li>
                        </ul>
                    </div>
                    <!-- end /.aside -->

                
                    <!-- end /.author-card -->
                </aside>
                <!-- end /.aside -->
            </div>
            <!-- end /.col-md-4 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--===========================================
        END SINGLE PRODUCT DESCRIPTION AREA
    ===============================================-->


@endsection

