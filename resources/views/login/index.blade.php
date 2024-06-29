@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>
          {{ session('success') }}
        </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>
          {{ session('loginError') }}
        </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Please log in</h1>
            <form action="/login" method="POST">
              @csrf
              <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
          
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" autofocus required value="{{ old('email') }}">
                <label for="email">Email</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>

              <button class="btn btn-primary w-100 py-2" type="submit">Log in</button>
            </form>
            <small class="d-block text-center mt-3">
                Nor registered? <a href="/register">Register Now!</a>
            </small>
          </main>
        
    </div>
</div>
@endsection