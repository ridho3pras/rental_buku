@extends('layouts.main')

@section('title', 'Profile')

@section('content')

<div class="mt-2">
    <h3>Your Rent Log</h3>
    <x-rent-logs-table  :rentlog='$rent_logs'/>
</div>

@endsection