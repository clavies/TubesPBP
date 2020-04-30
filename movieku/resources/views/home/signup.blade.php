@extends('layout.header')

@section('title', 'Sign Up')

@section('link', '/signin')

@section('style')
<style>
    section {
        min-height: 420px;
    }

    body {
        background-color: black;
        background-image:url('images/Signup.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .row {
        min-height: 50px;
    }

    #logo {
        color: white;
    }

    .card {
        margin-top: 2.5%;
        height: 590px;
        /* background-color: black;
        opacity: 95%; */
    }

    /* label {
        color: white;
    } */

</style>
@endsection

@section('container')
<section class="signin" id="signin">
    <div class="container-fluid ">        
        <div class="card col-7 mx-auto">
            <div class="card-body mx-2 mt-4">
                <h3 class="card-title text-center">Sign Up</h3>
                <small class="form-text text-muted text-center mb-5">It's completely free.</small>
                <form action="/signin">
                    <div class="container-fluid">
                        <div class="row my-2">
                            {{-- Name --}}
                            <div class="col">
                                  <label for="name">Name</label>
                                  <input type="name" class="form-control visible @error('name') is-invalid @enderror" id="name">
                                  {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                            </div>

                            {{-- Username --}}
                            <div class="col">
                                <label for="username">Username</label>
                                <input type="username" class="form-control visible @error('username') is-invalid @enderror" id="username">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                          </div>
                        </div>

                        <div class="row my-2">
                            {{-- Phone --}}
                            <div class="col">
                                  <label for="phone">Phone</label>
                                  <input type="phone" class="form-control visible @error('phone') is-invalid @enderror" id="phone">
                                  {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                            </div>

                            {{-- Email --}}
                            <div class="col">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control visible @error('email') is-invalid @enderror" id="email">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                          </div>
                        </div>

                        <div class="row my-2">
                            {{-- Address --}}
                            <div class="col">
                                  <label for="adress">Address</label>
                                  {{-- <input type="adress" class="form-control visible @error('adress') is-invalid @enderror" id="adress"> --}}
                                  <textarea class="form-control" aria-label="address"></textarea>
                                  {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                            </div>

                            <div class="col ml-4">
                                {{-- Password --}}
                                <div class="row mr-0">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control visible @error('password') is-invalid @enderror" id="password">
                                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                                </div>
                                
                                {{-- Confirm Password --}}
                                <div class="row mr-0">
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="confirm_password" class="form-control visible @error('confirm_password') is-invalid @enderror" id="confirm_password">
                                </div>
                          </div>
                        </div>

                        <div class="row mt-5">
                          <div class="col">
                            <button type="submit" class="btn btn-danger col-12">Create Account</button>
                          </div>
                        </div>
                    </div>
                </form>
                {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> --}}
            </div>
        </div>
    </div>
</section>
@endsection