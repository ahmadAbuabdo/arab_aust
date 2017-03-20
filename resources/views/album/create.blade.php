@extends('app')

@section('content')
    <div class="card">

        {!! Form::open(['method' => 'POST', 'url' => route('album.store'), 'class' => 'form-horizontal', 'files' => true ]) !!}
        <div class="card-header">
            <h2>@lang('album.create_page_title')</h2>
        </div>

        @include('album.form')
        {!! Form::close() !!}
    </div>
@endsection
