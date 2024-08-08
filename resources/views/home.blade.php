@extends('layouts/.app')

@section('title', 'Home')

@section('content')
<h1>Welcome to Home Page!</h1>
<p>This is the Home of page of the Laravel website</p>

 <!-- Search Bar -->
 <form action="{{ route('search') }}" method="GET" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
@endsection