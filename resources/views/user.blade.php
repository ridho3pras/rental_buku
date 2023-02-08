@extends('layouts.main')

@section('title', 'Users')

@section('content')

<h1>User List</h1>

<div class="mt-5">
    <a href="user-banned" class="btn btn-danger me-3">View Banned User</a>
    <a href="/registered-users" class="btn btn-primary">New Registered User</a>
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
            @foreach ($users as $item)
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
                    <a href="/user-detail/{{ $item->slug }}">detail</a>
                    <a href="/user-delete/{{ $item->slug }}">banned</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection