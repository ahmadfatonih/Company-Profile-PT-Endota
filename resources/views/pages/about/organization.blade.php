@extends('layout.main')
@section('content')

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ route('dashboard') }}">Home</a></li>
        <li>Organization</li>
      </ol>

    </div>
</section>


<section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Organization</h2>
        <p>PT. Endota Sinar Indonesia mempunyai suatu struktur organisasi yang sistematis dan setiap bagian 
          memiliki fungsi serta tanggung jawab.</p>
      </div>

      <div class="structure-organization">
        <div class="col-xl-12 col-lg-12 col-md-12">
          <img src="assets/img/structur-organisasi-endota.png" class="text-center img-fluid rounded-4 shadow-lg" alt="" data-aos="fade-right">
        </div>
      </div>

    </div>
  </section><!-- End Contact Section -->
@endsection