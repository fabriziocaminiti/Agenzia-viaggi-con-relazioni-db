@extends('layouts.app')
@section('content')
<header>
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3 wow bounceIn">Agenzia viaggi Rossi</h1>
        <p class="lead mb-0 wow shake">perchè per viaggiare serve la testa non il corpo</p>
        <div class="col-12 mt-5">
          <form class="form-inline my-2 my-lg-0 justify-content-center">
            <button class="btn text-white my-2 my-sm-0 mr-2" type="submit">Cerca</button>
            <input class="form-control mr-sm-2" type="Cerca" placeholder="Cerca" aria-label="Cerca">
          </form>
        </div>
      </div>
    </div>
  </div>
</header>



<section class="my-5 mx-5">
  <div class="container">
    <div class="col-12 text-white">
      <h3 class="text-center">Scorri i nostri pacchetti vacanze</h3>
    </div>
    <hr style="background-color: blue;">
    <div class="row">
      <div class="container">
        <div class="card col-12">

          <div class="card-body">
            <button id="lancia" class="btn btn-primary">Go somewhere</button>
            <div class="col-12">
              <div class="target"></div>
            </div>
          </div>
        </div>
        <div class="row wow zoomIn">
          <div class="card mt-3 border-dark col-md mr-3 mb-3 ml-3 shadow">
            <div class="row">
              <div class="col-6">
                <h3 class="mt-3">Madrid</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, molestiae quis</p>
              </div>
              <div class="col-6 ml-auto mt-3">
                <ul>
                  <li><em>"Esperienza fantastica, mi sono trovata benissimo"</em> - Lorena</li>
                  <li><em>"Soggiorno indimenticabile"</em> - Francesco</li>
                </ul>
              </div>
              <div>
                <p class="ml-3">Hotel</p>
              </div>
              <div class="col-6">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <div><a class="btn text-white mt-4 mb-3" href="{{route('mailcreate')}}" type="submit" role="button"> Info</a></div>
              <div id="carouselMadrid" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" width="100" height="200" src="/media/madridristoranti.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" width="100" height="200" src="/media/madridhotel.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" width="100" height="200" src="/media/madridsvago.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselMadrid" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselMadrid" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
          <div class=" card mt-3 border-dark col-md mr-3 mb-3 ml-3">
            <div class="row">
              <div class="col-6">
                <h3 class="mt-3">Parigi</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, molestiae quis</p>
              </div>
              <div class="col-6 ml-auto mt-3">
                <ul>
                  <li><em> fantastica, mi sono trovata benissimo - Lorena</em></li>
                  <li><em>Soggiorno indimenticabile - Francesco</em></li>
                </ul>
              </div>
              <div>
                <p class="ml-3">Hotel</p>
              </div>
              <div class="col-6">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
              </div>
              <div><a class="btn text-white mt-4 mb-3" href="{{route('mailcreate')}}" type="submit" role="button"> Info</a></div>
              <div id="carouselParigi" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" width="100" height="200" src="/media/parigihotel.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" width="100" height="200" src="/media/parigiristoranti.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" width="100" height="200" src="/media/parigisvago.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselParigi" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselParigi" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
          <div class=" card mt-3 border-dark col-md mr-3 mb-3 ml-3">
            <div class="row">
              <div class="col-6">
                <h3 class="mt-3">Roma</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, molestiae quis</p>
              </div>
              <div class="col-6 ml-auto mt-3">
                <ul>
                  <li><em>Esperienza fantastica, mi sono trovata benissimo - Lorena</em></li>
                  <li><em>Soggiorno indimenticabile - Francesco</em></li>
                </ul>
              </div>
              <div>
                <p class="ml-3">Hotel</p>
              </div>
              <div class="col-6">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div><a class="btn text-white mt-4 mb-3" href="{{route('mailcreate')}}" type="submit" role="button"> Info</a></div>
              <div id="carouselRoma" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" width="100" height="200" src="/media/romaristoranti.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" width="100" height="200" src="/media/romahotel.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" width="100" height="200" src="/media/romasvago.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselRoma" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselRoma" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row wow zoomIn">
          <div class="card mt-3 border-dark col-md mr-3 mb-3 ml-3">
            <div class="row">
              <div class="col-6">
                <h3 class="mt-3">Hawaii</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, molestiae quis</p>
              </div>
              <div class="col-6 ml-auto mt-3">
                <ul>
                  <li><em>Esperienza fantastica, mi sono trovata benissimo - Lorena</em></li>
                  <li><em>Soggiorno indimenticabile - Francesco</em></li>
                </ul>
              </div>
              <div>
                <p class="ml-3">Hotel</p>
              </div>
              <div class="col-6">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <div><a class="btn text-white mt-4 mb-3" href="{{route('mailcreate')}}" type="submit" role="button"> Info</a></div>
              <div id="carouselhawaii" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" width="100" height="200" src="/media/hawaiiristoranti.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" width="100" height="200" src="/media/hawaiihotel.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" width="100" height="200" src="/media/hawaiisvago.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselhawaii" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselhawaii" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
          <div class=" card mt-3 border-dark col-md mr-3 mb-3 ml-3">
            <div class="row">
              <div class="col-6">
                <h3 class="mt-3">Maldive</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, molestiae quis</p>
              </div>
              <div class="col-6 ml-auto mt-3">
                <ul>
                  <li><em>Esperienza fantastica, mi sono trovata benissimo - Lorena</em></li>
                  <li><em>Soggiorno indimenticabile - Francesco</em></li>
                </ul>
              </div>
              <div>
                <p class="ml-3">Hotel</p>
              </div>
              <div class="col-6">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
              </div>
              <div><a class="btn text-white mt-4 mb-3" href="{{route('mailcreate')}}" type="submit" role="button"> Info</a></div>
              <div id="carouselMaldive" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" width="100" height="200" src="/media/maldiveristoranti.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" width="100" height="200" src="/media/maldivehotel.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" width="100" height="200" src="/media/maldivesvago.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselMaldive" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselMaldive" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
          <div class="card mt-3 border-dark col-md mr-3 mb-3 ml-3 target1">Form nel quale visualizzare </div>
          <div class="card mt-3 border-dark col-md mr-3 mb-3 ml-3">
            <form name="form1">
              <p><input type="text" name="firstname" placeholder="Name" class="cf_txt mt-3"></p>
              <p><input type="text" name="email" placeholder="E-mail" class="cf_txt"></p>
              <p> <input type="submit" id="submit" value="submit" placeholder="Submit" class="cf_submit"></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection