  @extends('portal.layout.main')


@section('content')<section id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2>{{@trans('about_us.company_name')}}</h2>
				<p class="lead">{!! $aboutus[App::getLocale().'_about'] !!}</p>
			</div>
			
			<!-- about us slider -->
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
				  	<ol class="carousel-indicators visible-xs">
					    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-slider" data-slide-to="1"></li>
					    <li data-target="#carousel-slider" data-slide-to="2"></li>
				  	</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img class="img-responsive wow fadeInDown about" src="{{ asset('/files/about_us/' . $aboutus->id . '/' . $aboutus->image) }}" alt="{{ $aboutus->name }}"  style="height: 620px; width: 100%;">
					   </div>
					   
					</div>
					
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->
			
			
			<!-- Our Skill -->
			<div class="skill-wrap clearfix">
			
				<div class="center wow fadeInDown">
					<h2>{{@trans('relation.title_relation')}}</h2>
					<p class="lead">{!! $relation[App::getLocale().'_relation'] !!}</p>
				</div>
				
				<div class="row">
		
					<!-- about us slider -->
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
				  	<ol class="carousel-indicators visible-xs">
					    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-slider" data-slide-to="1"></li>
					    <li data-target="#carousel-slider" data-slide-to="2"></li>
				  	</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img class="img-responsive wow fadeInDown about" src="{{ asset('/files/relation/' . $relation->id . '/' . $relation->image) }}" alt="{{ $relation->name }}"  style="height: 620px; width: 100%;">
					   </div>
					   
					</div>
					
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->
					
				</div>
	
            </div><!--/.our-skill-->
			

		</div><!--/.container-->
    </section><!--/about-us-->@endsection