@extends('layouts.default', [
    'title' => 'Login'
])

@section('content')
<main class="wrapper">
    <main class="container">
        <div class="mb-5" style="margin:0 auto;text-align:center;"></div>
        <form method="POST" action="{{ route('auth.login.authenticate') }}">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="text-2xl fw-semibold mb-2">Log In</div>
                    <div class="card card-body">
                        <div class="mb-3">
                            <label class="d-block mb-1 text-xs fw-semibold text-uppercase text-muted" for="username">Username</label>
                            <input name="username" type="text" class="form">
                        </div>
                        <div class="mb-3">
                            <label class="d-block mb-1 text-xs fw-semibold text-uppercase text-muted" for="password">Password</label>
                            <input name="password" type="password" class="form">
                        </div>
                        <div class="mb-3">
                            <input id="remember-me" name="remember" type="checkbox">
                            <label for="remember-me">Remember me</label>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-success fw-semibold text-uppercase text-sm px-4">
                                Log In
                            </button>
                            <a href="{{ env('APP_URL') }}/password/reset" class="text-sm">Forgot your password?</a>
                        </div>
                        <div class="divider mx-0 my-3">New to {{ env('APP_NAME') }}?</div>
                        @if (site_setting('registration_enabled'))
                            <a href="{{ route('auth.register.index') }}" class="btn btn-primary d-block text-center w-100 fw-semibold text-uppercase text-sm">Create An Account</a>
                        @endif
                    </div>
                </div>
            </div>
        </form>
    </main>
@endsection