@extends('layouts.app')

@section('content')
  <section class="hero-area bgimage">
        <div class="bg_image_holder">
            <img src="https://pp.userapi.com/c845418/v845418625/1d0143/ARsxQ0_7X5E.jpg" alt="background-image">
        </div>
        <!-- start hero-content -->
        <div class="hero-content content_above">
            <!-- start .contact_wrapper -->
            <div class="content-wrapper">
                <!-- start .container -->
                <div class="container">
                    <!-- start row -->
                    <div class="row">
                        <!-- start col-md-12 -->
                        <div class="col-md-12">
                            <div class="hero__content__title">
                                <h1>
                                    <span class="light"> Saveus.by
</span>
                                    <span class="bold">Платформа помощи бездомным животным
</span>
                                </h1>
                                <p class="tagline">У нас есть возможность задать новые стандарты зоозащиты в целой стране.
<br> Помощь животным станет централизованной, удобной и прозрачной.

</p>
                            </div>

                            <!-- start .hero__btn-area-->
                        
                            <!-- end .hero__btn-area-->
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.container -->
            </div>
            <!-- end .contact_wrapper -->
        </div>
        <!-- end hero-content -->

        <!--start search-area -->
        <div class="search-area">
            <!-- start .container -->
            <div class="container">
                <!-- start .container -->
                <div class="row">
                    <!-- start .col-sm-12 -->
                    <div class="col-sm-12">
                        <!-- start .search_box -->
                        <div class="search_box">
                            <form action="http://saveus.by/sendmail.php" method="POST">
                                <input type="email" class="text_field" required placeholder="Введите Ваш email" required name="your-email">
                                <div class="search__select select-wrap">
                                 

                                </div>
                                <button type="submit" class="search-btn btn--lg">Подписаться </button>
                            </form>
                        </div>
                        <!-- end ./search_box -->
                    </div>
                    <!-- end /.col-sm-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!--start /.search-area -->
    </section>
    <!--================================
    END HERO AREA
=================================-->

    <!--================================
    START FEATURE AREA
