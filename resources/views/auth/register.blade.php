<form method="POST" class="sign-up-form" action="{{ route('register') }}">
    @csrf
    <h2 class="title">Register</h2>
    <div class="input-field">
        <i class="fas fa-user"></i>
        <input id="name" type="text" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required
            autocomplete="name" autofocus placeholder="Name">
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="input-field">
        <i class="fas fa-user"></i>
        <input id="username" type="username" @error('username') is-invalid @enderror" name="username"
            value="{{ old('username') }}" required autocomplete="username" placeholder="Username">
        @error('username')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="input-field">
        <i class="fas fa-envelope"></i>
        <input id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
            required autocomplete="email" placeholder="Email">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input id="password" type="password" @error('password') is-invalid @enderror" name="password" required
            autocomplete="new-password" placeholder="Password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password"
            placeholder="Confirm Password">
    </div>
    <button type="submit" class="btn btn-primary">
        {{ __('Register') }}
    </button>
</form>
