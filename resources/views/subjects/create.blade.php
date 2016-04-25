@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">Add Subject</div>
            <div class="panel-body">
                {!! Form::open(['url' => '/subject']) !!}

                <div class="form-group">
                    {!! Form::label('Subject', null, ['class' => 'control-label']) !!}
                    {!! Form::text('subject', null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('Add Subject', ['class' => 'form-control btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection