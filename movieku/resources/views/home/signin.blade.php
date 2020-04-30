@extends('layout.header')

@section('title', 'Sign In')

@section('link', '/')

@section('style')
<style>
    section {
        min-height: 420px;
    }

    body {
        background-color: black;
        background-image:url('images/Signin.jpg');
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
        height: 500px;
        margin-top: 4%;
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
        <div class="card col-4 mx-auto">
            <div class="card-body col-11 mx-auto mt-4">
                <h3 class="card-title text-center mb-3">Sign In</h3>
                <form action="/home">
                    <div class="container-fluid">
                        <div class="row my-2">
                          <div class="col">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control visible @error('email') is-invalid @enderror" id="email">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                          </div>
                        </div>

                        <div class="row my-2 ">
                          <div class="col">
                            <label for="password">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password">
                          </div>
                        </div>

                        <div class="row mt-5">
                          <div class="col">
                            <button type="submit" class="btn btn-danger col-12">Sign In</button>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col">
                            <small class="form-text text-muted">Never used Movieku before?</small>
                            <a href="/signup" class="btn btn-dark col-12">Sign Up</a>
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