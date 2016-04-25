@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">{{ $book->title }}</div>

            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>Author's Last Name</td>
                        <td>{{ $book->last_name }}</td>
                    </tr>
                    <tr>
                        <td>Author's First Name</td>
                        <td>{{ $book->first_name }}</td>
                    </tr>
                    <tr>
                        <td>Subject</td>
                        <td>{{ $book->subject->subject }}</td>
                    </tr>
                    <tr>
                        <td>Publisher</td>
                        <td>{{ $book->publisher }}</td>
                    </tr>
                    <tr>
                        <td>ISBN</td>
                        <td>{{ $book->isbn }}</td>
                    </tr>
                    <tr>
                        <td>In Stock</td>
                        <td>{{ $inStock }}</td>
                    </tr>
                </table>
                @if($inStock > 0)
                {{ Form::open(['url' => 'checkout']) }}
                {{ Form::hidden('id', $book->id) }}
                <div class="form-group">
                    {{ Form::submit('Checkout Book', ['class' => 'form-control btn btn-primary']) }}
                </div>
                {{ Form::close() }}
                @endif

            </div>
        </div>
    </div>
@endsection