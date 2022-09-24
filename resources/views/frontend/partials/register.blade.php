@extends('frontend.master')

@section('frontend_content')
     <!-- Login\Register Box -->
  <section class="login-box my-5">
    <div class="container">
        <div class="row">
            {{-- <h4 class="text-center mb-3 ">Welcome to Projukti 71 Online Shop! Please login.</h4> --}}
            <div class="col-xl-4 offset-xl-4">
                <div class="login">
                    <form action="{{ route('customer.registration') }}" method="POST">
                        @csrf
                        <label>User Name*</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus  placeholder="Enter Your Name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <label>E-mail*</label>
                        <input type="email" class="form-control" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Enter Your Email Number">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <label>Phone</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Enter Your Phone Number">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <label> Password*</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder=" Your Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <label> Confirm Password*</label>
                        <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder=" Confirm Your Password">

                        <input type="submit" class="btn btn-primary mt-2 btn-sm" value="Submit">

                        <span>Already Have An Account? <a href="{{ route('customer.login') }}" style="color: rgb(63, 60, 60); text-decoration: none; font-weight: 600;">login</a></span>
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
    <br>
    <br>
</section>
@endsection
