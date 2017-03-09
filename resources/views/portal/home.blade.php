@extends('portal.layout.main')


@section('content')

	<section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(/images/images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                               
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                {{-- <div class="slider-img">
                                    <img src="/images/images/slider/img1.png" class="img-responsive">
                                </div> --}}
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(/images/images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(/images/images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            @if (App::getLocale()=='en')
            <i class="fa fa-chevron-left"></i>
            @else 
               <i class="fa fa-chevron-right"></i>
               @endif
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
        @if (App::getLocale()=='en')
            <i class="fa fa-chevron-right"></i>
            @else 
               <i class="fa fa-chevron-left"></i>
               @endif

        </a>
    </section><!--/#main-slider-->

    <section id="feature" >


        <div class="container">
           <div class="center wow fadeInDown">
                <h2>{{@trans('about_us.company_name')}}</h2>
                <p class="lead">{!! $aboutus[App::getLocale().'_about'] !!}</p>
            </div>
        </div><!--/.container-->
    </section><!--/#feature-->

    <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>{{@trans('gallary.gall')}}</h2>
            </div>


            <div class="row">
                <div class="portfolio-items wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms"">
                   @foreach($gallerys as $gallery)
                    <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                             <img class="img-responsive" src="{{ asset('/files/gallary/' . $gallery->id  . '/' . 'thumb-' . $gallery->image) }}" style="" alt="{{ $gallery->name }}" >
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">about image</a></h3>
                                    <p>{{$gallery['title']}}</p>
                                    @if(!empty($gallery->image))
                                        @if(is_dir(public_path() . '/files/gallary/' . $gallery->id))

                                         <a class="preview" href="{{ asset('/files/gallary/' . $gallery->id . '/' . $gallery->image) }}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                        @endif
                                    @endif
                                </div> 

                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    @endforeach
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->

    <section id="services" class="service-item">
            <div class="container">
            <div class="center colorStyle">
               <h2>{{@trans('terms.quality')}}</h2>
               <div class="col-lg-6 col-md-6 derctionRight-block">
               <p class="lead">{!! $quality[App::getLocale().'_terms'] !!}</p></div>
               <div class="imgblock col-lg-6 col-md-6"><img class="img-responsive wow fadeInDown about" src="{{ asset('/files/quality/' . $quality->id . '/' . $quality->image) }}" alt="{{ $quality->name }}"></div>
            </div>
        </div>
    </section><!--/#services-->

    <section id="middle">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 wow fadeInDown">
                    <div class="accordion">
                        <h2>Why People like us?</h2>
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  {{@trans('relation.page_title')}}
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive wow fadeInDown about" src="{{ asset('/files/relation/' . $relation->id  . '/' . 'thumb-' . $relation->image) }}" alt="{{ $relation->name }}">                                        </div>
                                        <div class="media-body">
                                            <p class="lead">{!! $relation[App::getLocale().'_relation'] !!}</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>





                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  {{@trans('terms.quality')}}
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
                                {!! $quality[App::getLocale().'_terms'] !!}
                              </div>
                            </div>
                          </div>

                        </div><!--/#accordion1-->
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#middle-->

    

    <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Custumer</h2>
            </div>    

            <div class="partners">
                <ul>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="/images/images/partners/1.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="/images/images/partners/2.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="/images/images/partners/3.png"></a></li>
                   
                </ul>
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->

  <br>
  {!! Form::open(['method' => 'POST', 'url' => route('contactus.store'),'files' => true , 'class' => 'form-horizontal']) !!}

       {!! csrf_field() !!}


    <section id="contact-page">
        <div class="container wow fadeInDown" >
            <div class="center wow fadeInDown">        
                <h2>{{@trans('contact_us.title_msj')}}</h2>
                <p class="lead">{{@trans('contact_us.subject')}}</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1 rightBlock-contact">
                        <div class="form-group">
                        {!! Form::label('name', @trans('contact_us.name').':', ['class' => 'col-sm-2 control-label required ']) !!} 
                        {!! Form::text('title', null, ['class' => 'form-control input-sm']) !!}
                        </div>
                        <div class="form-group">
                             {!! Form::label('email', @trans('contact_us.email').':', ['class' => 'col-sm-2 control-label required ']) !!} 
                             {!! Form::text('email', null, ['class' => 'form-control input-sm']) !!}
                        </div>
                        <div class="form-group">
                             {!! Form::label('phone', @trans('contact_us.phone').':', ['class' => 'col-sm-2 control-label required ']) !!} 
                            {!! Form::text('phone', null, ['class' => 'form-control input-sm', 'maxlength' => "15"]) !!}                        </div>

                    </div>
                    <div class="col-sm-5">
                      
                        <div class="form-group">
                             {!! Form::label('message', @trans('contact_us.message').':', ['class' => 'col-sm-2 control-label required ']) !!} 
                            {!! Form::textarea('description', null, ['class' => 'form-control input-sm']) !!}
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required"  id="btnContactUs" >{{@trans('contact_us.submit')}}
</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

      
             {!! Form::close() !!}

   
 
@endsection