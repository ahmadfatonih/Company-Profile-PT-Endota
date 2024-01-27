@extends('layout.main')
@section('content')

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ route('dashboard') }}">Home</a></li>
        <li>Products</li>
      </ol>

    </div>
</section>


<section id="products" class="products">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>{{$categoriesWithSlug->name}} Products</h2>
      </div>

      <div class="row">
        @foreach ($products as $items)
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
</section><!-- End Contact Section -->
@endsection