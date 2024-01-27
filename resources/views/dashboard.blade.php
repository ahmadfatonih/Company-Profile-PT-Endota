@extends('layout.main')

@section('content')

<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>PT. Endota Sinar Indonesia</h1>
          <h2>Plastic Extrusion Molding Specialist</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="https://api.whatsapp.com/send/?phone={{ $contact->whatsapp }}&text&type=phone_number&app_absent=0" class="btn-get-whatsapp"><i class="bx bxl-whatsapp"></i><span> Whatsapp</span></a>
            <a href="mailto:{{ $contact->email }}" class="btn-get-quotation"><i class="bx bxs-envelope"></i><span> Quotation</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="/assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>
 
  <main id="main">


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up" data-aos-delay="100" data-aos-easing="ease-out-back">

        <div class="section-title">
          <h2>About Us</h2>
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
    </section><!-- End About Us Section -->

    <!-- ======= Product Section ======= -->
    <section id="products" class="products section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Products</h2>
          <p>PT. Endota Sinar Indonesia memproduksi berbagai jenis dan tipe produk plastik sesuai dengan kemajuan teknologi dan permintaan customer</p>
        </div>
        <div class="row">
          @foreach ($products as $item)
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="400">
              <div class="item">
                <div class="pic mb-3">
                @isset($item->productGallery)
                    @php
                        $firstPhoto = $item->productGallery->first();
                    @endphp
                    @if (!is_null($firstPhoto) && isset($firstPhoto->photo))
                        <img src="{{ $firstPhoto->photo }}" alt="Product Photo" class="lozad text-center mb-4" />
                    @else
                        <img src="/assets/img/no-picture-taking.png" class="img-fluid" alt="Default Image">
                    @endif
                @else
                    <img src="/assets/img/no-picture-taking.png" class="img-fluid" alt="Default Image">
                @endisset
                </div>
                <h4><a href="{{route('detail-product', $item->slug)}}">{{ $item->name }}</a></h4>
                @php
                    $limitedDescription = Str::limit($item->short_description, 100); // Adjust the character limit (100 in this example)
                @endphp
                
                <p>
                    {{ $limitedDescription }}
                </p>
              </div>
            </div>
          @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">
          <a href="{{ route('all-products') }}" class="btn-1"><span>Selengkapnya</span><i class="bx bx-right-arrow-alt"></i></a>
        </div>
      </div>
    </section><!-- End products Section -->

    <!-- ======= Team Section ======= -->
    <section id="customer" class="customer">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Customer</h2>
          <p>PT. Endota Sinar Indonesia memberikan pelayanan yang terbaik demi mencapai kepuasan customer</p>
        </div>
        
        <div class="row">
          @foreach ($customer as $items)
            <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="{{ url('storage/'. $items->logo_company) }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>{{$items->company}}</h4>
                  <span>{{$items->department}}</span>
                  <p>{{$items->testimonial}}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">
          <a href="{{ route('customers') }}" class="btn-1"><span>Selengkapnya</span><i class="bx bx-right-arrow-alt"></i></a>
        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions ?</h2>
        </div>

        <div class="faq-list">
          <ul>
            @foreach ($faq as $items)
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-{{$items->id}}">{{$items->question}} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-{{$items->id}}" class="collapse hidden" data-bs-parent=".faq-list">
                  <p>
                    {{$items->answer}}
                  </p>
                </div>
              </li>
            @endforeach
          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Article Section ======= -->
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
        <div class="d-flex justify-content-center mt-4">
          <a href="{{ route('article') }}" class="btn-1"><span>Selengkapnya</span><i class="bx bx-right-arrow-alt"></i></a>
        </div>
      </div>
    </section><!-- End products Section -->

  </main><!-- End #main -->
@endsection