=================================-->
<section class="overview-area section--padding">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Каждый день сотни волонтеров в сфере зоозащиты спасают тысячи 
                            <span class="highlighted">бездомных животных</span>
                        </h1>
                        <p> Каждый волонтер, который курирует животных, работает одновременно контент-менеджером, сммщиком и бухгалтером. У этих людей просто нет возможности получать необходимую и, зачастую, критичную помощь без длительной ежедневной занятости.  Сколько бы не было зоозащитных организаций – проблему можно решать бесконечно долго. Нет единой системы, объединяющей всех волонтеров и людей, которые готовы их поддержать.</p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <div class="row">

                <div class="col-lg-4 offset-lg-1 col-md-6 v_middle overview_cont">
                    <div class="overview-icon">
                        <img src="images/fac1.png" alt="overview icon">
                    </div>
                </div>
                <!-- end /.col-md-4 -->

                <div class="col-lg-5 offset-lg-1 col-md-6 v_middle overview_cont">
                    <div class="step_num">01</div>
                    <h2 class="overview-title">Публикация десятков постов каждый день</h2>
                    <p>Вместо ежедневных публикаций в десятках групп в соц. сетях, барахолках и форумах мы предлагаем размещать все объявления один раз в одном месте с помощью пары кликов. Десятки фильтров и автоматические апы позволят найти дом каждому.  </p>
                </div>
                <!-- end /.col-md-5 -->

                <div class="col-lg-5 offset-lg-1 col-md-6 v_middle overview_cont">
                    <div class="step_num">02</div>
                    <h2 class="overview-title">Ведение финансовой отчетности</h2>
                    <p>Вместо ежедневного просчета расхода и прихода до копейки мы хотим создать автоматическую и прозрачную систему ведения фин. отчетов. Система будет учитывать входящие траназакции, а расход будет подкрепляться чеками. Туда же можно будет вводить и наличные средства.</p>
                </div>
                <!-- end /.col-md-5 -->

                <div class="col-lg-4 offset-lg-1 col-md-6 v_middle overview_cont">
                    <div class="overview-icon">
                        <img src="images/fac2.png" alt="overview icon">
                    </div>
                </div>
                <!-- end /.col-md-4 -->

                <div class="col-lg-4 offset-lg-1 col-md-6 v_middle overview_cont">
                    <div class="overview-icon">
                        <img src="images/fac3.png" alt="overview icon">
                    </div>
                </div>
                <!-- end /.col-md-4 -->

                <div class="col-lg-5 offset-lg-1 col-md-6 v_middle overview_cont">
                    <div class="step_num">03</div>
                    <h2 class="overview-title">Судьба подопечных</h2>
                    <p>Вместо ежемесячных просьб фотографий спасенного животного — мы предлагаем вести историю каждого хвостика публично. После пристройства карточка животного будет переходить к новому владельцу и каждый, кто помогал питомцу, будет рад следить за его дальнейшей судьбой.    </p>
                </div>
                <!-- end /.col-md-5 -->

            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
        <section class="proposal-area">

        <!-- start container-fluid -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 no-padding">
                    <div class="proposal proposal--left bgimage">
                        <div class="bg_image_holder" style="background-image: url(&quot;images»g.png&quot;); opacity: 1;">
                            <img src="images\bbg.png" alt="images\bbg.png">
                        </div>
                        <div class="content_above">
                            <div class="proposal__icon ">
                                <img src="images\buy.png" alt="Buy icon">
                            </div>
                            <div class="proposal__content ">
                                <h1 class="text--white">Для пользователей</h1>
                                <p class="text--white">Удобный и прозрачный способ находить новых членов семьи, помогать животным и следить за их судьбой.</p>
                            </div>
                        
                        </div>
                    </div>
                    <!-- end /.proposal -->
                </div>

                <div class="col-md-6 no-padding">
                    <div class="proposal proposal--right">
                        <div class="bg_image_holder" style="background-image: url(&quot;imagessbg.png&quot;); opacity: 1;">
                            <img src="images\sbg.png" alt="images\sbg.png">
                        </div>
                        <div class="content_above">
                            <div class="proposal__icon">
                                <img src="images\sell.png" alt="Sell icon">
                            </div>
                            <div class="proposal__content ">
                                <h1 class="text--white">Для волонтеров</h1>
                                <p class="text--white">Единая платформа для размещения своих подопечных и получения материальной помощи. </p>
                            </div>
                           
                        </div>
                    </div>
                    <!-- end /.proposal -->
                </div>
            </div>
        </div>
        <!-- start container-fluid -->
    </section>
      <section class="why_choose section--padding">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>А что еще?

                        </h1>
                        <p>Мы не ограничиваемся только благотворительной платформой, а создаем единую экосистему, в которой простые люди, благотворительные организации и бизнес будут помогать друг другу и, конечно, животным.</p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start row -->
            <div class="row">
                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .reason -->
                    <div class="feature2">
                        <span class="feature2__count">01</span>
                        <div class="feature2__content">
                            <img src="images\kot-chitatel.png" alt="Кот Читатель">
                            <h3 class="feature2-title">Единая база знаний</h3>
                            <p>Мы собираем самую полную базу передержек, доноров крови, ветеринарных клиник и неблагонодежных хозяев. Все это будет доступно в одном месте. </p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">02</span>
                        <div class="feature2__content">
                            <img src="images\kot-volonter.png" alt="Кот волонтер">  
                            <h3 class="feature2-title">Профиль волонтера</h3>
                            <p>Каждый сможет оценить труд и отблагодарить конкретного волонтера. В профиле будут видны все спасенные в прошлом и актуальные подопечные. </p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">03</span>
                        <div class="feature2__content">
                             <img src="images\mastercat.png" alt="Мастеркэт">  
                            <h3 class="feature2-title">Простые переводы</h3>
                            <p> Пользователи смогут делать прямые пожертвования (в денежном или вещественном эквивалентах) волонтерам, которые присматривают за конкретными животными. 

