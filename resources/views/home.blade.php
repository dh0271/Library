@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome to the Library Management System</div>

                <div class="panel-body">
                    <h3>My Books </h3>

                    @if(!$books->count())
                        You have no books checked out! Maybe you should change that.
                    @else
                        <table class="table">
                            <thead>
                                <td>Title</td>
                                <td>Author's Last Name</td>
                                <td>Author's First Name</td>
                                <td>Subject</td>
                                <td>Publisher</td>
                                <td>ISBN</td>
                                <td>Check-In</td>
                            </thead>
                            @foreach($books as $book)
                                <tr>
                                    <td> {{ $book->title }}</td>
                                    <td> {{ $book->last_name }}</td>
                                    <td> {{ $book->first_name }}</td>
                                    <td> {{ $book->subject->subject }}</td>
                                    <td> {{ $book->publisher }}</td>
                                    <td> {{ $book->isbn }}</td>
                                    <td>

                                        {!! Form::open(['url' => 'checkin'])  !!}
                                        {!! Form::hidden('id', $book->id) !!}
                                        {!! Form::submit('Check-In', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
            <div class="panel panel-footer">
                <div class="panel-heading">Search Criteria</div>
                <div class="panel-body">
                    @include('books.forms.partial', ['submit' => 'Search Book', 'route' => 'search'])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
