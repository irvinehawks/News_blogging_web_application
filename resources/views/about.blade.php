@extends('layout')

@section('main')

    <!-- main -->
    <main class="container">
      <section class="single-blog-post">
        <h1>About Me</h1>
        <div class="single-blog-post-ContentImage" data-aos="fade-left">
          <img src="{{ asset('images/download.png') }}" alt="" />
        </div>

        <div>
          <p class="about-text">
            We make content accessible to internet users.
            <br /><br />
            Taking it to the next one billion internet users.
          </p>
        </div>
      </section>
    </main>
@endsection
