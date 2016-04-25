@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">Search Results</div>
            <div class="panel panel-body">
                @if(!$books)
                    No data
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <td>Title</td>
                            <td>Author's Last Name</td>
                            <td>Author's First Name</td>
                            <td>ISBN</td>
                            <td>Subject</td>
                            <td>Publisher</td>
                        </tr>
                    </thead>
                    @foreach ($books as $book)
                    <tr>
                        <td><a href="{{ url('/book', $book->id) }}">{{ $book->title }}</a></td>
                        <td>{{ $book->last_name }}</td>
                        <td>{{ $book->first_name }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->subject_id }}</td>
                        <td>{{ $book->publisher }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection