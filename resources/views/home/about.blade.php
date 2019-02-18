<section class="about-us-section" id="about-us">
        <div class="row m-0 about-us-row">
          <div class="col-4 about-us-header-div p-0">
            <h1>ჩვენს შესახებ</h1>
          </div>
          <div class="col-6 offset-2">
            <div class="row m-0 about-us-row-2">
              <div class="about-us-img-div col-6 p-0">
                <img
                  src="{{$about->img1}}"
                  alt="img"
                  class="about-us-img-1"
                />
              </div>
              <div class="about-us-2nd-img-div col-6 p-0">
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
          <div class="col-8">
            <p class="about-us-p">{{$about->text}}</p>
          </div>
        </div>
      </section>