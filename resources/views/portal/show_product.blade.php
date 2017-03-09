@extends('portal.layout.main')


@section('content')


<div class="container" id="product">
        <div class="row">
             <div class="col-sm-12 col-xs-12 col-md-12">
                 <main class="post-single">
                        <img style="height: 400px; width: 800px;"  class="img-responsive" src="{{ asset('/files/products/' . $product->id . '/' . $product->image) }}" alt="{{ $product->name }}" >

                             <div class="post-inner">   
                                  <div class="post-title-wrap">
                                       <h1 class="post-title"  >{{ $product[App::getLocale().'_title']}}</h1>
                                  </div>
                                  <div class="post-editor clearfix">
                                       <p>{!!$product[App::getLocale().'_description']!!}</p>
                                  </div>
                            </div>
                 </main>
            </div>
        </div>
           
           <div class="">                      
                  <a class="btn btn-info btn-sm" href="{{ route('portal.product') }}">@lang('common.back')</a>
           </div>


      
</div>
 
@endsection