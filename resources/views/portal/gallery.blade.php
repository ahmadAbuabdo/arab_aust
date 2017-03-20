@extends('portal.layout.main')


@section('content')


<div class="innerSlider">
  <img src="/img/main-img-slider3.png">
</div><!--innerSlider-->

    <section id="portfolio">
        <div class="container">
           <div class="center">
               <h2>{{@trans('gallary.gall')}}</h2>
               <p class="lead">{{@trans('gallary.gallary_decs')}}</p>
            </div>

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Store</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Plant</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Lab</a></li>
            </ul><!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">


                 @foreach($gallerys as $gallery)

                    @if($gallery->albumId == '1')

                    <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                             <img class="img-responsive" src="{{ asset('/files/gallary/' . $gallery->id . '/' . 'thumb-' . $gallery->image) }}" style="" alt="{{ $gallery->name }}" >
                            <div class="overlay">
                               <div class="recent-work-inner">
                                    <h3><a href="#">about image</a></h3>
                                    <p>{{$gallery['title']}}</p>
                                    @if(!empty($gallery->image))
                                        @if(is_dir(public_path() . '/files/gallary/' . $gallery->id))

                                         <a class="preview" href="{{ asset('/files/gallary/' . $gallery->id . '/' . $gallery->image) }}" rel="prettyPhoto"><i class="fa fa-eye"></i> {{@trans('common.view')}}</a>
                                        @endif
                                    @endif
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->



                    @elseif($gallery->albumId == '2')
                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                             <img class="img-responsive" src="{{ asset('/files/gallary/' . $gallery->id . '/' . 'thumb-' . $gallery->image) }}" style="" alt="{{ $gallery->name }}" >
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">about image</a></h3>
                                    <p>{{$gallery['title']}}</p>
                                    @if(!empty($gallery->image))
                                        @if(is_dir(public_path() . '/files/gallary/' . $gallery->id))

                                         <a class="preview" href="{{ asset('/files/gallary/' . $gallery->id . '/' . $gallery->image) }}" rel="prettyPhoto"><i class="fa fa-eye"></i> {{@trans('common.view')}}</a>
                                        @endif
                                    @endif
                                </div> 
                            </div>
                        </div>        
                    </div><!--/.portfolio-item-->




                    @else($gallery->albumId == '3')
                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                             <img class="img-responsive" src="{{ asset('/files/gallary/' . $gallery->id . '/' . 'thumb-' . $gallery->image) }}" style="" alt="{{ $gallery->name }}" >
                            <div class="overlay">
                               <div class="recent-work-inner">
                                    <h3><a href="#">about image</a></h3>
                                    <p>{{$gallery['title']}}</p>
                                    @if(!empty($gallery->image))
                                        @if(is_dir(public_path() . '/files/gallary/' . $gallery->id))

                                         <a class="preview" href="{{ asset('/files/gallary/' . $gallery->id . '/' . $gallery->image) }}" rel="prettyPhoto"><i class="fa fa-eye"></i> {{@trans('common.view')}}</a>
                                        @endif
                                    @endif
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->
                    @endif
               @endforeach
                    </div><!--/.portfolio-item-->
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->



@endsection