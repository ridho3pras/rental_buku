@extends('layouts.main')

@section('title', 'Category')

@section('content')
<h1>Category List</h1>

<div class="mt-5">
    <a href="category-deleted" class="btn btn-warning me-3">View Delete Data</a>
    <a href="category-add" class="btn btn-primary">Create new category</a>
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
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <a href="category-edit/{{ $item->slug }}">edit</a>
                    <a href="category-delete/{{ $item->slug }}">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection