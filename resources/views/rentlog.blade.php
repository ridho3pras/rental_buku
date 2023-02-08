@extends('layouts.main')

@section('title', 'Rent Log')

@section('content')

<h1>Rent Log List</h1>

<div class="mt-5">
    <x-rent-logs-table  :rentlog='$rent_logs'/>
</div>

@endsection