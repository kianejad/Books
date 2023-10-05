@extends('layouts.main')
@section('title', 'create')
@section('content')
    <div class="container">

        <form action="{{ route('books.update', $book) }}" method="POST" class="d-flex flex-column gap-3 mt-4">
            @csrf
            @method('PUT')
            <div class="form-group">

                <label for="title">Book Name</label>
                <input
                    value="{{ $book->title }}"
                    type="text"
                    class="form-control @error('title') is-invalid @enderror"
                    id="title"
                    name="title"
                    placeholder="Enter book name"
                />
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input
                    value="{{ $book->author }}"
                    type="text"
                    class="form-control @error('author') is-invalid @enderror"
                    id="author"
                    name="author"
                    placeholder="Enter author name"
                />
                @error('author')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input
                    value="{{  $book->description  }}"
                    type="text"
                    class="form-control @error('description') is-invalid @enderror"
                    id="description"
                    name="description"
                    placeholder="Enter description"
                />
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">

                <label for="publisher">isbn</label>
                <input
                    value="{{ $book->isbn }}"
                    type="text"
                    class="form-control @error('publisher') is-invalid @enderror"
                    id="isbn"
                    name="isbn"
                    placeholder="Enter isbn name"
                />
                @error('isbn')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input
                    value="{{ $book->price }}"
                    type="number"
                    class="form-control @error('price') is-invalid @enderror"
                    id="price"
                    name="price"
                    placeholder="Enter price"
                />
                @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
