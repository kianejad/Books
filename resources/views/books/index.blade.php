@extends('layouts.main')
@section('title', 'Books')
@section('content')
    <div class="container">
        @if(isset($success))
            {{$success}}
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Book Name</th>
                <th scope="col">Author</th>
                <th scope="col">Publisher</th>
                <th scope="col">Price</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->created_at }}</td>
                    <td>{{ $book->price }}R</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
