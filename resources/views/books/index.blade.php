@extends('layouts.main')
@section('title', 'Books')
@section('content')
    <div class="container">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Book Name</th>
                <th scope="col">Author</th>
                <th scope="col">Publisher</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    {{-- max length of title is 20 characters --}}
                    <td>{{ Str::limit($book->title, 20) }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->created_at }}</td>
                    <td>{{ $book->price }}R</td>
                    <td>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-success"><i
                                class="fas fa-eye"></i> Show</a>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary"><i
                                class="fas fa-edit"></i> Edit</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i
                                    class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
