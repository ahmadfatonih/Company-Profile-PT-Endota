@extends('layout.main')
@section('content')

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ route('dashboard') }}">Home</a></li>
        <li>Article</li>
      </ol>

    </div>
</section>


<section id="article" class="article">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Article</h2>
      </div>

      <div class="row">
        @foreach ($blogs as $items)
        <div class="col-xl-3 col-md-6 align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="400">
          <div class="item">
            <div class="pic mb-3"><img src="{{$items->photo }}" class="img-fluid" alt=""></div>
              <h4><a href="{{ route('detail-article', $items->slug) }}">{{$items->title}}</a></h4>
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
  </section><!-- End Contact Section -->
@endsection