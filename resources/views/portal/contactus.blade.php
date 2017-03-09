@extends('portal.layout.main')


@section('content')

    <section id="contact-info">
        
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="gmap">
                           <iframe width="100%" height="300" src="http://www.citymaps.ie/create-google-map/map.php?width=100%&amp;height=300&amp;hl=en&amp;q=%20Domino's%20Pizza%20As-Sakhrah%20Al-Musharrafah%20St.%20Amman%20Jordan+(%D8%A7%D9%84%D8%B4%D8%B1%D9%83%D8%A9%20%D8%A7%D9%84%D8%B9%D8%B1%D8%A8%D9%8A%D8%A9%20%D8%A7%D9%84%D8%A7%D8%B3%D8%AA%D8%B1%D8%A7%D9%84%D9%8A%D8%A9)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="http://www.mapsdirections.info/medir-distancia-area.html">Medir Distancias Mapa</a> en <a href="http://www.mapsdirections.info/">www.mapsdirections.info</a></iframe><br />
                        </div>
                    </div>

                    <div class="col-md-6 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>{{@trans('contact_us.head_office')}}</h5>
                                    <p>{{@trans('contact_us.dec_head')}}</br>{{@trans('contact_us.amman')}}</p>
                                    <p>{{@trans('contact_us.phone')}}:+962 6 4205 859 <br>
                                   {{@trans('contact_us.email')}}:info@arabaust.com</p>
                                </address>

                                <address>
                                    <h5>{{@trans('contact_us.free_office')}}</h5>
                                    <p>{{@trans('contact_us.dec_zarqa')}}</br> {{@trans('contact_us.zarqa')}}</p>
                                    <p>{{@trans('contact_us.phone')}}:+962 6 4777611 <br>
                                    {{@trans('contact_us.email')}}:info@arabaust.com</p>
                                </address>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

  {!! Form::open(['method' => 'POST', 'url' => route('contactus.store'),'files' => true , 'class' => 'form-horizontal']) !!}

       {!! csrf_field() !!}


    <section id="contact-page">
        <div class="container">
            <div class="center">        
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
    <section id="bottom">

    </section><!--/#bottom-->
@endsection