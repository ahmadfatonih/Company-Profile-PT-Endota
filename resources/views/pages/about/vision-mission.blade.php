@extends('layout.main')
@section('content')

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ route('dashboard') }}">Home</a></li>
        <li>Vision Mission</li>
      </ol>

    </div>
</section>


<section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Vision Mission</h2>
      </div>
{{--       
      <div class="row content">
        <div class="col-lg-12 mb-4">
          <h2>
            Visi
          </h2>
          <p>Menjadikan PT. Endota Sinar Indonesia mitra strategis di bidang Plastic Extrusion
            Molding Specialist di Indonesia.</p>
        </div>
      </div> --}}

      <div class="row visi">
        <div class="col-lg-6">
          <h2>
            Visi
          </h2>
          <p>Menjadikan PT. Endota Sinar Indonesia mitra strategis di bidang Plastic Extrusion
            Molding Specialist di Indonesia.</p>
          <h2>
            Misi
          </h2>
          <ul>
            <li><i class="ri-check-double-line"></i> Membuat produk yang ramah lingkungan, harga yang kompetitif dan berkualitas 
              untuk mencapai kepuasan pelanggan yang optimal.
              </li>
            <li><i class="ri-check-double-line"></i> Mengirim produk yang memenuhi persyaratan pelanggan untuk tujuan pengiriman
              tepat waktu.
              </li>
            <li><i class="ri-check-double-line"></i> Sumber daya manusia yang memiliki integritas dan kompetensi, menjadi kunci 
              utama untuk beroperasisecara efisien dan produktif</li>
            <li><i class="ri-check-double-line"></i> Melakukan KAIZEN (perbaikan terus menerus) untuk mendapatkan laba bersih dan
              menjaga agar arus kas positif.</li>  
          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <h2>
            Nilai Dasar Perusahaan
          </h2>
          <ul>
            <li><i class="ri-check-double-line"></i> Keterbukaan</li>
            <li><i class="ri-check-double-line"></i> Kebersamaan</li>
            <li><i class="ri-check-double-line"></i> Integritas</li>
          </ul>
        </div>
      </div>

    </div>
  </section><!-- End Contact Section -->
@endsection