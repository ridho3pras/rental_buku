<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Buku | @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    {{-- Bootstarp icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   
</head>
<body>
    {{-- navbar --}}
    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar  navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Rental Buku</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
   
    {{-- body content --}}
        <div class="body-content h-100 ">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block " id="navbarTogglerDemo01" style="padding-right: 0">
                    @if (Auth::user())
                        {{-- admin menu --}}
                        @if(Auth::user()->role_id ==1)              
                            <a href="/dashboard" @if( request()->route()->uri == 'dashboard') class="active" @endif>Dashboard</a>
                            <a href="/books" @if( request()->route()->uri == 'books' || request()->route()->uri == 'book-add' || request()->route()->uri == 'book-edit/{slug}' || request()->route()->uri == 'book-delete/{slug}' || request()->route()->uri == 'book-deleted') class="active" @endif>Books</a>
                            <a href="/categories" @if( request()->route()->uri == 'categories' ||  request()->route()->uri == 'category-add' ||  request()->route()->uri == 'category-delete/{slug}' ||  request()->route()->uri == 'category-edit/{slug}' ||  request()->route()->uri == 'category-deleted') class="active" @endif>Categories</a>
                            <a href="/users" @if( request()->route()->uri == 'users' || request()->route()->uri == 'registered-users' || request()->route()->uri == 'user-detail/{slug}' || request()->route()->uri == 'user-delete/{slug}' || request()->route()->uri == 'user-banned') class="active" @endif>Users</a>
                            <a href="/rent-logs" @if( request()->route()->uri == 'rent-logs') class="active" @endif>Rent Log</a>
                            <a href="/" @if( request()->route()->uri == '/') class="active" @endif>Books List</a>
                            <a href="/book-rent" @if( request()->route()->uri == 'book-rent') class="active" @endif>Book Rent</a>
                            <a href="/book-return" @if( request()->route()->uri == 'book-return') class="active" @endif>Book Return</a>
                            <a href="/logout">Logout</a>

                        {{-- client menu --}}
                        @else
                            <a href="/" @if( request()->route()->uri == '/') class="active" @endif>Books List</a>
                            <a href="/profile" @if( request()->route()->uri == 'profile') class="active" @endif>Profile</a>
                            <a href="/logout">Logout</a>
                        @endif

                    @else
                    <a href="/login">Login</a>
                    @endif
                </div>
                <div class="content p-5 col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>