@extends('layouts.main')

@section('title', 'Book Rent')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<h1 class="mb-5"> Book Rent Form </h1>

    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3"> 

        <div class="mt-5">
            @if (session('message'))
            <div class="alert {{ session('alret-class') }}">
                {{ session('message') }}
            </div>
            @endif
        </div>

    <form action="book-rent" method="post">
    @csrf
        <div class="mb-3">
            <label for="user" class="form-label">User</label>
            <select name="user_id" id="user" class="form-control userbox" >
                @foreach ($users as $item)
                    <option value=""></option>
                    <option value="{{ $item->id }}">{{ $item->username }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="book" class="form-label">Book</label>
            <select name="book_id" id="book" class="form-control bookbox">
                @foreach ($books as $item)
                    <option value=""></option>
                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-primary w-25">Submit</button>
        </div>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(".userbox").select2({
        placeholder: "Select User",
        allowClear: true
    });

    $(".bookbox").select2({
        placeholder: "Select Book",
        allowClear: true
    });
</script>

@endsection