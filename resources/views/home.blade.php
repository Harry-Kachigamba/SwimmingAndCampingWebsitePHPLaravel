@extends('layouts/.app')

@section('title', 'Home')

@section('content')
<h1 class="mb-5">Welcome to Home Page!</h1>
<br>
<div class="d-flex flex-column justify-content-center align-items-center">
    <h1 class="text-center mt-2">GWSC</h1><br>

    <!-- Search Bar -->
    <form action="{{ route('search') }}" method="GET" class="form-inline my-2 my-lg-0 d-flex w-100 justify-content-center">
        <input class="form-control mr-2" type="search" name="search" placeholder="Search" aria-label="Search" style="flex: 3;">
        <button class="btn btn-outline-success" type="submit" style="flex: 1;">Search</button>
    </form>
</div>

<div class="mt-5">
    <h4>Find what you need</h4>

    <div class="d-flex justify-content-between mt-3">
        <p>Destination</p>
        <div>
            <p>Min Price &nbsp Max Price</p>
        </div>
        <p>Services</p>
    </div>

    <div class="d-flex justify-content-between mt-3">
        <div class="border border-success p-5 mb-2 border-opacity-75"></div>
        <div class="border border-success p-5 mb-2 border-opacity-75"></div>
        <div class="border border-success p-5 mb-2 border-opacity-75"></div>
    </div>
</div>

<div class="mt-5">
    <h4>Best Deals</h4>
    <div class="border border-success p-5 mb-2 border-opacity-75"></div>
</div>

<div class="mt-5">
    <h4>Recommended Sites</h4>
    <div class="d-flex justify-content-between mt-3">
        <div class="border border-success p-5 mb-2 border-opacity-75"></div>
        <div class="border border-success p-5 mb-2 border-opacity-75"></div>
        <div class="border border-success p-5 mb-2 border-opacity-75"></div>
        <div class="border border-success p-5 mb-2 border-opacity-75"></div>
        <div class="border border-success p-5 mb-2 border-opacity-75"></div>
    </div>
</div>

@endsection