</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">04</span>
                        <div class="feature2__content">
                            <img src="images\kotmail.png" alt="Котмэил"> 
                            <h3 class="feature2-title">Сплоченное сообщество</h3>
                            <p>Волонтеры, представители ООЗЖ и пользователи смогут общаться друг с другом с помощью встроенных диалогов и возможности создания публичных чатов.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">05</span>
                        <div class="feature2__content">
                            <img src="images\kot-korzina.png" alt="Кот корзина">
                            <h3 class="feature2-title">Удобное пристройство</h3>
                            <p>Потенциальный хозяин животного сможет сообщить о своем намерении в один клик, а затем быстро связаться с волонтером внутри платформы или с помощью соц. сетей.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">06</span>
                        <div class="feature2__content">
                           <img src="images\kot-ooz.png" alt="Кот корзина">
                            <h3 class="feature2-title">Возможности для ООЗЖ</h3>
                            <p>ООЗЖ также смогут пользоваться всем функционалом платформы. Для них будет создан специальный интерфейс, позволяющий взять хвостика под свое крыло.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->
                 <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">07</span>
                        <div class="feature2__content">
                         
                             <img src="images\kot-telephone.png" alt="Кот с телефоном">  
                            <h3 class="feature2-title">Взаимное доверие</h3>
                            <p>Сбор средств будет доступен после подтверждения личности волонтера. Мы ценим наших пользователей и разработали трехступенчатую систему верификации для надежной защиты от мошенников.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->
                 <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">08</span>
                        <div class="feature2__content">
                         <img src="images\kot-bankir.png" alt="Кот банкир">  
                            <h3 class="feature2-title">Поддержка бизнеса</h3>
                            <p>Компании, работающие в сфере товаров для животных, смогут спонсировать и брать под опеку выбранных животных и волонтеров. Такие волонтеры и животные будут отмечаться специальными значками.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->
                 <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">09</span>
                        <div class="feature2__content">
                  <img src="images\kot-holodilnik.png" alt="Кот с холодильником">  
                            <h3 class="feature2-title">Помощь товарами и услугами</h3>
                            <p>Пользователи сайта смогут помогать волонтерам и их подопечным не только деньгами, но и оплатой товаров и услуг. И все это не выходя за пределы платформы!</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <section class="section--padding">
        <div class="">
            <div class="container">
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>"Дорожная карта" проекта

                        </h1>
                      
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="timeline">
                            <li class="happening">
                                <div class="happening--period">
                                    <p>Март 2019</p>
                                </div>
                                <div class="happening--detail">
                                    <h4 class="title">Запуск процесса разработки и начало участия в Social Weekend</h4>
                                    <p>Сейчас мы активно работаем над платформой и ищем новые возможности для скорейшей реализации задуманного.</p>
                                </div>
                            </li>

                            <li class="happening">
                                <div class="happening--period">
                                    <p>Июль 2019</p>
                                </div>
                                <div class="happening--detail">
                                    <h4 class="title">MVP</h4>
                                    <p>К этому времени мы хотим реализовать минимальную версию платформы. По большей части - это будет закрытый тестовый релиз для отладки работы и поиска баггов.</p>
                                </div>
                            </li>

                            <li class="happening">
                                <div class="happening--period">
                                    <p>Август 2019</p>
                                </div>
                                <div class="happening--detail">
                                    <h4 class="title">Первый релиз</h4>
                                    <p>После отладки баггов и доработки функционала мы сможем открыть платформу для всех желающих. В первом релизе уже будет присутствовать весь критический функционал, включая денежные переводы.</p>
                                </div>
                            </li>

                            <li class="happening">
                                <div class="happening--period">
                                    <p>Октябрь 2019</p>
                                </div>
                                <div class="happening--detail">
                                    <h4 class="title">Второй релиз</h4>
                                    <p>К октябрю у нас будет возможность реализовать весь запланированный функционал и полностью отладить работу платформы. Надеемся, что уже к этому моменту она поможет сотням людей и животных.</p>
                                </div>
                            </li>

                            <li class="happening">
                                <div class="happening--period">
                                    <p>Декабрь 2019</p>
                                </div>
                                <div class="happening--detail">
                                    <h4 class="title">Третий релиз и запуск платформы в странах СНГ</h4>
                                    <p>К этому моменту мы соберем достаточно обратной связи для идеальной работы платформы. После запуска проекта мы получили множество сообщений и вопросов о том: будет ли доступна платформа в Украине и России? Ответ, - да. </p>
                                </div>
                            </li>

                        </ul>
                        <!-- end /.timeline -->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
            </div>
            <!-- end .container -->
        </div>
    </section>

    <section class="featured-products bgcolor  section--padding">
        <!-- start /.container -->
        <div class="container">
        <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Как это будет выглядеть?

                        </h1>
                        <p>Мы изо всех сил работаем над реализацией платформы и уже сейчас готовы познакомить вас с частью ее функционала.</p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="product-title-area ">
                        <div class="product__title">
                            <h2>Листайте слайды вправо</h2>
                        </div>

                        <div class="product__slider-nav rounded">
                            <span class="lnr lnr-chevron-left nav_left"></span>
                            <span class="lnr lnr-chevron-right nav_right"></span>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>

        <!-- start .featured-product-slider -->



        <div class="container">
            <div class="row">
                <div class="col-md-12 no0-padding">
                    <div class="featured-product-slider prod-slider1">
                        <div class="featured__single-slider">
                            <div class="featured__preview-img">
                                <img src="images\featprod.jpeg" alt="Featured products">
                                <div class="prod_btn">
                                  
                                    <a class="transparent btn--sm btn--round">Демоверсия скоро!</a>
                                </div>
                            </div>
                            <!-- end /.featured__preview-img -->

                            <div class="featured__product-description">
                                <div class="product-desc desc--featured">
                                    <a class="product_title">
                                        <h4>Профиль волонтера</h4>
                                    </a>
                                  
                                    <!-- end /.titlebtm -->

                                    <p>В профиле волонтера будет собрана информация о всех его прошлых и текущих подопечных. Там же доступна финансовая отчетность волонтера, благодарности от пользователей и отражена возможность передержки. Пользователи смогут подписываться на волонтеров и писать личные сообщения.</p>
                                </div>
                                <!-- end /.product-desc -->

                            
                            </div>
                            <!-- end /.featured__product-description -->
                        </div>
                        <!--end /.featured__single-slider-->

                        <div class="featured__single-slider">
                            <div class="featured__preview-img">
                                <img src="images\featprod1.jpeg" alt="Featured products">
                                <div class="prod_btn">
                             
                                    <a class="transparent btn--sm btn--round">Демоверсия скоро!</a>
                                </div>
                            </div>
                            <!-- end /.featured__preview-img -->

                            <div class="featured__product-description">
                                <div class="product-desc desc--featured">
                                    <a  class="product_title">
                                        <h4>Карточка животного</h4>
                                    </a>
                                
                                    <!-- end /.titlebtm -->

                                    <p>В карточке животного пользователи смогут просматривать его историю, оставлять благодарности и пожелания. А также переводить средства, отправлять запрос на пристройство и добавлять выбранное животное себе в ленту.</p>
                                </div>
                                <!-- end /.product-desc -->

                       
                            </div>
                            <!-- end /.featured__product-description -->
                        </div>
                        <!--end /.featured__single-slider-->

                        <div class="featured__single-slider">
                            <div class="featured__preview-img">
                                <img src="images\featprod2.jpeg" alt="Featured products">
                                <div class="prod_btn">
                                 
                                    <a class="transparent btn--sm btn--round">Демоверсия скоро!</a>
                                </div>
                            </div>
                            <!-- end /.featured__preview-img -->

                            <div class="featured__product-description">
                                <div class="product-desc desc--featured">
                                    <a  class="product_title">
                                        <h4>Финансовая отчетность</h4>
                                    </a>
                                
                                    <!-- end /.titlebtm -->

                                    <p>Финансовая отчетность по животным больше не будет похожа на работу внештатного бухгалтера. Платформа будет фиксировать все входящие транзакции и самостоятельно вносить их в карточку волонтера. Для подтверждения расхода волонтер должен будет только прикрепить чек, все остальное наша платформа сделает сама. Также туда можно будет вносить и полученные наличные средства.</p>
                                </div>
                                <!-- end /.product-desc -->

                              
                            </div>
                            <!-- end /.featured__product-description -->
                        </div>
                        <!--end /.featured__single-slider-->

                        <div class="featured__single-slider">
                            <div class="featured__preview-img">
                                <img src="images\featprod3.jpeg" alt="Featured products">
                                <div class="prod_btn">
                         
                                    <a  class="transparent btn--sm btn--round">Демоверсия скоро!</a>
                                </div>
                            </div>
                            <!-- end /.featured__preview-img -->

                           <div class="featured__preview-img">
                                <img src="images\featprod4.jpeg" alt="Featured products">
                                <div class="prod_btn">
                         
                                   
                                </div>
                            </div>
                            <!-- end /.featured__product-description -->
                        </div>
                        <!--end /.featured__single-slider-->
                    </div>
                </div>
            </div>
            <!-- end /.featured__preview-img -->
        </div>
        <!-- end /.featured-product-slider -->
    </section>

