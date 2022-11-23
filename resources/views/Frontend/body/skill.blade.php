<section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
        </div>

        <div class="row skills-content">
          @foreach($skills as $skill)
          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">{{ $skill->name }} <i class="val">{{ $skill->level}}%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->level}}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>


          </div>
          @endforeach
         

        </div>

      </div>
    </section>