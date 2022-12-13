
@extends('layouts.navigation')
@section('content')
<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="image/river1.jpg" alt="Sebeya station" width="100%" height="250">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Sebeya station.</h1>
                <p>This outlook estimates the potential for river flooding (not flash flooding) to develop during the next two weeks across the Middle Sebeya River based 
                  on a current assessment of EWS factors which can contribute to river flooding.</p>
                <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="image/river2.jpg "alt="Nyabugogo station" width="100%" height="250">
            <div class="container">
              <div class="carousel-caption">
                <h1>Nyabugogo Sation</h1>
                <p>This station is located in kigali city in Gasabo district at Nyabugogo  river.it provide the details of the river characters .</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="image/river3.jpg " alt="Nyakabanda river"  width="100%" height="250">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Nyakabanda station</h1>
                <p>This station is located at Nyakabanda river in souh-west of the country in Muhanga river.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


<!-- features of rivers -->

<div class="container marketing">

  <div class="row">
    <div class="col-lg-4">
      <img class="rounded-circle" src="image/river1.jpg" alt=" Sebeya station" width="140" height="140">
      <h2>Sebeya Station</h2>
      <p>This station is located at Sebeya river in western provencee of country in rubavu district.</p>
      <p><a class="btn btn-secondary" href="#" role="button">more about Sebeya station&raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="rounded-circle" src="image/river2.jpg" alt="Generic placeholder image" width="140" height="140">
      <h2>Nyabugogo station</h2>
      <p>This station is located in kigali city in Gasabo district at Nyabugogo  river.it provide the details of the river characters </p>
      <p><a class="btn btn-secondary" href="#" role="button">more about Nyabugogo station &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="rounded-circle" src=image/river3.jpg alt="Nyakabanda station" width="140" height="140">
      <h2>Nyakabanda river</h2>
      <p>This station is located at Nyakabanda river in souh-west of the country in Muhanga river.</p>
      <p><a class="btn btn-secondary" href="#" role="button">more about Nyakabanda station &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->

</div><!-- /.container -->



</main>
@endsection