@extends('layouts.main')

@section('title', 'Delete Book')

@section('content')
<h2>Are you sure to delete book {{ $book->title }}?</h2>
<div>
    <a href="/book-destroy/{{ $book->slug }}" class="btn btn-danger me-5">Sure</a>
    <a href="/books" class="btn btn-primary">Cancle</a>
</div>
@endsection