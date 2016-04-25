{!! Form::open(['url' => $route]) !!}

<div class="form-group col-md-6">
    {{ Form::label('Title', null, ['class' => 'control-label']) }}
    {{ Form::text('title', null, ['class' => 'form-control']) }}
    <span class="help-block"> {{ $errors->first('title') }}</span>
</div>
<div class="form-group col-md-6">
    {{ Form::label('Subject', null, ['class' => 'control-label']) }}
    {{ Form::select('subject_id', $subjects, null, ['class' => 'form-control']) }}
    <span class="help-block"> {{ $errors->first('subject_id') }}</span>
</div>
<div class="form-group col-md-6">
    {{ Form::label('ISBN', null, ['class' => 'control-label']) }}
    {{ Form::text('isbn', null, ['class' => 'form-control']) }}
    <span class="help-block"> {{ $errors->first('isbn') }}</span>
</div>
<div class="form-group col-md-6">
    {{ Form::label('Publisher', null, ['class' => 'control-label']) }}
    {{ Form::text('publisher', null, ['class' => 'form-control']) }}
    <span class="help-block"> {{ $errors->first('publisher') }}</span>
</div>
<div class="form-group col-md-6">
    {{ Form::label('Author\'s Last Name', null, ['class' => 'control-label']) }}
    {{ Form::text('last_name', null, ['class' => 'form-control']) }}
    <span class="help-block"> {{ $errors->first('last_name') }}</span>
</div>
<div class="form-group col-md-6">
    {{ Form::label('Author\'s First Name', null, ['class' => 'control-label']) }}
    {{ Form::text('first_name', null, ['class' => 'form-control']) }}
    <span class="help-block"> {{ $errors->first('first_name') }}</span>
</div>

<div class="form-group">

    {!! Form::submit($submit, ['class' => 'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}