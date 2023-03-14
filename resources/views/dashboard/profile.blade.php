@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<section class="section">
    <div class="section-header">
      <h1>Profile</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Profile</div>
      </div>
    </div>
    <div class="section-body">
      <h2 class="section-title">Hi, {{ auth()->user()->name }}!</h2>
      <p class="section-lead">
        Change information about yourself on this page.
      </p>

      <div class="card">
        <form method="POST" action="{{ route('user-profile-information.update') }}">
            @csrf
            @method('PUT')
          <div class="card-header">
            <h4>Edit Profile</h4>
          </div>
          <div class="card-body">
              <div class="row">
                <div class="form-group col-12">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}">
                  <div class="invalid-feedback">
                    Please fill in the first name
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-7 col-12">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}">
                  <div class="invalid-feedback">
                    Please fill in the email
                  </div>
                </div>
                <div class="form-group col-md-5 col-12">
                  <label for="role">Role</label>
                  <input type="tel" class="form-control" id="role" name="role" value="{{ auth()->user()->role }}" disabled>
                </div>
            </div>
          </div>
          <div class="card-footer text-right">
            <button class="btn btn-primary">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
</section>

@endsection
