@extends('layouts.app')

@section('title', 'Register page')

@section('content')

<section class="h-100 mt-5">
    <div class="card w-100 bg-transparent text-light text-center border border-light">
        <div class="card-title p-3">
            <h1>Register page</h1>
        </div>
        <div class="card-body text-start">
            <form class="px-5" action="{{ route('register.action') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                        <small class="text-danger">* {{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <small class="text-danger">* {{$message}}</small>
                    @enderror
                    <div class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @error('password')
                        <small class="text-danger">* {{$message}}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    @error('password_confirmation')
                        <small class="text-danger">* {{$message}}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</section>

@endsection
