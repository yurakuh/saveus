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
                    <h1 class="page-title">Аккаунт волонтера</h1>
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
                        
                            <li>
                                <a href="dashboard-manage-item.html">
                                    <span class="lnr lnr-dice"></span>Прошлые подопечные</a>
                            </li>
                             <li class="active">
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
                            <div class="pull-left">
                                <div class="dashboard__title">
                                    <h3>Заполните карточку вашего подопечного</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                   @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('message')}}
                        </div>
                        @endif

                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <form action="{{route('pets.update',[$pets->id])}}" method="POST" enctype="multipart/form-data">@csrf
                        
                            <div class="upload_modules">
                            
                                <div class="modules__title">
                                    <h3>Имя и описание подопечного</h3>
                                </div>
                                <!-- end /.module_title -->
                            <img src="images/podop.png" alt="The great warrior of China">
                                <div class="modules__content">
                                    <div class="form-group">
                                        <label for="category_id">Категория подопечного</label>
                                        <div class="select-wrap select-wrap2">
                                            <select name="category_id" id="category" class="text_field">
                                                @foreach(App\Category::all() as $cat)
                                                <option value="{{$cat->id}}" {{$cat->id==$pets->category_id?'selected':''}}>{{$cat->name}}</option>
                                               @endforeach
                                            </select>
                                            <span class="lnr lnr-chevron-down"></span>
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label for="product_name" role="alert">Регион проекта
                                            <span></span>
                                        </label>
                                        <input type="text" name="city" id="product_name" class="form-control" placeholder="Введите регион проекта..." @error('city') is-invalid @enderror"  value="{{ $pets->city }}" required autocomplete="city" autofocus>
                                          @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="product_name" >Имя подопечного
                                            <span>(20 символов)</span>
                                        </label>
                                        <input type="text" id="product_name" name="title" class="form-control" placeholder="Введите имя подопечного..." maxlength="20" @error('title') is-invalid @enderror"  value="{{ $pets->title }}" required autocomplete="title" autofocus>
                                          @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                     <div class="form-group">
                                        <label for="product_name">Подзаголовок объявления для каталога
                                            <span>(60 символов)</span>
                                        </label>
                                        <input type="text" id="product_name" name="subtitle" class="form-control " placeholder="Введите имя подопечного..." maxlength="60" @error('subtitle') is-invalid @enderror"  value="{{ $pets->subtitle }}" required autocomplete="subtitle" autofocus>
                                         @error('subtitle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>

                                    <div class="form-group no-margin">
                                      
                                      <div class="form-group">
                                            <label for="authbio">Информация о подопечном</label>
                                             <span>(800 символов)</span>
                                            <textarea  id="authbio" name="description" class="form-control " maxlength="800"  @error('description') is-invalid @enderror"  value="{{ $pets->description }}" required autocomplete="description" autofocus>{{ $pets->description }}</textarea>
                                               @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                    </div>
                                </div>
                                <!-- end /.modules__content -->
                            </div>
                            <!-- end /.upload_modules -->

                         
                            <!-- end /.upload_modules -->

                           <div class="information_module">
                                <a class="toggle_title" >
                                    <h4>Дополнительные фильтры
                                      
                                    </h4>
                                </a>

                                <div class="information__set mail_setting toggle_module collapse show" style="">
                                    <div class="information_wrapper">

                                        <div class="custom_checkbox">
                                            <input type="hidden" name="old" value="0" />
                                          
                                    
                                                  
                                            <input type="checkbox" id="opt1" class="" name="old" value="1" @if ($pets->old== 1) checked @else @endif>
                                          
                                            
                                               
                                            <label for="opt1">

                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Старик</span>
                                                <span class="desc">Отправлять email если пользователь захотел стать хозяином подопечного</span>
                                            </label>
                                        </div>
                                         <div class="custom_checkbox">
                                             <input type="hidden" name="inv" value="0" />
                                          
                                            <input type="checkbox" id="opt2" class="" name="inv" value="1"  @if ($pets->inv== 1) checked @else  @endif>
                                            
                                            
                                            <label for="opt2">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Инвалид</span>
                                                <span class="desc">Отправлять email если пользователь захотел стать хозяином подопечного</span>
                                            </label>
                                        </div>
                                         <div class="custom_checkbox">
                                            <input type="hidden" name="hands" value="0" />
                                            <input type="checkbox" id="opt3" class="" name="hands" @if ($pets->hands== 1) checked @else  @endif value="1"  >
                                            <label for="opt3">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Ищет дом</span>
                                                <span class="desc">Отправлять email если пользователь захотел стать хозяином подопечного</span>
                                            </label>
                                        </div>
                                         <div class="custom_checkbox">
                                            <input type="hidden" name="auto" value="0" />
                                            <input type="checkbox" id="opt4" class="" name="auto" value="1" @if ($pets->auto== 1) checked @else  @endif >
                                            <label for="opt4">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Автопомощь</span>
                                                <span class="desc">Отправлять email если пользователь захотел стать хозяином подопечного</span>
                                            </label>
                                        </div>
                                         <div class="custom_checkbox">
                                            <input type="hidden" name="piar" value="0" />
                                            <input type="checkbox" id="opt5" class="" name="piar" value="1"  @if ($pets->piar== 1) checked @else  @endif  >
                                            <label for="opt5">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Пиар</span>
                                                <span class="desc">Отправлять email если пользователь захотел стать хозяином подопечного</span>
                                            </label>
                                        </div>
                                         <div class="custom_checkbox">
                                            <input type="hidden" name="photo" value="0" />
                                            <input type="checkbox" id="opt6" class="" name="photo" value="1" @if ($pets->photo== 1) checked @else  @endif   >
                                            <label for="opt6">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Фотопомощь</span>
                                                <span class="desc">Отправлять email если пользователь захотел стать хозяином подопечного</span>
                                            </label>
                                        </div>
                                         <div class="custom_checkbox">
                                             <input type="hidden" name="perederzka" value="0" />
                                            <input type="checkbox" id="opt7" class="" name="perederzka" value="1" @if ($pets->perederzka== 1) checked @else  @endif >
                                            <label for="opt7">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Передержка</span>
                                                <span class="desc">Отправлять email если пользователь захотел стать хозяином подопечного</span>
                                            </label>
                                        </div>
                                         <div class="custom_checkbox">
                                             <input type="hidden" name="kurator" value="0" />
                                            <input type="checkbox" id="opt8" class="" name="kurator" value="1" @if ($pets->kurator== 1) checked @else  @endif >
                                            <label for="opt8">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Куратор</span>
                                                <span class="desc">Отправлять email если пользователь захотел стать хозяином подопечного</span>
                                            </label>
                                        </div>
                                         <div class="custom_checkbox">
                                            <input type="hidden" name="donor" value="0" />
                                            <input type="checkbox" id="opt9" class="" name="donor" value="1" @if ($pets->donor== 1) checked @else  @endif >
                                            <label for="opt9">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Донор</span>
                                                <span class="desc">Отправлять email если пользователь захотел стать хозяином подопечного</span>
                                            </label>
                                        </div>
                                        <!-- end /.custom-radio -->

                                        <div class="custom_checkbox">
                                             <input type="hidden" name="gurskogo" value="0" />
                                            <input type="checkbox" id="opt10" class="" name="gurskogo" value="1" @if ($pets->gurskogo== 1) checked @else  @endif>
                                            <label for="opt10">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Гурского</span>
                                                <span class="desc">Отправлять email при переводе средств</span>
                                            </label>
                                        </div>
                                        <!-- end /.custom_checkbox -->

                                        <div class="custom_checkbox">
                                             <input type="hidden" name="naiden" value="0" />
                                            <input type="checkbox" id="opt11" class="" name="naiden" value="1" @if ($pets->naiden== 1) checked @else  @endif>
                                            <label for="opt11">
                                                <span class="shadow_checkbox"></span>
                                                <span class="radio_title">Найден</span>
                                                <span class="desc">Отправлять комментарии и ответы на сообщения</span>
                                            </label>
                                        </div>
                                        <!-- end /.custom_checkbox -->

                                        <!-- end /.custom_checkbox -->
                                    </div>
                                    <!-- end /.information_wrapper -->
                                </div>
                                <!-- end /.information_module -->
                            </div>
                            <!-- end /.upload_modules -->

                            <div class="upload_modules module--upload">
                                <div class="modules__title">
                                    <h3>Статус объявления</h3>
                                </div>
                                <!-- end /.module_title -->

                                <div class="modules__content">
                                    <div class="form-group">
                                        <label for="category">Выбрать статус объявления</label>
                                        <div class="select-wrap select-wrap2">
                                            <select name="status" id="category" class="text_field">
                                                
                                                <option value="1"{{$pets->status==1?'selected':''}}>Актуальное</option>
                                                <option value="0"{{$pets->status==0?'selected':''}}>Архив</option>
                                                
                                            </select>
                                            <span class="lnr lnr-chevron-down"></span>
                                        </div>
                                    </div>
                                 
                                    <!-- end /.form-group -->
                                </div>
                                <!-- end /.upload_modules -->
                            </div>


                            <div class="upload_modules with--addons">
                                <div class="modules__title">
                                    <h3>Сбор средств (при необходимости)</h3>
                                </div>
                                <!-- end /.module_title -->

                                <div class="modules__content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                
                                                <div class="input-group">
                                                    <span class="input-group-addon">BYN</span>
                                                    <input type="text" id="rlicense" name="amount" value="{{ $pets->amount }}" class="form-group" placeholder="00.00">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end /.col-md-6 -->

        
                                        <!-- end /.col-md-6 -->

                                    </div>
                                    <!-- end /.row -->
                                   
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="single_use">Если у вас есть сканы оплаченных чеков и счетов, пожалуйста, прикрепите их здесь.
                                                </label>
                                                <div class="input-group">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        
                                  <div class="form-group">
                                      
                                    </div>

                                     <div class="form-group">
                                      <input type="file" name="petimage1">
                                    </div>
                                     <div class="form-group">
                                      <input type="file" name="petimage2">
                                    </div>
                                     <div class="form-group">
                                      <input type="file" name="petimage3">
                                    </div>
                                     <div class="form-group">
                                      <input type="file" name="petimage4">
                                    </div>
                                    <div class="form-group">
                                      <input type="file" name="petimage5">
                                    </div>
                                   
                                       
                                    </div>
                                    <!-- end /.row -->
                                </div>
                                <!-- end /.modules__content -->
                            </div>
                            <!-- end /.upload_modules -->

                            <!-- submit button -->
                            <div class="newphotos row" id="newphotos">
                            </div>
                            <br>
                            <div id="app">
                                <multipleupload-component></multipleupload-component>
                            </div>
                            <br>
                            <button type="submit" class="btn btn--round btn--fullwidth btn--lg btn-primary">Подтвердить и отправить на модерацию</button>
                        </form>
                        <br>
                        <div id="photos" class="d-flex flex-wrap flex-row bd-highlight mb-3">
                            <br>
                                <div class="oldphotos row" id="oldphotos">
                                    @if(isset($petsimage))
                                            @foreach($petsimage as $petimage)
                                            <div class="photo col">
                                                <form action="/pets/{{$petimage->id}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <img src="/uploads/petimages/{{$petimage->image_url}}" alt="">
                                                    <hr>
                                                    <input type="submit" value="Удалить" class="btn btn-danger">
                                                </form>
                                            </div>
                                            @endforeach
                                    @endif
                                </div>
                                
                            </div>
                        <br>
                        <br>

                           <div class="upload_modules module--upload">
                                <div class="modules__title">
                                    <h3>Загрузка файлов</h3>
                                </div>
                                <!-- end /.module_title -->

                                <div class="modules__content">
                                    <div class="form-group">
                                        <div class="upload_wrapper">
                                            <p>Загрузить фото
                                                <span>(JPEG или PNG от 500x500px)</span>
                                            </p>

                                            <div class="custom_upload">
                                                <label for="thumbnail">
                                                    <input type="file" id="thumbnail" class="files">
                                                    <span class="btn btn--round btn--sm">Загрузка</span>
                                                </label>
                                            </div>
                                            <!-- end /.custom_upload -->

                                            <div class="progress_wrapper">
                                                <div class="labels clearfix">
                                                    <p>Thumbnail.jpg</p>
                                                    <span data-width="89">89%</span>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 89%;">
                                                        <span class="sr-only">70% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end /.progress_wrapper -->

                                            <span class="lnr upload_cross lnr-cross"></span>
                                        </div>
                                        <!-- end /.upload_wrapper -->
                                    </div>
                                    <!-- end /.form-group -->

                                  
                                    <!-- end /.form-group -->

                               
                                    <!-- end /.form-group -->
                                </div>
                                <!-- end /.upload_modules -->
                            </div>



                    </div>
                    <!-- end /.col-md-8 -->

                    <div class="col-lg-4 col-md-5">
                        <aside class="sidebar upload_sidebar">
                            <div class="sidebar-card">
                                <div class="card-title">
                                    <h3>FAQ (Частные вопросы)</h3>
                                </div>

                                <div class="card_content">
                                    <div class="card_info">
                                        <h4>Загрузка фотографий</h4>
                                        <p>Размер фотографии не должен превышать 2мб.</p>
                                    </div>

                                    <div class="card_info">
                                        <h4>Загрузка видео</h4>
                                        <p>Загрузка видео возможна ссылкой с видеохостинга youtube. </p>
                                    </div>

                                    <div class="card_info">
                                        <h4>Загрузка описания</h4>
                                        <p>Описание не должно превышать 6000 символов без пробелов.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end /.sidebar-card -->

                            <div class="sidebar-card">
                                <div class="card-title">
                                    <h3>Выбор категорий и фильтров</h3>
                                </div>

                                <div class="card_content">
                                    <p>Пожалуйста, выбирайте категории и фильтры, которые соответствуют вашему подопечному. Все объявления проходят предварительную модерацию.</p>
                                    <ul>
                                        <li>Щенком считается животное возрастом до 10 месяцев.</li>
                                        <li>Старичком считается животное возраст которого превышает 7 лет.</li>
                                        <li>Фильтр Гурского 42 относится к животным, вывезенным непосредственно с территории пункта временного содержания, пожалуйста, загружайте фотографию непосредственно подтверждающую это.</li>
                                        <li>Фильтр SOS ситуации относится к животным с инфекционными заболеваниями (энтерин, короновирус и тд), животные до 1 мес. (нужна кормящая кошка/собака), животные с ранением (сбитые). </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end /.sidebar-card -->

                            <div class="sidebar-card">
                                <div class="card-title">
                                    <h3>Сбор средств</h3>
                                </div>

                                <div class="card_content">
                                    <p>Сбор средств открывается только после верификации волонтера и подтверждения паспортных данных.</p>
                                    <ul>
                                        <li>Открывая сбор средств вы заключаете договор оферты на целевое расходование собранных средств.</li>
                                        <li>В случае гибели вашего подопечного и наличия остатка средств вы сможете в течение 7 дней передать их любому животному с меткой SOS.</li>
                                        <li>Платформа оставляет за собой право отказать в сборе средств без объяснения причин.</li>
                                        <li>Часть необходимых средств может быть покрыта депозитом платформы в случае его наличия. В этом случае волонтер обязуется погасить свой долг путем сбора на платформе в течение 30 рабочих дней.</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end /.sidebar-card -->
                        </aside>
                        <!-- end /.sidebar -->
                    </div>
                    <!-- end /.col-md-4 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
@endsection
