@extends('layouts.main')

@section('title', 'Deleted Book')

@section('content')
<h1>Deleted Book List</h1>

<div class="mt-5">
    <a href="/books" class="btn btn-warning me-3">Back</a>
</div>  

<div class="mt-5">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
</div>

<div>
    <table class="table table-dark table-hover table-responsive-sm my-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Code</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deletedBooks as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->book_code }}</td>
                <td>{{ $item->title }}</td>
                <td>
                    <a href="book-restore/{{ $item->slug }}">restore</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection