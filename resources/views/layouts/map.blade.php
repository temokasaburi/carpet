<div class="map-wrapper relative">
        <iframe
          class="map-iframe relative"
          src="{{$contact->google_map_frame}}"
  
          style="border:0; width:100%; height:170px"
          allowfullscreen=""
        ></iframe>
        <div class="map-overlay"></div>
        <div class="social-network-icons">
          <a href="{{$contact->facebook}}" class="social-links">
            <i class="social-icons fab fa-facebook-f fa-2x fontawesome-icons"></i
          ></a>
          <a href="{{$contact->instagram}}" class="social-links">
            <i class="social-icons fab fa-instagram fa-2x fontawesome-icons"></i
          ></a>
          <a href="{{$contact->twitter}}" class="social-links">
            <i class="social-icons fab fa-twitter fa-2x fontawesome-icons"></i
          ></a>
        </div>
        <div class="contact-mail">
          <i class="fas fa-envelope fa-2x fontawesome-icons"></i>
          <p class="ml-3 contact-email contact-items">
            {{$contact->map}}
          </p>
        </div>
        <div class="contact-number">
          <i class="fas fa-phone-volume fa-2x  fontawesome-icons"></i>
          <p class="ml-3 contact-items">{{$contact->number}}</p>
        </div>
      </div>