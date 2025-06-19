@extends('base')

@section('content')

    <div class="d-flex justify-content-center align-items-center" style="min-height: 85vh;">
        <form method="POST" action="{{ route('login') }}" class="p-4 border rounded shadow" style="min-width: 300px; background: #fff;">
            @csrf
            <img src="{{asset('images/MDC-Logo-clipped.png')}}" alt="MDC Logo" class="mb-2" style="max-width: 150px; display: block; margin: 0 auto;">
            <h3 class="mb-4 text-center">Login</h3>
            <div class="mb-3">
                <label for="user_name" class="form-label">User Name</label>
                <input type="text" class="form-control" id="user_name" name="user_name" required autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>

@endsection
