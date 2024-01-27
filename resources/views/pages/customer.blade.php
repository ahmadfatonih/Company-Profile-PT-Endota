@extends('layout.main')
@section('content')

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ route('dashboard') }}">Home</a></li>
        <li>Our Customer</li>
      </ol>

    </div>
</section>


<section id="customer" class="customer">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Our Customer</h2>
      </div>
      
      <div class="row">
        @foreach ($customers as $items)
        <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="{{ url('storage/' .$items->logo_company) }}" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>{{$items->company}}</h4>
              <span>{{$items->department}}</span>
              <p>{{$items->testimonial}}</p>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
    </div>
  </section><!-- End Team Section -->
@endsection