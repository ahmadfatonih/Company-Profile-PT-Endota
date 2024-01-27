@extends('layout.main')
@section('content')

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ route('dashboard') }}">Home</a></li>
        <li><a href="{{ route('article') }}">Article</a></li>
        <li>Detail Article</li>
      </ol>

    </div>
</section>

<section id="portfolio-details" class="portfolio-details">
    <div class="container">

        <div class="section-title">
            <h2>{{$article->title}}</h2>
            <div class="d-flex justify-content-center mb-4">
              <a href="https://api.whatsapp.com/send/?phone={{ $contact->whatsapp }}&text&type=phone_number&app_absent=0" class="btn-get-whatsapp"><i class="bx bxl-whatsapp"></i><span> Whatsapp</span></a>
              <a href="mailto:{{ $contact->email }}" class="btn-get-quotation"><i class="bx bxs-envelope"></i><span> Quotation</span></a>
            </div>
        </div>
    
        <div class="row gy-4">
          <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center mb-5" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <img src="{{ $article->photo }}" alt="" class="detail-blog-img">
            </div>
        </div>
        <div class="article">
          <div class="row gy-4">
            <div class="col-lg-12 col-md-12 col-sm-12" data-aos="zoom-in-up" data-aos-offset="100" data-aos-easing="ease-in-sine">
              <p>
                {{ $article->short_description }}
            </p>
            </div>
          </div>
        </div>
        
      </div>

    </div>
  </section><!-- End Portfolio Details Section -->

  <hr class="m-3"/>
  <section id="article" class="article">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Related Article</h2>
      </div>

      <div class="row">
        @foreach ($relateBlogs as $items)
          <div class="col-xl-3 col-md-6 align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="item">
              <div class="pic mb-3"><img src="{{ $items->photo }}" alt="Photo Article" class="img-fluid" alt=""/></div>
                            
              <h4><a href="{{ route('detail-article', $items->slug) }}">{{ $items->name}}</a></h4>
              @php
                  $limitedDescription = Str::limit($items->short_description, 100); // Adjust the character limit (100 in this example)
              @endphp
              <p>
                  {{ $limitedDescription }}
              </p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

@endsection