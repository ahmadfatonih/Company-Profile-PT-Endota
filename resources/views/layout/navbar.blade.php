
<header id="header" class="fixed-top {{ Request::is('/') ? '' : 'header-inner-pages'}}">
  <div class="container d-flex align-items-center">

    <h1 class="logo me-auto">
      <a href="{{ route('dashboard') }}">
        <img src="/assets/img/apple-touch-icon.png" alt="Logo"> <!-- Replace "path-to-your-logo-image.png" with the actual path to your logo image -->
        Endota
      </a>
    </h1>

    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}" href="{{ route('dashboard') }}">Home</a></li>
        <li class="dropdown" >
          <a href="#" class="{{ Request::is('history') ? 'active' : '' }} {{ Request::is('vision-mission') ? 'active' : '' }} {{ Request::is('organization') ? 'active' : '' }}">
            <span>About</span> <i class="bi bi-chevron-down"></i>
          </a>
          <ul>
            <li><a href="{{ route('history')}}"><span>History</span></a></li>
            <li><a href="{{ route('vision-mission') }}">Vision Mission</a></li>
            <li><a href="{{ route('organization') }}">Organization</a></li>
          </ul>
        </li>
        <li class="dropdown" >
          <a href="#" class="{{ Request::is('products') ? 'active' : '' }} {{ Request::is('category-product/*') ? 'active' : '' }} {{ Request::is('all-products') ? 'active' : '' }} {{ Request::is('product/*') ? 'active' : '' }}  ">
            <span>Products</span> <i class="bi bi-chevron-down"></i>
          </a>
          <ul>
            @foreach ($categories as $items)
              <li><a class="{{ Request::is('category-product/$items->name') ? 'active' : '' }}" href="{{route('category-product', $items->slug)}}"><span>{{$items->name}}</span></a></li>
            @endforeach
          </ul>
        </li>
        <li><a class="nav-link {{ Request::is('article') ? 'active' : '' }} {{ Request::is('detail-article') ? 'active' : '' }}" href="{{ route('article') }}">Article</a></li>
        <li><a class="nav-link {{ Request::is('customers') ? 'active' : '' }}" href="{{ route('customers') }}">Customer</a></li>
        <li><a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ route ('contact')}}">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>
  

  </div>
</header>