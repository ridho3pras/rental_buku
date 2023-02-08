@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')



<h1>Welcome, {{ Auth::user()->username }}</h1>

<div class="row mt-5">
    <div class="col-lg-4">
        <a href="/books" class="custom-card">
            <div class="card-data book">
                <div class="row">
                    <div class="col-6">
                        <i class="bi bi-journal-bookmark"></i>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center">
                        <div class="card-desc">Books</div>
                        <div class="card-count">{{ $book_count }}</div>
                    </div>
                </div>
            </div>
          </a>
    </div>

    <div class="col-lg-4">
        <a href="/categories" class="custom-card">
            <div class="card-data category">
                <div class="row">
                    <div class="col-6">
                        <i class="bi bi-list-task"></i>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center">
                        <div class="card-desc">Categories</div>
                        <div class="card-count">{{ $category_count }}</div>
                    </div>
                </div>
            </div>
        </a>
    </div>


    <div class="col-lg-4">
        <a href="/users" class="custom-card">
            <div class="card-data user">
                <div class="row">
                    <div class="col-6">
                        <i class="bi bi-people"></i>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center">
                        <div class="card-desc">Users</div>
                        <div class="card-count">{{ $user_count }}</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="mt-5">
    <h2>#Rent Log</h2>
    <div class="">
        <x-rent-logs-table  :rentlog='$rent_logs'/>
    </div>
</div>


@endsection