@extends('frontend.master')

@section('frontend_content')
     <!-- Login\Register Box -->
     <section class="login-box my-5">
        <div class="container">
            <div class="row">
                {{-- <h4 class="text-center mb-3 ">Welcome to Projukti 71 Online Shop! Please login.</h4> --}}
                <div class="col-xl-4 offset-xl-4 col-xl-4 offset-lg-4">
                    <div class="login">
                        <form action="{{ route('customer.login') }}" method="POST">
                            @csrf
                            <label>Email </label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Enter Your Phone Number">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                            <label>Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required  placeholder=" Your Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror


                            <input type="submit" class="btn btn-primary mt-2 btn-sm" value="Submit">

                            <span>Don't Have An Account? <a href="{{ route('customer.registration') }}" style="color: rgb(63, 60, 60); text-decoration: none; font-weight: 600;">Create Account</a></span>
                        </form>
                        <span>or</span>
                        <div class="scocial-login">
                            <button class="btn-f"><a href=""><i class="fab fa-facebook-f"></i> Facebook</a></button>
                            <button class="btn-g"><a href=""><i class="fab fa-google-plus-g"></i> Google</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
