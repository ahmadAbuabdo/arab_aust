@extends('portal.layout.main')


@section('content')
	<section id="about-us" class="no-margin">
	    {{-- <div class="container"> --}}
			<!-- about us slider -->
			<div id="about-slider " >
				  <img class="img-responsive wow fadeInDown about" src="{{ asset('/files/relation/' . $relation->id . '/' . $relation->image) }}" alt="{{ $relation->name }}"  style="height: 620px; width: 100%;">
			</div><!--/#about-slider-->
			<br>
			<div class="center wow fadeInDown">
				<h2>{{@trans('relation.page_title')}}</h2>
				<p class="lead">{!! $relation[App::getLocale().'_relation'] !!}</p>
			</div>
			
		{{-- </div> --}}
	</section><!--/about-us-->
	
@endsection