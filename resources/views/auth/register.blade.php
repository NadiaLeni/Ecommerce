@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style_signup.css">
</head>
<body>
    <section id="signup">
        <div class="signup-container">
            <div class="signup-left">
                <h1>Sign Up</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row-content">
                        <div class="signup-content">
                            <label for="name"> First Name</label>
                            <input id="name" type="text" name="firstName" required placeholder="Enter First Name">
                        </div>
                        <div class="signup-content">
                            <label for="name">Last Name</label>
                            <input id="name" type="text" name="lastName" required placeholder="Enter Last Name">
                        </div>
                    </div>
                    <div class="signup-content">
                        <label for="">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="signup-content">
                        <label for="">Address</label>
                        <input name="address" type="text" placeholder="Enter Address">
                    </div>
                    <div class="row-content">
                        <div class="signup-content">
                            <label for="">Phone Number</label>
                            <input name="phone" type="text" placeholder="Enter Phone Number">
                        </div>
                        <div class="signup-content">
                            <label for="">Date of Birth</label>
                            <input name="dob" type="date" placeholder="Enter date">
                        </div>
                    </div>
                    <div class="signup-content">
                        <label for="">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                 
                    </div>
                    <button type="submit">Sign up</button>
                </form>
                <!-- <div class="login-sign">
                    <a href="">Sign up</a>
                </div> -->
            </div>
        </div>
    </section>
</body>
</html>