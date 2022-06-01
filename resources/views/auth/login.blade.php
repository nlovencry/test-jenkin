@extends('form_login.template')

@section('content')


<div class="containerss">
    <div>
        <div class="signin-signup">
            {{-- <form method="POST" action="{{ route('login') }}"> --}}

            <form action="{{route('login')}}" method="POST" class="sign-in-form">
                @csrf
                <h2 class="title">Login</h2> <br>
                @if($errors)
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $error }}</strong>
                </div>
                @endforeach
                @endif
                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input id="username" type="username" @error('username') is-invalid @enderror" name="username"
                        value="{{ old('username') }}" required autocomplete="username" autofocus
                        placeholder="Username/Email">
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="password" type="password" @error('password') is-invalid @enderror" name="password"
                        required autocomplete="current-password" placeholder="Password" />

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
            </form>
            @include('auth.register')
        </div>
    </div>

    <div class="panels-containerss">
        <div class="panel left-panel">
            <div class="content">
                <h2>Belum punya akun?</h2>
                <p>
                    Silahkan klik tombol ini!
                </p>
                <button class="btn transparent" id="sign-up-btn">
                    Register
                </button>
            </div>
            <img src="{{ asset('frontend_login/img/log.svg')}}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h2>Sudah punya akun?</h2>
                <p>
                    Silahkan klik tombol ini!
                </p>
                <button class="btn transparent" id="sign-in-btn">
                    Login
                </button>
            </div>
            <img src="{{ asset('frontend_login/img/register.svg')}}" class="image" alt="" />
        </div>
    </div>
</div>
@endsection
