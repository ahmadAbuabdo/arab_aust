@extends('app')

@section('content')
    <div class="card">

        {!! Form::model($album, ['method' => 'put', 'url' => route('album.index').'/'. $album->id, 'class' => 'form-horizontal','files' => true ]) !!}
            <div class="card-header">
                <h2>@lang('common.edit') {{ $album['title'] }} </h2>
            </div>

            @include('album.form')
        {!! Form::close() !!}
    </div>
@endsection