<section class="bgcolor section--padding">
        <div class="shortcode_wrapper">
            <div class="container">
              
            <!-- end .container -->
        </div>

        <div class="shortcode_wrapper">
            <div class="container">
              <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Знакомьтесь с нашей командой

                        </h1>
                        <p>Наша команда состоит из настоящих специалистов своей сферы деятельности и нас всех объединяет любовь к животным. </p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <div class="single_speaker">
                                <div class="speaker__thumbnail">
                                    <img src="images\speaker1.jpeg" alt="">
                                </div>

                                <div class="speaker__detail">
                                    <h4>Валерия</h4>
                                    <span class="ocuup">Основатель проекта</span>
                                    <p>Проектирование и развитие проекта.
                                    </p>

                                  
                                    </div>
                                </div>
                            </div>
                            <!-- end single_speaker-->

                            <div class="single_speaker">
                                <div class="speaker__thumbnail">
                                    <img src="images\speaker2.jpeg" alt="">
                                </div>

                                <div class="speaker__detail">
                                    <h4>Юрий</h4>
                                    <span class="ocuup">Маркетолог</span>
                                    <p>Маркетинг, бизнес-процессы и верстка.
                                    </p>

                                  
                                </div>
                            </div>
                            <!-- end single_speaker-->

                            <div class="single_speaker">
                                <div class="speaker__thumbnail">
                                    <img src="images\speaker3.jpeg" alt="">
                                </div>

                                <div class="speaker__detail">
                                    <h4>Антон</h4>
                                    <span class="ocuup">Backend разработчик</span>
                                    <p>Backend разработка.
                                    </p>

                              
                                </div>
                            </div>
                            <!-- end single_speaker-->

                            <div class="single_speaker">
                                <div class="speaker__thumbnail">
                                    <img src="images\speaker4.jpeg" alt="">
                                </div>

                                <div class="speaker__detail">
                                    <h4>Мария</h4>
                                    <span class="ocuup">UX/UI дизайнер</span>
                                    <p>Дизайн и проектирование интерфейсов.
                                    </p>

                               
                                </div>
                            </div>
                            <!-- end single_speaker-->
                        </div>
                        <!-- end /.event_module -->
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="call-to-action bgimage">
        <div class="bg_image_holder" style="background-image: url(&quot;imagesÊlltobg.jpeg&quot;); opacity: 1;">
            <img src="images\calltobg.jpeg" alt="images\calltobg.jpeg">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-wrap">
                        <h1 class="text--white">Присоединяйтесь к нам!</h1>
                        <h4 class="text--white">Мы очень нуждаемся в помощи квалифицированных разработчиков, а также всех неравнодушных людей.</h4>
                        <a href="team.html" class="btn btn--lg btn--round btn--white callto-action-btn">Подробности тут</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
    END FEATURE AREA
