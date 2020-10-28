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
                        <h1 class="display-3">Agenzia viaggi Rossi</h1>
                        <p class="lead mb-0">perchè per viaggiare serve la testa non il corpo</p>
                      </div>
                    </div>
                  </div>
            </header>

         

                    <section class="my-5 mx-5">
                      <div class="container">
                        <div class="col-12 text-white"><h3 class="text-center">Scorri i nostri pacchetti vacanze</h3></div>  
                          <hr style="background-color: blue;">
                          <div class="row"> 
                          <div class="container">
                                <div class="row">
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
                                    <div><p class="ml-3">Hotel</p></div>
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
                                    <div><p class="ml-3">Hotel</p></div>
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
                                      <h3 class="mt-3" >Roma</h3>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, molestiae quis</p>
                                      </div>
                                      <div class="col-6 ml-auto mt-3">
                                      <ul>
                                      <li><em>Esperienza fantastica, mi sono trovata benissimo - Lorena</em></li>
                                      <li><em>Soggiorno indimenticabile - Francesco</em></li>
                                    </ul>
                                    </div>
                                    <div><p class="ml-3">Hotel</p></div>
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
                                <div class="row">
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
                                    <div><p class="ml-3">Hotel</p></div>
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
                                    <div><p class="ml-3">Hotel</p></div>
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
                                      <div class=" card mt-3 border-dark col-md mr-3 mb-3 ml-3">
                                      <div class="row">
                                        <div class="col-6">
                                      <h3 class="mt-3">Lisbona</h3>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, molestiae quis</p>
                                      </div>
                                      <div class="col-6 ml-auto mt-3">
                                      <ul>
                                      <li><em>Esperienza fantastica, mi sono trovata benissimo - Lorena</em></li>
                                      <li><em>Soggiorno indimenticabile - Francesco</em></li>
                                    </ul>
                                    </div>
                                    <div><p class="ml-3">Hotel</p></div>
                                    <div class="col-6">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    </div>
                                    <div><a class="btn text-white mt-4 mb-3" href="{{route('mailcreate')}}" type="submit" role="button"> Info</a></div>
                                    <div id="carouselLisbona" class="carousel slide" data-ride="carousel">
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="d-block w-100" width="100" height="200" src="/media/lisbonaristoranti.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" width="100" height="200" src="/media/lisbonahotel.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" width="100" height="200" src="/media/lisbonasvago.jpg" alt="Third slide">
                                        </div>
                                      </div>
                                      <a class="carousel-control-prev" href="#carouselLisbona" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#carouselLisbona" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>
                                      </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="card mt-3 border-dark col-md mr-3 mb-3 ml-3">
                                        <div class="row">
                                          <div class="col-6">
                                          <h3 class="mt-3">Groenlandia</h3>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, molestiae quis</p>
                                          </div>
                                          <div class="col-6 ml-auto mt-3">
                                          <ul>
                                      <li><em>Esperienza fantastica, mi sono trovata benissimo - Lorena</em></li>
                                      <li><em>Soggiorno indimenticabile - Francesco</em></li>
                                    </ul>
                                      </div>
                                      <div><p class="ml-3">Hotel</p></div>
                                      <div class="col-6">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    </div>
                                    <div><a class="btn text-white mt-4 mb-3" href="{{route('mailcreate')}}" type="submit" role="button"> Info</a></div>
                                    <div id="carouselGroenlandia" class="carousel slide" data-ride="carousel">
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="d-block w-100" width="100" height="200" src="/media/groenlandiaristoranti.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" width="100" height="200" src="/media/groenlandiahotel.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" width="100" height="200" src="/media/groenlandiasvago.jpg" alt="Third slide">
                                        </div>
                                      </div>
                                      <a class="carousel-control-prev" href="#carouselGroenlandia" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#carouselGroenlandia" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>
                                        </div>
                                        </div>
                                        <div class=" card mt-3 border-dark col-md mr-3 mb-3 ml-3">
                                          <div class="row">
                                            <div class="col-6">
                                          <h3 class="mt-3">New York</h3>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, molestiae quis</p>
                                          </div>   
                                          <div class="col-6 ml-auto mt-3">
                                        <ul>
                                      <li><em>Esperienza fantastica, mi sono trovata benissimo - Lorena</em></li>
                                      <li><em>Soggiorno indimenticabile - Francesco</em></li>
                                    </ul>
                                      </div> 
                                      <div><p class="ml-3">Hotel</p></div>
                                      <div class="col-6">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>      
                                    </div>
                                    <div><a class="btn text-white mt-4 mb-3" href="{{route('mailcreate')}}" type="submit" role="button"> Info</a></div>
                                    <div id="carouselNewyork" class="carousel slide" data-ride="carousel">
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="d-block w-100" width="100" height="200" src="/media/newyorkristoranti.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" width="100" height="200" src="/media/newyorkhotel.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" width="100" height="200" src="/media/newyorksvago.jpg" alt="Third slide">
                                        </div>
                                      </div>
                                      <a class="carousel-control-prev" href="#carouselNewyork" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#carouselNewyork" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>
                                        </div>
                                      </div>
                                        <div class=" card mt-3 border-dark col-md mr-3 mb-3 ml-3">
                                          <div class="row">
                                            <div class="col-6">
                                          <h3 class="mt-3">Las Vegas</h3>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, molestiae quis</p>
                                      </div>  
                                      <div class="col-6 ml-auto mt-3">
                                        <ul>
                                      <li><em>Esperienza fantastica, mi sono trovata benissimo - Lorena</em></li>
                                      <li><em>Soggiorno indimenticabile - Francesco</em></li>
                                    </ul>
                                      </div>  
                                      <div><p class="ml-3">Hotel</p></div>
                                      <div class="col-6">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <div><a class="btn text-white mt-4 mb-3" href="{{route('mailcreate')}}" type="submit" role="button"> Info</a></div>
                                    <div id="carouselLasvegas" class="carousel slide" data-ride="carousel">
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="d-block w-100" width="100" height="200" src="/media/lasvegasristoranti.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" width="100" height="200" src="/media/lasvegashotel.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" width="100" height="200" src="/media/lasvegassvago.jpg" alt="Third slide">
                                        </div>
                                      </div>
                                      <a class="carousel-control-prev" href="#carouselLasvegas" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#carouselLasvegas" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>
                                      </div> 
                                      </div>
                                  </div>
                            </div>
                          </div>
                        </div>
                      </section>          
  

@endsection
