@extends('layouts.main')

@section('title', 'Books')

@section('content')

<h1>Books List</h1>

<div class="mt-5">
    <a href="book-deleted" class="btn btn-warning me-3">View Delete Data</a>
    <a href="book-add" class="btn btn-primary">Add New Book</a>
</div>

<div class="mt-5">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
</div>

<div class="my-5">
    <table class="table table-dark table-hover table-responsive-sm my-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Code</th>
                <th>Title</th>
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->book_code }}</td>
                <td>{{ $item->title }}</td>
                <td>
                    @foreach ($item->categories as $category)
                        {{ $category->name }}
                        @if( !$loop->last)
                            ,
                        @endif

                    @endforeach
                </td>
                <td>{{ $item->status }}</td>
                <td>

                    <a href="/book-edit/{{ $item->slug }}" class="badge bg-warning"><span class="bi bi-pencil-square"></span></a>
                    <a href="/book-delete/{{ $item->slug }}" class="badge bg-danger"><span class="bi bi-trash"></span></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection