@extends('portal.layout.main')


@section('content')


    <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>{{@trans('gallary.gall')}}</h2>
               <p class="lead">{{@trans('gallary.gallary_decs')}}</p>
            </div>
        
            <div class="row">
                <div class="portfolio-items wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms"">
                   @foreach($gallerys as $gallery)
                    <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3">
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
                    @endforeach
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
@endsection