=================================-->


    <!--================================
    START FEATURED PRODUCT AREA
=================================-->
    
    <!--================================
    END FEATURED PRODUCT AREA
=================================-->


    <!--================================
    START PRODUCTS AREA
=================================-->
 
    <!--================================
    END PRODUCTS AREA
=================================-->


    <!--================================
    START FOLLOWERS FEED AREA
=================================-->
  
    <!--================================
    END FOLLOWERS FEED AREA
=================================-->

 


  

    <!--================================
    START SELL BUY
=================================-->
 
    <!--================================
    END SELL BUY
=================================-->

    <!--================================
    START TESTIMONIAL
=================================-->
   
    <!--================================
    END TESTIMONIAL
=================================-->

    <!--================================
    START LATEST NEWS
=================================-->
    <section class="latest-news section--padding">
        <!-- start /.container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Наш 
                            <span class="highlighted">Блог</span>
                        </h1>
                        <p>Следите за обновлениями на сайте или в соц. сетях</p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start .row -->
            <div class="row">
                <!-- start .col-md-4 -->
              
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="news">
                        <div class="news__thumbnail">
                            <img src="https://pp.userapi.com/c844321/v844321083/1cca49/0Y8dZw_-m7w.jpg" alt="News Thumbnail">
                        </div>
                        <div class="news__content">
                            <a href="single-blog.html" class="news-title">
                                <h4>Как и Почему?</h4>
                            </a>
                            <p>Рассказываем о том как родилась идея единой благотворительной платформы SaveUs. ⠀</p>
                        </div>
                        <div class="news__meta">
                            <div class="date">
                                <span class="lnr lnr-clock"></span>
                                <p>16 Марта 2019</p>
                            </div>

                            <div class="other">
                             
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="news">
                        <div class="news__thumbnail">
                            <img src="https://sun2.beltelecom-by-minsk.userapi.com/c849036/v849036645/15443d/qOj6im7pQ9k.jpg" alt="News Thumbnail">
                        </div>
                        <div class="news__content">
                            <a href="thankyou.html" class="news-title">
                                <h4>Спасибо!</h4>
                            </a>
                            <p>Еще раз хотим поблагодарить всех Вас за такую поддержку!🤗 Заходите и смотрите! ⠀</p>
                        </div>
                        <div class="news__meta">
                            <div class="date">
                                <span class="lnr lnr-clock"></span>
                                <p>11 Марта 2019</p>
                            </div>

                           
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <section class="testimonial-area section--padding">
        <!-- start .container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Ваша обратная
                            <span class="highlighted">связь</span>
                        </h1>
                        <p>Большое спасибо за ваши теплые слова. Это правда мотивирует нас работать!</p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start row -->
            <div class="row">
                <!-- start .col-md-12 -->
                <div class="col-md-12">
                    <div class="testimonial-slider">
                        <div class="testimonial">
                            <div class="testimonial__about">
                                <div class="avatar v_middle">
                                    <img src="images\test1.jpeg" alt="Testimonial Avatar">
                                </div>
                                <div class="name-designation v_middle">
                                    <h4 class="name">Тоня</h4>
                                
                                </div>
                                <span class="lnr lnr-bubble quote-icon"></span>
                            </div>
                            <div class="testimonial__text">
                                <p>Валерия, здравствуйте! Примите, пожалуйста, мои поздравления с тем, что Вы и Ваша команда прошли народное голосование в Social Weekend! Я как индивидуалтный волонтёр очень признательна вам за Вашу идею и реализацию этой идеи! Успехов вам!😃✌
