<footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h3>Whatsapp or Email For Fast Response</h3>
            <div class="d-flex justify-content-center">
              <a href="https://api.whatsapp.com/send/?phone={{ $contact->whatsapp }}&text&type=phone_number&app_absent=0" class="btn-get-whatsapp"><i class="bx bxl-whatsapp"></i><span> Whatsapp</span></a>
              <a href="mailto:{{ $contact->email }}" class="btn-get-quotation"><i class="bx bxs-envelope"></i><span> Quotation</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Endota</h3>
            <p>
              {{$contact->address}}
              <br><br>
              <strong>Phone:</strong> {{$contact->phone}}<br>
              <strong>Email:</strong> {{$contact->email}}<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Products</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Article</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contacts</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Products</h4>
            <ul>
              @foreach ($categories as $items)
                <li><i class="bx bx-chevron-right"></i> <a href="#">{{$items->name}}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <div class="social-links mt-3">
              <a href="{{$contact->link_twitter}}" class="twitter mt-2"><i class="bx bxl-twitter"></i></a>
              <a href="{{$contact->link_facebook}}" class="facebook mt-2"><i class="bx bxl-facebook"></i></a>
              <a href="{{$contact->link_instagram}}" class="instagram mt-2"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Endota Sinar Indonesia</span></strong>.
      </div>
    </div>
  </footer>