@extends('layouts.app')

@section('content')
    <div id="page_login">
        <div class="justify-content-center" style="height: 100vh">

            <div class="card" style="position: fixed; top:20%; left: 30%; width: 35rem; height: 20rem;">

                <div class="card-body" style="padding: 2rem; background: white;">
                    <h3>Login</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="" style="display: flex; flex-direction: column; align-items: flex-start">
                            <label for="email" class="text-md-start">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus style="width: 30rem;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" style="display: flex; flex-direction: column; align-items: flex-start">
                            <label for="password" class="col-form-label text-md-start">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password" style="width: 30rem;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div style="display: flex; align-items: center; justify-content: start;">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
