@extends('layouts.custom')

@section('title', 'Verify Email')

@section('content')

<div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        <div class="login-brand">
            <img src="../assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Check Your Email For Verification</h4>
            </div>
    
            <div class="card-body">
                @if (session('status') == 'verification-link-sent')
                    <div class="alert alert-success" role="alert">
                        A new verification link has been sent
                    </div>
                @endif
                <p class="text-center">Thank you for registering! An email has been sent to your email address. Please check your email and click on the verification link to proceed.</p>
                <form method="POST" action="{{ route('verification.send') }}" class="needs-validation" novalidate="">
                    @csrf
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                            Resend Verification Email
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-5 text-muted text-center">
            Don't have an account? <a href="{{ route('register') }}">Create One</a>
        </div>
        <div class="simple-footer">
            Copyright &copy; Stisla 2018
        </div>
    </div>
</div>
@endsection    