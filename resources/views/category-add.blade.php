@extends('layouts.main')

@section('title', 'Add Category')

@section('content')

<h1>Add New Category</h1>

<div class="mt-3">
    <a href="/categories" class="btn btn-warning me-3">Back</a>
</div>  

<div class="mt-3 w-50">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="category-add" method="post">
        @csrf
        <div>
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Category Name" required value="{{ old('name') }}">
        </div>

        <div class="mt-3">
            <button class="btn btn-success" type="submit">Add Category</button>
        </div>
    </form>
</div>

@endsection