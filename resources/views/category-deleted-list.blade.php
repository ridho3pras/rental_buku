@extends('layouts.main')

@section('title', 'Deleted Category')

@section('content')
<h1>Deleted Category List</h1>

<div class="mt-5">
    <a href="categories" class="btn btn-warning me-3">Back</a>
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
            @foreach ($deletedCategories as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <a href="category-restore/{{ $item->slug }}">restore</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection