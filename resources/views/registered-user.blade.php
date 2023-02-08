@extends('layouts.main')

@section('title', 'Registered Users')

@section('content')

<h1>New Registered User List</h1>

<div class="mt-5">
    <a href="/users" class="btn btn-warning">Back</a>
</div>

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
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection