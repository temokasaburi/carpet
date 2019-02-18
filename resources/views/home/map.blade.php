<div class="map-wrapper relative">
        <iframe
          class="map-iframe"
          src="{{$contact->google_map_frame}}"
          width="100%"
          height="170px"
          style="border:0"
          allowfullscreen=""
        ></iframe>
        </span>
        <div class="social-network-icons">
          <a href="{{$contact->facebook}}"><i class="social-icons fab fa-facebook-f fa-2x"></i></a>
          <a href="{{$contact->instagram}}"><i class="social-icons fab fa-instagram fa-2x"></i></a>
          <a href="{{$contact->twetter}}"><i class="social-icons fab fa-twitter fa-2x"></i></a>
        </div>
        <div class="contact-mail">
          <i class="fas fa-envelope fa-2x"></i>
          <p style="font-size: 24px" class="ml-3">{{$contact->email}}</p>
        </div>
        <div class="contact-number">
          <i class="fas fa-phone-volume fa-2x"></i>
          <p style="font-size:24px" class="ml-3">{{$contact->number}}</p>
        </div>
      </div>