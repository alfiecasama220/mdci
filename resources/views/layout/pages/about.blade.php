@extends('layout.pages.app')

@section('layout')

<div class="container mt-4">
    <h3 class="text-dark font-weight-bold">About Us</h3>
    <p class="text-secondary">
        Members
    </p>

    <!-- Team Members Section -->
    <div class="row">
        @foreach($members as $member)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100" style="border-radius: 10px;">
                    <div class="card-body text-center">
                        <h5 class="card-title text-dark font-weight-bold">{{ $member['name'] }}</h5>
                        <p class="text-muted">{{ $member['role'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Custom CSS -->
<style>
    body {
        background-color: #f4f6f9;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .card {
        background-color: #ffffff;
        transition: transform 0.3s ease;
    }
    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }
    .card-title {
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
    }
</style>

@endsection
