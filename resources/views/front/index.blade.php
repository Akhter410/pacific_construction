@extends('layout.master')
@section('content')
<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
  
        <a href="/" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1>Pacific Contructor & Enterprises<span>.</span></h1>
        </a>
  
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="/" class="active">Home</a></li>
            <li><a href="{{route('about')}}">About</a></li>
            <li><a href="{{route('services')}}">Services</a></li>
            <li><a href="{{route('project')}}">Projects</a></li>
            <li><a href="{{route('blog')}}">Blog</a></li>
            {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li> --}}
            <li><a href="{{route('contact')}}">Contact</a></li>
          </ul>
        </nav><!-- .navbar -->
  
      </div>
    </header><!-- End Header -->
  
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
  
      <div class="info d-flex align-items-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <h2 data-aos="fade-down">Welcome to <span>Pacific Contructor & Enterprises</span></h2>
              <p data-aos="fade-up">It is important to take care of the patient, to be followed by the patient, but it will happen at such a time that there is a lot of work and pain. For to come to the smallest detail, no one should practice any kind of work unless he derives some benefit from it.</p>
              <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
            </div>
          </div>
        </div>
      </div>
  
      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
  
        <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/hero-carousel-1.jpg)"></div>
        <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-2.jpg)"></div>
        <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-3.jpg)"></div>
        <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-4.jpg)"></div>
        <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-5.jpg)"></div>
  
        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
  
        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
  
      </div>
  
    </section><!-- End Hero Section -->
  
    <main id="main">
  
      <!-- ======= Get Started Section ======= -->
      <section id="get-started" class="get-started section-bg">
        <div class="container">
  
          <div class="row justify-content-between gy-4">
  
            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
              <div class="content">
                <h3>We cannot reject them any less here.</h3>
                <p>That is the reality of things. Debts are abandoned indeed, we lead the selected expedient pain. Or just herself. Let us, therefore, see them in flight. He is going to flee altogether unless we are able to say the chosen one.
                <p>But some of them want to leave. Inventor and often. He is bound to take up the hard work of choosing them. They forsake the great ones who suffer from their needs but from the desire of their souls.</p>
              </div>
            </div>
  
            <div class="col-lg-5 border border-warning" data-aos="fade">
              <form action="{{route('qoute')}}" method="post">
                @csrf
                <div style="text-align:center; color:red;">
                <h3 class="mt-3 ">Get a Quote !!</h3>
                </div>
                <p>Or we hate the hard work and here the pleasure. Inventor's whole life. Things to be repelled for linead late park flows.</p>
                <div class="row gy-3">
  
                  <div class="col-md-12">
                    <span><b>Name :</b></span>
                    <input type="text" name="name" class="form-control mt-1" placeholder="Name">
                    @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                  </div>
  
                  <div class="col-md-12 ">
                    <span><b>E-mail : </b></span>
                    <input type="email" class="form-control mt-1" name="email" placeholder="Email">
                    @if($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                  </div>
  
                  <div class="col-md-12">
                    <span><b>Mobile : </b></span>
                    <input type="text" class="form-control mt-1" name="phone" placeholder="Phone">
                    @if($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                  </div>
  
                  <div class="col-md-12">
                    <span><b>Message : </b></span>
                    <textarea class="form-control mt-1" name="message" rows="6" placeholder="Message" ></textarea>
                    @if($errors->has('message'))
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                    @endif
                  </div>
  
                  <div class="col-md-12 text-center">
                    {{-- <div class="loading">Loading</div> --}}
                    {{-- <div class="error-message"></div>
                    <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>  --}}
  
                    <button class="btn btn-warning mb-2" type="submit">Get a Quote</button>
                    <button onkeydown="document.getElementById('from').value=null;document.getElementById('selectform').reset;" class="btn btn-primary mb-2" type="reset">Reset</button>
                  </div>
  
                </div>
              </form>
            </div><!-- End Quote Form -->
  
          </div>
  
        </div>
      </section><!-- End Get Started Section -->
  
      <!-- ======= Constructions Section ======= -->
      <section id="constructions" class="constructions">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Constructions</h2>
            <p>They do not know how to do any of the pains, but to find out what they are going to do, they have nothing to do with the pain of their pain.</p>
          </div>
  
          <div class="row gy-4">
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="card-item">
                <div class="row">
                  <div class="col-xl-5">
                    <div class="card-bg" style="background-image: url(assets/img/constructions-1.jpg);"></div>
                  </div>
                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">All are to be chosen of the truth.</h4>
                      <p>Escape into pain and guilt. We may be able to gain the pleasure of being pampered in ways they don't know. When chosen by pains not truth. The services at that time are great.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Card Item -->
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <div class="card-item">
                <div class="row">
                  <div class="col-xl-5">
                    <div class="card-bg" style="background-image: url(assets/img/constructions-2.jpg);"></div>
                  </div>
                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">We can assume that he wants to</h4>
                      <p>There are those who abandon their elders, but the pleasure of bearing things is the flattery of things. He is a laborious architect who never labored for pleasure. There are praisers, but some here we deserve him.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Card Item -->
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
              <div class="card-item">
                <div class="row">
                  <div class="col-xl-5">
                    <div class="card-bg" style="background-image: url(assets/img/constructions-3.jpg);"></div>
                  </div>
                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">The error of the happy pain finder</h4>
                      <p>Tell us further. Like when in. They do not know that they are worthy of the easy trouble which everyone seeks. Nor do you owe him, but the architect hates laborious duties. As the times are, there is no fault.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Card Item -->
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
              <div class="card-item">
                <div class="row">
                  <div class="col-xl-5">
                    <div class="card-bg" style="background-image: url(assets/img/constructions-4.jpg);"></div>
                  </div>
                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">It is a pleasure that they do not know</h4>
                      <p>Our indeed, who will receive great pain and pleasure because He them and the pain of that architect but the pain of the beatitude. Let him flee and take pains. Or something to free us from those pains.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Card Item -->
  
          </div>
  
        </div>
      </section><!-- End Constructions Section -->
  
      <!-- ======= Services Section ======= -->
      {{-- <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Services</h2>
            <p>It repulses some people's pleasure in carrying it out, not that the result is that it will turn out to be the most gentle of them.</p>
          </div>
  
          <div class="row gy-4">
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item  position-relative">
                <div class="icon">
                  <i class="fa-solid fa-mountain-city"></i>
                </div>
                <h3>They do not know Mete</h3>
                <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
                <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item --> --}}
  
            {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                </div>
                <h3>Eosle Commodus</h3>
                <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item --> --}}
  
            {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="fa-solid fa-compass-drafting"></i>
                </div>
                <h3>Ledo Markt</h3>
                <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item --> --}}
  
            {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="fa-solid fa-trowel-bricks"></i>
                </div>
                <h3>Asperiores Commodit</h3>
                <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item --> --}}
  
            {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="fa-solid fa-helmet-safety"></i>
                </div>
                <h3>Velit Doloremque</h3>
                <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item --> --}}
  
            {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                </div>
                <h3>Dolori Architecto</h3>
                <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
                <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
  
          </div>
  
        </div>
      </section><!-- End Services Section --> --}}
  
      <!-- ======= Alt Services Section ======= -->
      {{-- <section id="alt-services" class="alt-services">
        <div class="container" data-aos="fade-up">
  
          <div class="row justify-content-around gy-4">
            <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>
  
            <div class="col-lg-5 d-flex flex-column justify-content-center">
              <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
              <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>
  
              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-easel flex-shrink-0"></i>
                <div>
                  <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                  <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
              </div><!-- End Icon Box -->
  
              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-patch-check flex-shrink-0"></i>
                <div>
                  <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                </div>
              </div><!-- End Icon Box -->
  
              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-brightness-high flex-shrink-0"></i>
                <div>
                  <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                  <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
                </div>
              </div><!-- End Icon Box -->
  
              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-brightness-high flex-shrink-0"></i>
                <div>
                  <h4><a href="" class="stretched-link">Tride clov</a></h4>
                  <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet. Et eligendi</p>
                </div>
              </div><!-- End Icon Box -->
  
            </div>
          </div>
  
        </div>
      </section><!-- End Alt Services Section -->
  
      {{-- <!-- ======= Features Section ======= --> --}}
      {{-- <section id="features" class="features section-bg">
        <div class="container" data-aos="fade-up">
  
          <ul class="nav nav-tabs row  g-2 d-flex">
  
            <li class="nav-item col-3">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                <h4>Modisit</h4>
              </a>
            </li><!-- End tab nav item -->
  
            <li class="nav-item col-3">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                <h4>Praesenti</h4>
              </a><!-- End tab nav item -->
  
            <li class="nav-item col-3">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                <h4>Explica</h4>
              </a>
            </li><!-- End tab nav item -->
  
            <li class="nav-item col-3">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                <h4>Nostrum</h4>
              </a>
            </li><!-- End tab nav item -->
  
          </ul>
  
          <div class="tab-content">
  
            <div class="tab-pane active show" id="tab-1">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                  <h3>Voluptatem dignissimos provident</h3>
                  <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                  </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                  <img src="assets/img/features-1.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div><!-- End tab content item -->
  
            <div class="tab-pane" id="tab-2">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                  <h3>Neque exercitationem debitis</h3>
                  <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                  </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img src="assets/img/features-2.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div><!-- End tab content item -->
  
            <div class="tab-pane" id="tab-3">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                  <h3>Voluptatibus commodi accusamu</h3>
                  <ul>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                  </ul>
                  <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img src="assets/img/features-3.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div><!-- End tab content item -->
  
            <div class="tab-pane" id="tab-4">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                  <h3>Omnis fugiat ea explicabo sunt</h3>
                  <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                  </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img src="assets/img/features-4.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div><!-- End tab content item -->
  
          </div>
  
        </div>
      </section><!-- End Features Section --> --}}
   
      <!-- ======= Our Projects Section ======= -->
      <section id="projects" class="projects">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Our Projects</h2>
            <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p>
          </div>
  
          <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
  
            <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-remodeling">Remodeling</li>
              <li data-filter=".filter-construction">Construction</li>
              <li data-filter=".filter-repairs">Repairs</li>
              <li data-filter=".filter-design">Design</li>
            </ul><!-- End Projects Filters -->
  
            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="assets/img/projects/remodeling-1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Remodeling 1</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/remodeling-1.jpg" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                <div class="portfolio-content h-100">
                  <img src="assets/img/projects/construction-1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Construction 1</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/construction-1.jpg" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                <div class="portfolio-content h-100">
                  <img src="assets/img/projects/repairs-1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Repairs 1</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/repairs-1.jpg" title="Repairs 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                <div class="portfolio-content h-100">
                  <img src="assets/img/projects/design-1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Design 1</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/design-1.jpg" title="Repairs 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="assets/img/projects/remodeling-2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Remodeling 2</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/remodeling-2.jpg" title="Remodeling 2" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                <div class="portfolio-content h-100">
                  <img src="assets/img/projects/construction-2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Construction 2</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                <div class="portfolio-content h-100">
                  <img src="assets/img/projects/repairs-2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Repairs 2</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/repairs-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                <div class="portfolio-content h-100">
                  <img src="assets/img/projects/design-2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Design 2</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/design-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="assets/img/projects/remodeling-3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Remodeling 3</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/remodeling-3.jpg" title="Remodeling 3" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                <div class="portfolio-content h-100">
                  <img src="assets/img/projects/construction-3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Construction 3</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/construction-3.jpg" title="Construction 3" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                <div class="portfolio-content h-100">
                  <img src="assets/img/projects/repairs-3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Repairs 3</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/repairs-3.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                <div class="portfolio-content h-100">
                  <img src="assets/img/projects/design-3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Design 3</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="assets/img/projects/design-3.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
  
            </div><!-- End Projects Container -->
  
          </div>
  
        </div>
      </section><!-- End Our Projects Section -->
  
      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Testimonials</h2>
            <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
          </div>
  
          <div class="slides-2 swiper">
            <div class="swiper-wrapper">
  
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
      </section><!-- End Testimonials Section -->
  
      <!-- ======= Recent Blog Posts Section ======= -->
      <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up"">
  
      
      
    <div class=" section-header">
          <h2>Recent Blog Posts</h2>
          <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
        </div>
  
        <div class="row gy-5">
  
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-item position-relative h-100">
  
              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
                <span class="post-date">December 12</span>
              </div>
  
              <div class="post-content d-flex flex-column">
  
                <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>
  
                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                  </div>
                </div>
  
                <hr>
  
                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
  
              </div>
  
            </div>
          </div><!-- End post item -->
  
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="post-item position-relative h-100">
  
              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
                <span class="post-date">July 17</span>
              </div>
  
              <div class="post-content d-flex flex-column">
  
                <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>
  
                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                  </div>
                </div>
  
                <hr>
  
                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
  
              </div>
  
            </div>
          </div><!-- End post item -->
  
          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">
  
              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                <span class="post-date">September 05</span>
              </div>
  
              <div class="post-content d-flex flex-column">
  
                <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>
  
                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                  </div>
                </div>
  
                <hr>
  
                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
  
              </div>
  
            </div>
          </div><!-- End post item -->
  
        </div>
  
        </div>
      </section>
      <!-- End Recent Blog Posts Section -->
  
    </main><!-- End #main -->
  
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
  
      <div class="footer-content position-relative">
        <div class="container">
          <div class="row">
  
            <div class="col-lg-4 col-md-6">
              <div class="footer-info">
                <h3>Pacific Contructor & Enterprises</h3>
                <p>
                  44/270 Meston Road <br>
                  Kanpur Nagar U.P- 208001 , INDIA<br>
                  <strong>Phone:</strong> +91 9369249499<br>
                  <strong>Email:</strong> akhtarnawazkhan56@gmail.com<br>
                </p>
                <div class="social-links d-flex mt-3">
                  <a href="https://twitter.com/AkhtarNawa77571" class="d-flex align-items-center justify-content-center" target="_blank"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/akhtarnawaz.khan.9" class="d-flex align-items-center justify-content-center " target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/akhter8841/" class="d-flex align-items-center justify-content-center" target="_blank"><i class="bi bi-instagram" ></i></a>
                  <a href="https://www.linkedin.com/in/akhter-nawaz-908912241/" class="d-flex align-items-center justify-content-center" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div><!-- End footer info column-->
  
            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><a href="/">Home</a></li>
                  <li><a href="{{route('about')}}">About us</a></li>
                  <li><a href="{{route('services')}}">Services</a></li>
                  <li><a href="#">Terms of service</a></li>
                  <li><a href="#">Privacy policy</a></li>
              </ul>
            </div><!-- End footer links column-->
  
            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">Product Management</a></li>
                <li><a href="#">Marketing</a></li>
                <li><a href="#">Graphic Design</a></li>
              </ul>
            </div><!-- End footer links column-->
  
            {{-- <div class="col-lg-2 col-md-3 footer-links">
              <h4>Hic solutasetp</h4>
              <ul>
                <li><a href="#">Molestiae accusamus iure</a></li>
                <li><a href="#">Excepturi dignissimos</a></li>
                <li><a href="#">Suscipit distinctio</a></li>
                <li><a href="#">Dilecta</a></li>
                <li><a href="#">Sit quas consectetur</a></li>
              </ul>
            </div><!-- End footer links column-->
  
            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Nobis illum</h4>
              <ul>
                <li><a href="#">Ipsam</a></li>
                <li><a href="#">Laudantium dolorum</a></li>
                <li><a href="#">Dinera</a></li>
                <li><a href="#">Trodelas</a></li>
                <li><a href="#">Flexo</a></li>
              </ul>
            </div><!-- End footer links column-->
   --}}
          </div>
        </div>
      </div>
  
      <div class="footer-legal text-center position-relative">
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><span>Pacific Contructor & Enterprises</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
            Designed by <a href="">Akhter Nawaz</a>
          </div>
        </div>
      </div>
  
    </footer>
    <!-- End Footer -->
  
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
    <div id="preloader"></div>
  
   
  
  </body>
  @endsection