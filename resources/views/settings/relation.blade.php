@extends('app')

@section('content')
    <div class="card">

       
        <div class="card-header">
            <h2><i class="zmdi zmdi-info-outline zmdi-hc-fw"></i> @lang('relation.page_title')</h2>
        </div>

        <div class="card-body card-padding">

        @include('partials.form-errors')

        {!! Form::model($relation, ['method' => 'put', 'url' => route('settings.relation').'/' . $relation->id, 'class' => 'form-horizontal', 'files' => true]) !!}

        <div class="card-body card-padding">
            
            <!-- Terms & Conditions Form Input -->
            <div class="row">               
                <div class="col-sm-10">
                    <div class="form-group">
                        <label> @lang('relation.en_relation') :</label>
                        <div class="fg-line">
                            {!! Form::textarea('en_relation', null, ['class' => 'form-control summernote' , 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
            </div>


            <!-- Terms & Conditions Form Input -->
            <div class="row">               
                <div class="col-sm-10">
                    <div class="form-group">
                        <label> @lang('relation.ar_relation') :</label>
                        <div class="fg-line">
                            {!! Form::textarea('ar_relation', null, ['class' => 'form-control summernote' , 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
            </div>


<div class="row">               
                <div class="col-sm-12">
            <div class="form-group mode">
                {!! Form::label('image', @trans('products.image').' :') !!}
                    @if(!empty($relation->image))
                        <div class="col-sm-3">
                            <div class="fg-line">
                                {!! Form::text('image', null, ['class' => 'form-control input-sm', 'disabled' => 'disabled']) !!}
                            </div>
                        </div>
                        <div class="col-md-1">
                            @if(!empty($relation->image))
                                @if(is_dir(public_path() . '/files/relation/' . $relation->id))
                                    <a class="btn btn-info btn-sm" href="{{ asset('/files/relation/' . $relation->id . '/' . $relation->image) }}" target="_blank">@lang('common.view')</a>
                                @endif
                            @endif
                        </div>
                        <div class="col-sm-6">
                    @else
                        <div class="col-sm-10">
                    @endif
                        <div class="fg-line">
                            {!! Form::file('image', ['class' => 'form-control input-sm']) !!}
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="row">
                <p><strong>@lang('common.last_update'):</strong> {{ $relation->updated_at}} <strong>@lang('common.by'):</strong> {{ $relation->updated_by }}</p>
            </div>
            
            <div class="row">
                <div class="form-group">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary btn-sm">@lang('common.save')</button>

                    </div>
                </div>
            </div>

        </div>
        {!! Form::close() !!}
    </div>

    </div>
@endsection
