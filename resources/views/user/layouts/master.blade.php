<!DOCTYPE html>
<html>

<head>
  @include('user.layouts.head')
</head>

<body class="home">
  <!-- Preloader -->
  <div class="preloader">
    <div id="followingBallsG">
      <div id="followingBallsG_1" class="followingBallsG"></div>
      <div id="followingBallsG_2" class="followingBallsG"></div>
      <div id="followingBallsG_3" class="followingBallsG"></div>
      <div id="followingBallsG_4" class="followingBallsG"></div>
    </div>
  </div>
  <!-- //Preloader -->

  <!-- Header -->
  <header class="header" role="banner">
    @include('user.layouts.header')
  </header>
  <!-- //Header -->

  <!-- Main -->
  @section('main-content')
      
  @show
  <!-- //Main -->

  @include('user.layouts.footer')
</body>

</html>