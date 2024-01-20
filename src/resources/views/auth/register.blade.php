@extends('auth-layout')
@section('content')
    <h1>{{ $title }}</h1>
    <form method="post" action="/register">
        @csrf
        <div class="mb-3">
            <label for="register-name" class="form-label">User name</label>
            <input type="text" id="register-name" name="name" class="form-control" autocomplete="off" autofocus>
        </div>
        <div class="mb-3">
            <label for="register-email" class="form-label">Email</label>
            <input type="email" id="register-email" name="email" class="form-control" autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="register-password" class="form-label">Password</label>
            <input type="password" id="register-password" name="password" class="form-control">
        </div>
        <div class="mb-3">
            <label for="confirm-password" class="form-label">Confirm Password</label>
            <input type="password" id="confirm-password" name="password_confirmation" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
@endsection
