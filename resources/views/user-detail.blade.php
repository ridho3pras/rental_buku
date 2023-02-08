@extends('layouts.main')

@section('title', 'Detail User')

@section('content')

<h1>Detail User</h1>

@if($user->status == 'inactive')
    <div class="mt-5">
        <a href="/registered-users" class="btn btn-warning">Back</a>
        <a href="/user-aprrove/{{ $user->slug }}" class="btn btn-info">Approve User</a>
    </div>
@else
    <div class="mt-5">
        <a href="/users" class="btn btn-warning">Back</a>
    </div>
@endif

<div class="mt-5">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<div class="my-5 w-50">
    <div class="mb3">
        <label for="" class="form-label">Username</label>
        <input type="text" class="form-control" readonly value="{{ $user->username }}">
    </div>
    <div class="mb3">
        <label for="" class="form-label">Phone</label>
        <input type="text" class="form-control" readonly value="{{ $user->phone }}">
    </div>
    <div class="mb3">
        <label for="" class="form-label">Addres</label>
        <textarea name="" id="" cols="30" rows="7" class="form-control" readonly style="resize: none">{{ $user->address }}</textarea>
    </div>
    <div class="mb3">
        <label for="" class="form-label">Status</label>
        <input type="text" class="form-control" readonly value="{{ $user->status }}">
    </div>
</div>

@if($user->status == 'active')
    <div class="mt-5">
        <h3>User Rent Log</h3>
        <x-rent-logs-table  :rentlog='$rent_logs'/>
    </div>
@endif

@endsection