</p>
                            </div>
                        </div>
                        <!-- end /.testimonial -->

                        <div class="testimonial">
                            <div class="testimonial__about">
                                <div class="avatar v_middle">
                                    <img src="images\test2.jpeg" alt="Testimonial Avatar">
                                </div>
                                <div class="name-designation v_middle">
                                    <h4 class="name">Animal Care Center <br> "LISABONA"</h4>
                                 
                                </div>
                                <span class="lnr lnr-bubble quote-icon"></span>
                            </div>
                            <div class="testimonial__text">
                                <p>Нам лично проект очень понравился. Уже попросили друзей из Беларуси отправить СМСки и поддержать проект.</p>
                            </div>
                        </div>
                        <!-- end /.testimonial -->

                        <div class="testimonial">
                            <div class="testimonial__about">
                                <div class="avatar v_middle">
                                    <img src="images\test3.jpeg" alt="Testimonial Avatar">
                                </div>
                                <div class="name-designation v_middle">
                                    <h4 class="name">redplanet_minsk</h4>
                                 
                                </div>
                                <span class="lnr lnr-bubble quote-icon"></span>
                            </div>
                            <div class="testimonial__text">
                                <p>Идея проекта просто прекрасная! 💖 Спасибо всем добрым людям! Только так мир станет лучше, когда каждый примет на себя ответственность за свои поступки! Всё получится! Все хвостики должны быть любимы 💖🐈🐾🐕❤️</p>
                            </div>
                        </div>
                        <!-- end /.testimonial -->

                        <div class="testimonial">
                            <div class="testimonial__about">
                                <div class="avatar v_middle">
                                    <img src="images\test4.jpeg" alt="Testimonial Avatar">
                                </div>
                                <div class="name-designation v_middle">
                                    <h4 class="name">Юлия</h4>
                               
                                </div>
                                <span class="lnr lnr-bubble quote-icon"></span>
                            </div>
                            <div class="testimonial__text">
                                <p>Жаль, что наши люди не понимают. Они не виноваты в том, что животные это не люди!...Буду держать за вас кулачки! И если чем-то смогу помочь - помогу.</p>
                            </div>
                        </div>
                        <!-- end /.testimonial -->
                    </div>
                    <!-- end /.testimonial_slider -->

                    <div class="all-testimonial">
                        <a href="contact.html" class="btn btn--lg btn--round">Написать!</a>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end container -->
    </section>
    <!--================================
    END LATEST NEWS
