<section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
       </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{ asset('storage/upload/photos/about/'.$about->profile_photo)}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>{{ $about->title }}</h3>
            <p>{{ $about->description }}</p>
          </div>
        </div>
      </div>
    </section>