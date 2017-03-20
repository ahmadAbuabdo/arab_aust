@extends('portal.layout.main')

<?php use Admailer\Models\BaseModel; ?>

@section('content')




<div class="innerSlider">
  <img src="/img/main-img-slider.png">
</div><!--innerSlider-->

<div class="container">
@foreach($products as $product)
@if ($product['id'] % 2 == 0) 
  <div class="ourProduct-odd">
    <div class="leftBlockProduct col-lg-6">
        <div class="titleProduct"> <h2>{{ $product[App::getLocale().'_name'] }}</h2></div>
        <div class="descriptionProduct"> 
           <p>  {!! $product[App::getLocale().'_description'] !!}
</p>
        </div>
    </div><!--leftBlockProduct-->
    <div class="rightBlockProduct col-lg-6"> <img src="{{ asset('/files/products/' . $product->id . '/' . 'thumb-' . $product->image) }}" style="" alt="{{ $product->name }}">  </div><!--rightBlockProduct-->
  </div><!--ourProduct-odd-->
  
@else



  <div class="ourProduct-even">

  <div class="rightBlockProduct col-lg-6"><img src="{{ asset('/files/products/' . $product->id . '/' . 'thumb-' . $product->image) }}" style="" alt="{{ $product->name }}">  </div><!--rightBlockProduct-->  
   <div class="leftBlockProduct col-lg-6">
        <div class="titleProduct"> <h2>{{ $product[App::getLocale().'_name'] }}</h2></div>
        <div class="descriptionProduct"> 
           <p>{!! $product[App::getLocale().'_description'] !!}
</p>
        </div>
    </div><!--leftBlockProduct-->

  </div><!--ourProduct-even-->
  @endif
@endforeach
</div><!--container-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection