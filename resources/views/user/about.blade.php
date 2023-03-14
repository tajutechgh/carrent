@extends('user.layouts.master')

@section('header')

<link rel="stylesheet" href="http://themeenergy.com/themes/html/transfers/css/styler.css" />

@endsection

@section('main-content')
<!-- Main -->
<main class="main" role="main">
  <!-- Page info -->
  <header class="site-title color">
    <div class="wrap">
      <div class="container">
        <h1>About us</h1>
        <nav role="navigation" class="breadcrumbs">
          <ul>
            <li><a href="{{ route('home') }}" title="Home">Home</a></li>
            <li>About us</li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <!-- //Page info -->

  <div class="wrap">
    <div class="row">
      <!--- Content -->
      <div class="content three-fourth textongrey">
        <h2>Our story</h2>
        <p align="justify">
          Carly Rental Limited was registered under the Registrar General’s Department as a privately owned company certified to commence business in 2012. Their main line of business is transportation service to meet user needs taking cognizance of the National Transport Policy and the Road Transport Services Sub-Sector of Ghana. <br>
          We make movement/travel in Accra and across Ghana a delight for our cherished clients. All our vehicles are Chauffeur driven. <br>
          Carly Rental Limited mission is to provide the safest, reliable, comfortable, highest quality and moderately priced integrated transport service to corporate bodies, individuals, various social groupings, schools, clubs & and associations, whether on business assignment or tour for pleasure. And its vision is to become the leading highest quality integrated transportation services provider in Ghana.
        </p>
        <h3>Our mission</h3>
        <p align="justify">
          Our mission is to complete our customers rent a car needs in Accra and, in doing so, exceed their expectations for service, quality and value.
          We will strive to earn our customers loyalty by working to deliver more than promised, being honest and fair and "going the extra mile" to provide exceptional personalized service that creates a pleasing business experience.<br>
          Treat employees and customers like family and never compromising our commitment to superior customer service. We will work to engage the community in which we operate, improve diversity through our ranks, and contribute resources to the causes that matter the most.
          Although it is our goal to be the best and not necessarily the biggest or the most profitable, our success at satisfying customers and motivating employees will bring growth and long-term profitability.
          After all, we are not entitled to our success. We have to earn it, each and every day.
        </p>
        <h3>Our vision</h3>
        <p align="justify">
          Our vision is to be the premier and preferred rental company on Accra car rental market and to offer service beyond customer satisfaction and demand.
          We want to help our clients maximize their customer lifetime value and increase their competitive advantage by helping drive productivity and efficiency while delivering measurable results. 
        </p>
      </div>
      <!--- //Content -->

      <!--- Sidebar -->
      <aside class="one-fourth sidebar right offset">
        <!-- Widget -->
        <div class="widget">
          <h4>Why book with us?</h4>
          <div class="textwidget">
            <h5>Reliable and Safe</h5>
            <p>We provide the most reliable and safety transport.</p>
            <h5>No hidden fees</h5>
            <p>Our charges are fixed and there no extra charges..</p>
            <h5>We’re Always Here</h5>
            <p>We are always available to attend to our customers when needed.</p>
          </div>
        </div>
        <!-- //Widget -->

        <!-- Widget -->
        {{-- <div class="widget">
          <h4>Advertisment</h4>
          <a href="about.html#"><img src="images/uploads/advertisment.jpg" alt="" /></a>
        </div> --}}
        <!-- //Widget -->
      </aside>
      <!--- //Sidebar -->
    </div>
  </div>
</main>
<!-- //Main -->

<!-- Services iconic -->
<div class="services iconic white">
  <div class="wrap">
    <div class="row">
      <!-- Item -->
      <div class="one-third wow fadeIn">
        <span class="circle"><span class="icon  icon-themeenergy_savings"></span></span>
        <h3>Fixed rates</h3>
        <p>Our charges are fixed and there no extra charges.</p>
      </div>
      <!-- //Item -->

      <!-- Item -->
      <div class="one-third wow fadeIn" data-wow-delay=".2s">
        <span class="circle"><span class="icon icon-themeenergy_lockpad"></span></span>
        <h3>Reliable transport</h3>
        <p>We provide the most reliable and safety transport.</p>
      </div>
      <!-- //Item -->

      <!-- Item -->
      <div class="one-third wow fadeIn" data-wow-delay=".4s">
        <span class="circle"><span class="icon icon-themeenergy_open-wallet"></span></span>
        <h3>No booking fees</h3>
        <p>Our booking is absolutely free and no charges.</p>
      </div>
      <!-- //Item -->

      <!-- Item -->
      <div class="one-third wow fadeIn">
        <span class="circle"><span class="icon icon-themeenergy_heart"></span></span>
        <h3>Free cancellation</h3>
        <p>You are entitle to cancel your booking at any time when necessary.</p>
      </div>
      <!-- //Item -->

      <!-- Item -->
      <div class="one-third wow fadeIn" data-wow-delay=".2s">
        <span class="circle"><span class="icon icon-themeenergy_magic-trick"></span></span>
        <h3>Booking flexibility</h3>
        <p>You dont need to go through any difficulty when booking with us.</p>
      </div>
      <!-- //Item -->

      <!-- Item -->
      <div class="one-third wow fadeIn" data-wow-delay=".4s">
        <span class="circle"><span class="icon icon-themeenergy_call"></span></span>
        <h3>24h customer service</h3>
        <p>We are always available to attend to our customers when needed.</p>
      </div>
      <!-- //Item -->

      <!-- Item -->
      <div class="one-third wow fadeIn">
        <span class="circle"><span class="icon icon-themeenergy_cup"></span></span>
        <h3>Award winning service</h3>
        <p>We have been awarded on several occassions for our excellent services provided.</p>
      </div>
      <!-- //Item -->

      <!-- Item -->
      <div class="one-third wow fadeIn" data-wow-delay=".2s">
        <span class="circle"><span class="icon icon-themeenergy_attach"></span></span>
        <h3>Benefits for partners</h3>
        <p>Partner with us to stand the chance of gaining more and not loosing.</p>
      </div>
      <!-- //Item -->

      <!-- Item -->
      <div class="one-third wow fadeIn" data-wow-delay=".4s">
        <span class="circle"><span class="icon icon-themeenergy_stars"></span></span>
        <h3>Quality vehicles</h3>
        <p>When it comes to vehicles, we are always the best you can count on.</p>
      </div>
      <!-- //Item -->
    </div>
  </div>
</div>
<!-- //Services iconic -->
@endsection