=================================-->

    <!--================================
    START SPECIAL FEATURES AREA
=================================-->

    <!--================================
    END SPECIAL FEATURES AREA
=================================-->

    <!--================================
    START CALL TO ACTION AREA
=================================-->

    <section class="faq_area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cardify faq_module">
                        <div class="faq-title">
                            <span class="lnr lnr-bubble quote-icon"></span>
                            <h4>Часто задаваемые вопросы
</h4>
                        </div>

                        <div class="faqs">
                            <div class="panel-group accordion" role="tablist" id="accordion">
                                <div class="panel accordion__single" id="panel-one">
                                    <div class="single_acco_title">
                                        <h4>
                                            <a data-toggle="collapse" href="#collapse1" class="collapsed" aria-expanded="false" data-target="#collapse1" aria-controls="collapse1">
                                                <span>Как я смогу получить помощь через платформу?</span>
                                                <i class="lnr lnr-chevron-down indicator"></i>
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapse1" class="panel-collapse collapse" aria-labelledby="panel-one" data-parent="#accordion">
                                        <div class="panel-body">
                                            <p>Вам нужно будет зарегистрироваться, создать объявление с реальными фотографиями животных, которые будут заливаться с водяными знаками. В личном кабинете обозначить сумму денег, либо необходимые предметы. Пройти процедуру верификации. После каждого перевода в карточке животного обновляется информация о поступлениях. Волонтер в личном кабинете вносит расходы с чеками, которые проверяются администрацией сайта. После этого автоматически формируется отчетность.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end /.accordion__single -->
                                <div class="panel accordion__single" id="panel-two">
                                    <div class="single_acco_title">
                                        <h4>
                                            <a data-toggle="collapse" href="#collapse2" class="collapsed" aria-expanded="false" data-target="#collapse2" aria-controls="collapse2">
                                                <span>Какой процент от собранных денег получает владелец сайта?</span>
                                                <i class="lnr lnr-chevron-down indicator"></i>
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapse2" class="panel-collapse collapse" aria-labelledby="panel-two" data-parent="#accordion">
                                        <div class="panel-body">
                                            <p>Владелец сайта не получает проценты от переводов. Платформа будет монетизироваться с помощью  нативной рекламы.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end /.accordion__single -->
                                <div class="panel accordion__single" id="panel-three">
                                    <div class="single_acco_title">
                                        <h4>
                                            <a data-toggle="collapse" href="#collapse3" class="collapsed" aria-expanded="false" data-target="#collapse3" aria-controls="collapse3">
                                                <span>Будет ли платформа работать в Украине и России?</span>
                                                <i class="lnr lnr-chevron-down indicator"></i>
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapse3" class="panel-collapse collapse" aria-labelledby="panel-three" data-parent="#accordion">
                                        <div class="panel-body">
                                            <p>Да. Ориентирововчные сроки запуска указаны в "дорожной карте".</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end /.accordion__single -->
                            
                                <!-- end /.accordion__single -->
                              
                                <div class="panel accordion__single" id="panel-eleven">
                                    <div class="single_acco_title">
                                        <h4>
                                            <a data-toggle="collapse" href="#collapse11" class="collapsed" aria-expanded="false" data-target="#collapse11" aria-controls="collapse11">
                                                <span>Как я могу пожертвовать средства на разработку?</span>
                                                <i class="lnr lnr-chevron-down indicator"></i>
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapse11" class="panel-collapse collapse" aria-labelledby="panel-eleven" data-parent="#accordion">
                                        <div class="panel-body">
                                            <p>Сейчас мы не собираем средства на разработку. А все кто предлагает поддержать платформу в денежном эквиваленте - мошенники, действующие от своего имени.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end /.accordion__single -->
                                <div class="panel accordion__single" id="panel-twelve">
                                    <div class="single_acco_title">
                                        <h4>
                                            <a data-toggle="collapse" href="#collapse12" class="collapsed" aria-expanded="false" data-target="#collapse12" aria-controls="collapse12">
                                                <span>Кто нужен нашей команде?</span>
                                                <i class="lnr lnr-chevron-down indicator"></i>
                                            </a>
                                        </h4>
                                    </div>

                                    <div id="collapse12" class="panel-collapse collapse" aria-labelledby="panel-twelve" data-parent="#accordion">
                                        <div class="panel-body">
                                            <p>Devops инженер, Frontend разработчик, Backend разработчик, системный администратор и контент-менеджер. Пожалуйста, пишите нам.  </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end /.accordion__single -->
                            </div>
                            <!-- end /.accordion -->
                        </div>
                    </div>
                    <!-- end /.cardify -->
                </div>
                <!-- end /.col-md-8 -->

               
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
  <div class="row">
                        
                        <!-- end /.col-lg-4 col-md-6 -->

                        <!-- end /.col-lg-4 col-md-6 -->

                        <!-- end /.col-lg-4 col-md-6 -->

                        <div class="col-md-12">
                            <div class="contact_form cardify">
                                <div class="contact_form__title">
                                    <h3>Остались вопросы? Задайте их нам!</h3>
                                </div>

                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <div class="contact_form--wrapper">
                                             <form action="http://saveus.by/sendemail.php" method="POST">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Имя"  name="your-name" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="email" placeholder="Email" required name="your-email">
                                                        </div>
                                                    </div>
                                                </div>


                                                <textarea cols="30" rows="10" required placeholder="Ваше сообщение" name="your-message"></textarea>

                                                <div class="sub_btn">
                                                    <button type="submit" class="btn btn--round btn--default">Отправить</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- end /.col-md-8 -->
                                </div>
                                <!-- end /.row -->
                            </div>
                            <!-- end /.contact_form -->
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
        </div>

        <!-- end /.container -->
    </section>


@endsection
