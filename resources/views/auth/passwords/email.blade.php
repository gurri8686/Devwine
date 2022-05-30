@include('includes.header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-align-center form_data login-form">
                <h2 class="text-center">{{ __('Reset Password') }}</h2>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        <div class="form-group">
                        @csrf
                        <label for="email" class="col-md-4 col-form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                                     @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                      

                        <div class="row mb-0">
                            <div class="col-md-12">
                                <div class="reset-pasword-box">
                                <button type="submit" class="rounded-pill wine-btn">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
