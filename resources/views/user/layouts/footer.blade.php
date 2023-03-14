<!-- Footer -->
<footer class="footer black" role="contentinfo">
  <div class="wrap">
    <div class="row">
      <!-- Column -->
      <article class="one-half">
        <h6>About us</h6>
        <p align="justify">
          Excel Desire Limited was registered under the Registrar General’s Department as a privately owned company certified to commence business in 2012. Their main line of business is transportation service to meet user needs taking cognizance of the National Transport Policy and the Road Transport Services Sub-Sector of Ghana. We make movement/travel in Accra and across Ghana a delight for our cherished clients.
          <a href="{{ route('about') }}">Read moore.......</a>
        </p>
      </article>
      <!-- //Column -->

      <!-- Column -->
      <article class="one-fourth">
        <h6>Need help?</h6>
        <p>Contact us via phone or email:</p>
        <p class="contact-data"><span class="icon icon-themeenergy_call"></span> 0305678943</p>
        <p class="contact-data"><span class="icon icon-themeenergy_mail-2"></span> <a href="mailto:help@transfers.com">help@carlyrentals.com</a></p>
      </article>
      <!-- //Column -->

      <!-- Column -->
      <article class="one-fourth">
        <h6>Follow us</h6>
        <ul class="social">
          <li><a href="#" title="facebook"><i class="fa fa-fw fa-facebook"></i></a></li>
          <li><a href="#" title="twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
          <li><a href="#" title="gplus"><i class="fa fa-fw fa-google-plus"></i></a></li>
          <li><a href="#" title="linkedin"><i class="fa fa-fw fa-linkedin"></i></a></li>
        </ul>
      </article>
      <!-- //Column -->
    </div>

    <div class="copy">
      <p>Copyright &copy; 2019-{{Carbon\carbon::now()->year}} Carly Rentals. All rights reserved. </p>

      <nav role="navigation" class="foot-nav">
        <ul>
          <li><a href="{{ route('home') }}" title="Home">Home</a></li>
          <li><a href="{{ route('about') }}" title="About us">About us</a></li>
          <li><a href="{{ route('service') }}" title="Services">Services</a></li>
          <li><a href="{{ route('contact.index') }}" title="Contact us">Contact us</a></li>
        </ul>
      </nav>
    </div>
  </div>
</footer>
<!-- //Footer -->

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.ui.timepicker.addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
<script src="{{ asset('user/js/jquery.uniform.min.js') }}"></script>
<script src="{{ asset('user/js/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('user/js/wow.min.js') }}"></script>
<script src="{{ asset('user/js/jquery-ui-sliderAccess.js') }}"></script>
<script src="{{ asset('user/js/search.js') }}"></script>
<script src="{{ asset('user/js/scripts.js') }}"></script>
<script src="{{ asset('user/js/styler.js') }}"></script>

@section('footer')
    
@show