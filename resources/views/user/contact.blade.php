@extends('user.layouts.master')

@section('main-content')
<!-- Main -->
<main class="main" role="main">
  <!-- Page info -->
  <header class="site-title color">
    <div class="wrap">
      <div class="container">
        <h1>Contact us</h1>
        <nav role="navigation" class="breadcrumbs">
          <ul>
            <li><a href="index.html" title="Home">Home</a></li>
            <li>Contact</li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <!-- //Page info -->

  <div class="wrap">
    <div class="row">

      <!--- Content -->
      <div class="full-width content textongrey">
        <h2>Send us a message</h2>
        @include('include.message')
      </div>
      <!--- //Content -->

      <!-- Form -->
      <div class="three-fourth">
        <form method="post" action="{{ route('contact.store') }}">
          @csrf
          <div id="message"></div>
          <div class="f-row">
            <div class="one-half">
              <label>Full Name</label>
              <input type="text" id="name"  name="name" required/>
            </div>
            <div class="one-half">
              <label>Phone Number</label>
              <input type="text"  name="phone" required/>
            </div>
          </div>
          <div class="f-row">
            <div class="full-width">
              <label>Title</label>
              <input type="text" name="title" required/>
            </div>
          </div>
          <div class="f-row">
            <div class="full-width">
              <label>Message</label>
              <textarea id="comments" name="message" required></textarea>
            </div>
          </div>
          <div class="f-row">
            <input type="submit" value="Submit" id="submit" class="btn color medium right" />
          </div>
        </form>
      </div>
      <!-- //Form -->
   
      <!--- Sidebar -->
      <aside class="one-fourth sidebar right">
        <!-- Widget -->
        <div class="widget">
          <h4>Need help booking?</h4>
          <div class="textwidget">
            <p>Call our customer services team on the number below to speak to one of our advisors who will help you with all of your needs.</p>
            <p class="contact-data"><span class="icon icon-themeenergy_call black"></span> 0305678943</p>
          </div>
        </div>
        <!-- //Widget -->

        <!-- Widget -->
        {{-- <div class="widget">
          <h4>Advertisment</h4>
          <a href="contact.html#"><img src="images/uploads/advertisment.jpg" alt="" /></a>
        </div> --}}
        <!-- //Widget -->
      </aside>
      <!--- //Sidebar -->
    </div>
  </div>
</main>
<!-- //Main -->
@endsection