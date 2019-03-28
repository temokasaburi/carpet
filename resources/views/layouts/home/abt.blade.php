<section class="about-us-section" id="about-us">
        <div class="row m-0 about-us-row">
          <div class="col-sm-6 col-12 about-us-header-div p-0">
            <h2 class="about-us-header">ჩვენს შესახებ</h2>
          </div>
          <div class="col-12 col-sm-6 about-us-decoration">
            <div class="row m-0 about-us-row-2">
              <div class="about-us-img-div col-6 d-none d-sm-block p-0">
                <img
                  src="{{$about->img1}}"
                  alt="img"
                  class="about-us-img-1"
                />
              </div>
              <div class="about-us-2nd-img-div col-12 col-sm-6 p-0">
                <img
                  src="{{$about->img2}}"
                  alt="carpet"
                  class="about-us-img-2"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="row about-us-text-div m-0">
          <div class="col-12 col-sm-8 about-us-p-wrapper">
            <p class="about-us-p">
              {{$about->text}}
            </p>
          </div>
        </div>
      </section>