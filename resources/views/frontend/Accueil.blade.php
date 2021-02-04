@extends('frontend.template.template')

@section('content')
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up" class="aos-init aos-animate">Plateforme du </h1>
          <h2 data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">College Saint Michel</h2>
          <div data-aos="fade-up" data-aos-delay="600" class="aos-init aos-animate">
            @if (Route::has('login'))
                    @auth
                      <div class="text-center text-lg-start">
                        <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                          <span>Bienvenue {{Auth::user()->name}}</span>
                          <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>                    
                    @else
                      
                        <div class="text-center text-lg-start">
                          <a href="{{ route('login') }}" style="text-decoration:none" class="text-white">
                            <button class="btn btn-warning text-white ">Se connecter</span>
                          </a>
                        </div>
                    @endauth
            @endif
            
          </div>
        </div>
        <div class="col-lg-6 hero-img aos-init aos-animate" data-aos="zoom-out" data-aos-delay="200">
          <img src="image/logo.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>
@endsection