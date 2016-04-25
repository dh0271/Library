@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome to the Library Management System</div>

                    <div class="panel-body">
                        <h3>Add Book</h3>

                        @include('books.forms.partial', ['submit' => 'Add Book', 'route' => 'book'])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection