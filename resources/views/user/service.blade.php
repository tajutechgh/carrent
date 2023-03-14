@extends('user.layouts.master')

@section('main-content')
<!-- Main -->
<main class="main" role="main">
  <!-- Page info -->
  <header class="site-title color">
    <div class="wrap">
      <div class="container">
        <h1>Services</h1>
        <nav role="navigation" class="breadcrumbs">
          <ul>
            <li><a href="index.html" title="Home">Home</a></li>
            <li>Services</li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <!-- //Page info -->


  <div class="wrap">
    <div class="row">

      <!--- Sidebar -->
      <aside class="one-fourth sidebar left">
        <!-- Widget -->
        <div class="widget">
          <ul class="categories">
            <li class="active"><a href="#tab1">Private transfers</a></li>
            <li><a href="#tab2">Shuttle transfers</a></li>
            {{-- <li><a href="#tab3">Bus transfers</a></li> --}}
            {{-- <li><a href="#tab4">Helicopter transfers</a></li> --}}
            {{-- <li><a href="#tab5">Limousine transfers</a></li> --}}
          </ul>
        </div>
        <!-- //Widget -->
      </aside>
      <!--- //Sidebar -->

      <!--- Content -->
      <div class="three-fourth content">
        <!-- Tab -->
        <article class="single hentry" id="tab1">
          <div class="entry-featured">
            <img src="{{ asset('user/images/cars.jpg') }}" alt="" />
          </div>
          <div class="entry-content">
            <h2>Private transfers</h2>
            <p>
              Carly rentals offer services to and from the airport in the city we operate. You will be picked up in the arrivals hall by your driver who will be holding a name sign to help you identify them. You will always be provided with one of our premium vehicles with a range of vehicle classes, from Economy, Business, to First class to ensure we can always meet your needs. 
              If you are travelling in a group then you can choose our Business Van option which can hold up to eight people comfortably which is perfect for any last minute preparation needed before a big meeting. Whatever the reason for needing a private car service, we are looking forward to serving you in our city.
            </p>
          </div>
        </article>
        <!-- //Tab -->

        <!-- Tab -->
        <article class="single hentry" id="tab2">
          <div class="entry-featured">
            <img src="{{ asset('user/images/occu.jpeg') }}" alt="" />
          </div>
          <div class="entry-content">
            <h2>Shuttle transfers</h2>
            <p>
              Carly rentals provide cultural and historical tours for private individual, students or groups. With chauffeur driven car rental or airport shuttle in Accra. We offer very competitive long distance shuttle fares and best low cost Airport mini cab and shuttle service in Accra. 
              Carly rentals also offer shuttles for excursion and also offers tourist buses for tourist attraction. Whether you are travelling in a small group, family, student trip, or large group, we organize a tailored system to fit your need. Satisfaction to all our customers is extremely important to us.
            <p>
          </div>
        </article>
        <!-- //Tab -->

        <!-- Tab -->
        {{-- <article class="single hentry" id="tab3">
          <div class="entry-featured">
            <img src="{{ asset('user/images/uploads/img6.jpg') }}" alt="" />
          </div>
          <div class="entry-content">
            <h2>Bus transfers</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
              tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
              exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
              dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent
              luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
              laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
              ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
              hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero
              eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te
              feugait nulla facilisi.</p>
            <p>Duis autem vel eum iriure dolor in <a href="#">this is a link</a> velit esse molestie consequat, vel
              illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
              praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing <strong>this is some bold text</strong> elit, sed
              diam nonummy nibh euismod tincidunt ut. Ut wisi enim ad minim veniam, quis nostrud exerci tation
              ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
              hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero
              eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te
              feugait nulla facilisi.</p>
          </div>
        </article> --}}
        <!-- //Tab -->

        <!-- Tab -->
        {{-- <article class="single hentry" id="tab4">
          <div class="entry-featured">
            <img src="images/uploads/img7.jpg" alt="" />
          </div>
          <div class="entry-content">
            <h2>Helicopter transfers</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
              tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
              exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
              dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent
              luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
              laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
              ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
              hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero
              eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te
              feugait nulla facilisi.</p>
            <p>Duis autem vel eum iriure dolor in <a href="#">this is a link</a> velit esse molestie consequat, vel
              illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
              praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing <strong>this is some bold text</strong> elit, sed
              diam nonummy nibh euismod tincidunt ut. Ut wisi enim ad minim veniam, quis nostrud exerci tation
              ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
              hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero
              eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te
              feugait nulla facilisi.</p>
          </div>
        </article> --}}
        <!-- //Tab -->

        <!-- Tab -->
        {{-- <article class="single hentry" id="tab5">
          <div class="entry-featured">
            <img src="images/uploads/img9.jpg" alt="" />
          </div>
          <div class="entry-content">
            <h2>Limousine transfers</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
              tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
              exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
              dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent
              luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
              laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
              ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
              hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero
              eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te
              feugait nulla facilisi.</p>
            <p>Duis autem vel eum iriure dolor in <a href="#">this is a link</a> velit esse molestie consequat, vel
              illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
              praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing <strong>this is some bold text</strong> elit, sed
              diam nonummy nibh euismod tincidunt ut. Ut wisi enim ad minim veniam, quis nostrud exerci tation
              ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
              hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero
              eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te
              feugait nulla facilisi.</p>
          </div>
        </article> --}}
        <!-- //Tab -->
      </div>
      <!--- //Content -->
    </div>
  </div>
</main>
<!-- //Main -->

@endsection

@section('footer')

<script src="{{ asset('user/js/jquery.min.js') }}"></script>
<script>
  $(document).ready(function () {
    $('.single').hide().first().show();
    $('.categories li:first').addClass('active');

    $('.categories a').on('click', function (e) {
      e.preventDefault();
      $(this).closest('li').addClass('active').siblings().removeClass('active');
      $($(this).attr('href')).show().siblings('.single').hide();
    });

    var hash = $.trim(window.location.hash);
    if (hash) $('.categories a[href$="' + hash + '"]').trigger('click');
  });
</script>

@endsection