@extends('portal.layout.main')

<?php use Admailer\Models\BaseModel; ?>

@section('content')

@foreach($products as $product)
@if ($product['id'] % 2 == 0) 
   <div class="mianBlock">
<div class="container productBlock">
  <div class="titleProducts">{{ $product[App::getLocale().'_name'] }}</div>
  <div class="col-lg-4 col-md-4 no-padding">
    <div class="products_img"> <img class="img-responsive" src="{{ asset('/files/products/' . $product->id . '/' . 'thumb-' . $product->image) }}" style="" alt="{{ $product->name }}" ></div>
  </div>
  <div class="col-lg-8 col-md-8">
    <div class="products_description">
      <p>
       {!! $product[App::getLocale().'_description'] !!}
      </p>
    </div>
  </div>
</div><!--productBlock-->


@else


<div class="container productBlock">
  <div class="titleProducts">{{ $product[App::getLocale().'_name'] }}</div>
  <div class="col-lg-4 col-md-4 no-padding pull-right">
    <div class="products_img"><img src="{{ asset('/files/products/' . $product->id . '/' . 'thumb-' . $product->image) }}" style="" alt="{{ $product->name }}"></div>
  </div>
  <div class="col-lg-8 col-md-8">
    <div class="products_description">
      <p>
        {!! $product[App::getLocale().'_description'] !!}
      </p>
    </div>
  </div>
</div><!--productBlock-->
</div><!--mianBlock-->


@endif
@endforeach

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@endsection