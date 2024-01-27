@extends('layout.main')
@section('content')

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ route('dashboard') }}">Home</a></li>
        <li><a href="{{ route('products') }}">Products</a></li>
        <li>Detail Product</li>
      </ol>

    </div>
</section>

<section id="portfolio-details" class="portfolio-details">
    <div class="container">

        <div class="section-title">
            <h2>{{$product->name}}</h2>
            <div class="d-flex justify-content-center mb-2">
              <a href="https://api.whatsapp.com/send/?phone={{ $contact->whatsapp }}&text&type=phone_number&app_absent=0" class="btn-get-whatsapp"><i class="bx bxl-whatsapp"></i><span> Whatsapp</span></a>
              <a href="mailto:{{ $contact->email }}" class="btn-get-quotation"><i class="bx bxs-envelope"></i><span> Quotation</span></a>
            </div>
        </div>
    

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">
              @forelse ($productGalleries as $item)
                  <div class="swiper-slide">
                      <img src="{{ $item->photo }}" alt="">
                  </div>
              @empty
                  <img src="/img/no-picture-taking.png" alt="Default Image" class="lozad text-center mb-4" />    
              @endforelse

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        
        <div class="col-lg-8 col-md-6 col-sm-12">
          <div class="portfolio-info" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
              <h3>Deskripsi Product</h3>
              <div class="products-detail">
                <p>{!! nl2br(e($product->short_description)) !!}
              </div>
              
          </div>
        </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="portfolio-info mt-4" data-aos="zoom-in-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
              <h3>Detail Products</h3>
              
              <div class="products-detail">
                {!! $product->long_description !!}
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr class="m-3"/>
  <section id="relatedProduct" class="products">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Related Product</h2>
      </div>

      <div class="row">
        @foreach ($relateProduct as $items)
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="item">
              @isset($items->productGallery)
                    @php
                        $firstPhoto = $items->productGallery->first();
                    @endphp
                    @if (!is_null($firstPhoto) && isset($firstPhoto->photo))
                    <div class="pic mb-3"><img src="{{ $firstPhoto->photo }}" alt="Product Gallery" class="img-fluid" alt=""/></div>
                    @else
                      <div class="pic mb-3"><img src="/img/no-picture-taking.png" alt="Default Image" class="img-fluid" alt="" /></div>
                    @endif
                @else
                  <div class="pic mb-3"><img src="/img/no-picture-taking.png" alt="Default Image" class="img-fluid" alt="" /></div>
              @endisset
                            
              <h4><a href="{{ route('detail-product', $items->slug) }}">{{ $items->name}}</a></h4>
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