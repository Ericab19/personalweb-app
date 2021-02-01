<!DOCTYPE html>
<html lang="en">
<head>
  <!-- cursor -->
  <style type="text/css">
    body{cursor: url("http://2.bp.blogspot.com/-NH2UONdsijY/UTl0CNeBM-I/AAAAAAAACj0/n2RgI7lUAG4/s1600/kursor+besi+jonarendra.blog.png"), auto;}
    </style>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hi, I'm Eric</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/LOGO.png" type="image/png">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
          <img src="/img/LOGO.png" width="80" height="80" alt="My-Logo" loading="lazy">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home
                  <span class="sr-only">(current)</span>
                </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portofolio">Portofolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#experience">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Get In Touch</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Full Page Image Header with Vertically Centered Content -->
  <header class="masthead">
    <div class="container">
      <div class="row align-items-center row-title">
       <div class="col-sm-3 text-center" data-aos="fade-right" data-aos-duration="1500">
           <img src="/img/ericab.png" class="img-fluid my-photo" alt="My-Photo">
        </div> 
        <div class="col-sm-9 text-center" data-aos="fade-up" data-aos-duration="1500">
        <div class="my-name"> Halo Saya <strong>Eric</strong></div> 
        <div class="caption"> Mahasiswa Universitas Gunadarma</div>
      </div>
    </div>
</div>
  </header>
  
  <!-- Page Content -->
  <section id="portofolio" class="py-5">
    <div class="container">
    <h3 class="text-center title-section"><strong>PORTOFOLIO</strong>
    </h3>
    <p class="text-center font-weight-light mb-5"><small>SELECTED LATEST WORKS</small></p>
  <div class="container">
    <div class="row grid-row">
      @foreach($portofolios as $portofolio)
      <div class="col-md-4">
        <img src="{{$portofolio->link}}" width="287px" height="568px" alt="">
      </div>
    @endforeach
    </div>
  </div>
  </div>
  </section>

  <section id="experience" class="py-5 bg-dark text-white">
    <div class="container">
      <h2 class="font-weight-light">
        EXPERIENCE
      </h2>
      <hr class="mb-5" style="border-top: 1px solid #FFFFFF">
      @foreach($experiences as $experience)
    <div class="row mb-5">
      <div class="col-lg-8">
        <h4 class="mb-0">{{$experience->title}}</h4>
        <p class="lead">{{$experience->loc}}</p>
        <p>{{$experience->description}}</p>
      </div>
      <div class="col-lg-4 text-lg-right">
        {{$experience->since}}
      </div>
    </div>
    @endforeach
    </div>
  </section>

<section id="education" class="py-5">
  <div class="container">
    <h2 class="font-weight-light">
      EDUCATION
    </h2>
    <hr class="mb-4">
    @foreach($educations as $education)
    <div class="row mb-5">
      <div class="col-lg-8">
<h4 class="mb-0">{{$education->title}}</h4>
<p class="lead">{{$education->description}}</p>
      </div>
<div class="col-lg-4 text-lg-right">{{$education->since}}</div>
    </div>
    @endforeach
  </div>
</section>

<section id="about" class="py-5">
<div class="container">
  <h3 class="text-center about-me mb-5"><strong>ABOUT ME</strong></h3>

  <div class="row">
    <div class="col-lg-6 px-5">
      <blockquote class="blockquote">
        <p>
          <i class="fa fa-quote-left fa-2x">
            
          </i>
        </p>
        <p class="mb-0">
          <i>
            Cintai hidup yang anda jalani. Jalani hidup yang anda cintai
          </i>
        </p>
        <footer class="blockquote-footer">Unknown in
           <cite title="Source Title">Momentum Chrome</cite>

        </footer>
      </blockquote>
    </div>
    <div class="col-lg-6 px-5">
      <h6>
        Saya tertarik dengan programming. Sangat menyenangkan ketika berhasil membangun suatu aplikasi baik aplikasi mobile ataupun membangun sebuah website.
      </h6>
      <p>
        Saat lulus nanti sangat ingin bekerja sebagai apps atau web developer.
      </p>
      <p>
        Saya memiliki pengelaman belajar Laravel, Figma, Dekstop programming, dan juga Networking.
      </p>
      <br><a class="btn btn-outline-dark btn-myresume" href="/img/CV.pdf" 
      target="_blank" role="button">
    <i class="fas fa-arrow-alt-circle-down" aria-hidden="true"></i>
    MY RESUME
    </a>
    </div>
  </div>
</div>

</section>

<section id="contact" class="py-5">
  <div class="container">
    <h3 class="text-center about-me mb-5"> <strong>GET IN TOUCH</strong></h3>
    <div class="row">
      <div class="col-lg-3 text-center">
        <a href="https://www.google.com/maps/place/6%C2%B021'37.6%22S+106%C2%B050'30.5%22E/@-6.3604416,106.8396098,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-6.3604416!4d106.8417985?hl=en" 
        target="_blank"> <i class="far fa-map fa-contact-custom fa-4x mb-2"></i></a>
          <p><strong>Alamat saya</strong></p>
          @foreach($getintouchs as $getintouch)
          <p>{{$getintouch->alamat}}</p>
          @endforeach
      </div>

      <div class="col-lg-3 text-center">
        <a href="mailto: albetdron19@gmail.com" target="_blank"> <i class="far fa-envelope-open fa-contact-custom fa-4x mb-2"></i></a>
        <p><strong>E-mail saya</strong></p>
        @foreach($getintouchs as $getintouch)
        <p>{{$getintouch->email}}</p>
        @endforeach
      </div>

      <div class="col-lg-3 text-center">
        <a href="https://api.whatsapp.com/send?phone=6282298635460&text=Hi, Eric" target="_blank"><i class="far fa-comments fa-contact-custom fa-4x mb-2"></i></a>
        <p><strong>Whatsapp</strong></p>
        @foreach($getintouchs as $getintouch)
        <p>{{$getintouch->whatsupp}}</p>
        @endforeach
      </div>

      <div class="col-lg-3 text-center">
        <i class="far fa-clock fa-contact-custom fa-4x mb-2"></i>
        <p><strong>Jam kerja</strong></p>
        @foreach($getintouchs as $getintouch)
        <p>{{$getintouch->jamkerja}}</p>
        @endforeach
      </div>
    </div>
  </div>
</section>

<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
  <div class="container text-center">
<small>Copyright &copy; Eric Albetdron</small>
  </div>
</footer>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>
</html>