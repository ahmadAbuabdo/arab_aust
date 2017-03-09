<header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4 rightStyle">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +962 6 4205 859</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8 floatStyle">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="https://www.facebook.com/Enjoymilk1/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            {{-- {{ dd(Request::url('/portal')) }} --}}
                            <?php $url = explode(App::getLocale(), Request::url('/portal')); ?>
                            
                           <a href="<?= (App::getLocale() == 'en') ? '/ar' . $url[1] : '/en' . $url[1] ;?>"><?= (App::getLocale() == 'en') ? 'AR' : 'EN' ?> </a>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('portal.home')}}"><img src="/images/images/logo1.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="{{ (Route::currentRouteName() == 'portal.home'     ? 'active' : '') }}"><a href="{{route('portal.home') }}">@lang('menu.home')</a>

                        </li>

                        {{-- <li class="{{ (Route::currentRouteName() == 'portal.aboutus'     ? 'active' : '') }}" ><a href="{{route('portal.aboutus') }}">  @lang('menu.aboutus')</a></li>

                        <li class="{{ (Route::currentRouteName() == 'portal.quality'     ? 'active' : '') }}" ><a href="{{route('portal.quality') }}">  @lang('menu.site_quality')</a></li> --}}
                        <li class="{{ (Route::currentRouteName() == 'portal.relation'     ? 'active' : '') }}" ><a href="{{route('portal.relation') }}">  @lang('menu.relation')</a></li>
                        <li class="{{ (Route::currentRouteName() == 'portal.product'     ? 'active' : '') }}"><a href="{{route('portal.product') }}">@lang('menu.products')</a></li>
                        <li class="{{ (Route::currentRouteName() == 'portal.gallery'     ? 'active' : '') }}"><a href="{{route('portal.gallery') }}">@lang('menu.gallary') </a></li>
                        <li class="{{ (Route::currentRouteName() == 'contactus.create'     ? 'active' : '') }}"><a href="{{route('contactus.create') }}">@lang('menu.contact')</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->