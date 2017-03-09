@extends('portal.layout.main')


@section('content')

    <section id="about-us" class="no-margin">
			<!-- about us slider -->
			<div id="about-slider " >
				<img class="img-responsive wow fadeInDown about" src="{{ asset('/files/quality/' . $quality->id . '/' . $quality->image) }}" alt="{{ $quality->name }}" style="height: 620px; width: 100%;">

			</div><!--/#about-slider-->
			<br>
			<div class="center wow fadeInDown">
				<h2>{{@trans('terms.quality')}}</h2>
				<p class="lead">{!! $quality[App::getLocale().'_terms'] !!}</p>
			</div>
			
	</section>
    

@endsection