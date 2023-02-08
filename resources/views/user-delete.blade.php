@extends('layouts.main')

@section('title', 'Delete User')

@section('content')
<h2>Are you sure to banned user {{ $user->username }}?</h2>
<div>
    <a href="/user-destroy/{{ $user->slug }}" class="btn btn-danger me-5">Sure</a>
    <a href="/users" class="btn btn-primary">Cancle</a>
</div>
@endsection