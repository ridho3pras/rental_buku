@extends('layouts.main')

@section('title', 'Banned Users')

@section('content')

<h1>Banned User List</h1>

<div class="mt-5">
    <a href="/users" class="btn btn-warning me-3">Back</a>
</div>

<div class="mt-5">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<div class="my-5">
    <table class="table table-dark table-hover table-responsive-sm my-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banUsers as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->username }}</td>
                <td>
                    @if($item->phone)
                        {{ $item->phone }}
                    @else - 
                    @endif
                </td>
                <td>
                    <a href="/user-restore/{{ $item->slug }}">restore</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection