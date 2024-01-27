@extends('layout.main')
@section('content')

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ route('dashboard') }}">Home</a></li>
        <li>History</li>
      </ol>

    </div>
</section>


<section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>History</h2>
      </div>

      <div class="row content">
        <div class="col-lg-6" >
          <img src="{{ url('storage/'. $about->image) }}" class="img-fluid rounded-4 shadow-lg" alt="" data-aos="fade-right">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          {!! $about->description !!}
          <a href="{{ url('storage/'. $about->file) }}" class="btn-get-download" download><i class="bx bxs-download" ></i> Download Company Profile PDF</a>
        </div>
      </div>

    </div>
  </section><!-- End Contact Section -->
@endsection