@extends('layout.headerhome')

@section('title', 'Homepage')

@section('style')
<style>
    section {
        min-height: 420px;
    }

    .signup {
        margin-top: 17%;
    }

    body {
        background-color: black;
        background-repeat: no-repeat;            
        background-image:url('images/Wallpaper.png');

    }

    h1{
        color: white;
    }

    p{
        color:white;
    }

    .download{
        margin-top: 20%;
    }

    .watch{
        margin-top: 20%;
    }
</style>
@endsection

@section('container')
<section class="signup" id="signup">
    <div class="container-fluid my-auto ml-4">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-5">
                <h1>Movies Delivered</h1>
                <p>Movie night to your mailbox. I ree shipping, no late fees.</p>
                <a href="/signup" class="btn btn-danger">Join for a free</a>
                {{-- <button class="btn btn-danger" href="/signup">Join for a free month</button> --}}
            </div>
        </div>
    </div>
</section>

<section class="download" id="download">
  <div class="container-fluid my-auto ml-4">
      <div class="row justify-content-sm-center">
          <div class="col-sm-5">
              <img src="Image/Logo.png" width="20%" alt="">
          </div>
          <div class="col-sm-5">
              <h1>Download your shows to watch on the go.</h1>
              <p>Save your data and watch all your favorites offline.</p>
          </div>
      </div>
  </div>
</section>

<section class="watch" id="watch">
  <div class="container-fluid my-auto ml-4">
      <div class="row justify-content-sm-center">
          <div class="col-sm-5">
              <h1>Watch everywhere.</h1>
              <p>Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV
                  without paying more.
              </p>
              <button class="btn btn-danger" href="#">Join for a free month</button>
          </div>
          <div class="col-sm-5">
              <img src="" width="" alt="">
          </div>
      </div>
  </div>
</section>
@endsection