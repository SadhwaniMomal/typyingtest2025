<?php include 'include/header.php'; ?>
<?php include 'include/nav.php'; ?>

<div>
  <div class="container contact-wrapper">
    <div class="contact-info-box">
      <h5 class="contact-heading">
        Connect with Typing Twist for Support and Inquiries!
      </h5>
      <p class="contact-description">
        We're here to assist you! For any questions, suggestions, or support
        with Typing Twist, don't hesitate to reach out to us—our team is
        dedicated to providing you with an exceptional typing experience.
      </p>

      <div class="contact-detail">
        <h4 class="contact-location">Business Bay Dubai UAE</h4>
        <img class="contact-location-icon" src="./image/svg/location-pin.svg" alt="Location" />
      </div>

      <div class="contact-detail">
        <h4 class="contact-email">typingtwist@gmail.com</h4>
        <img class="contact-email-icon" src="./image/svg/email.svg" alt="Email" />
      </div>

      <div class="social-icons">
        <img class="social-icon social-x" src="./image/svg/X.svg" alt="X" title="Working on it" />
        <img class="social-icon social-instagram" src="./image/svg/instaa.svg" alt="Instagram" title="Working on it" />
        <img class="social-icon social-facebook" src="./image/svg/facebook.svg" style="height: 43px; margin-top: 14px; width: 43px" alt="Facebook" title="Working on it" />
        <img class="social-icon social-gmail" src="./image/gmail.png" alt="Gmail" title="Working on it" />
      </div>
    </div>

    <form id="contact-form">
      <h1 class="form-title text-center">Get in Touch.</h1>

      <div class="form-group position-relative">
        <label for="input-name" class="d-block">
          <i class="form-icon" data-feather="user"></i>
        </label>
        <input type="text" id="input-name" class="form-input" placeholder="Name" />
      </div>

      <div class="form-group position-relative">
        <label for="input-email" class="d-block">
          <i class="form-icon" data-feather="mail"></i>
        </label>
        <input type="email" id="input-email" class="form-input" placeholder="E-mail" />
      </div>

      <div class="form-group">
        <textarea id="input-message" rows="7" class="form-textarea" placeholder="Message"></textarea>
      </div>

      <div class="text-center">
        <button type="submit" class="btn contact-btn btn-primary">Send message</button>
      </div>
    </form>
  </div>

  <div class="loader-overlay" id="loader-overlay">
    <div>
      <svg height="108px" width="108px" viewBox="0 0 128 128" class="loading-animation">
        <defs>
          <clipPath id="clip-eyes">
            <circle transform="rotate(-40,64,64) translate(0,-56)" r="8" cy="64" cx="64" class="eye-left"></circle>
            <circle transform="rotate(40,64,64) translate(0,-56)" r="8" cy="64" cx="64" class="eye-right"></circle>
          </clipPath>
          <linearGradient y2="1" x2="0" y1="0" x1="0" id="gradient-mask">
            <stop stop-color="#000" offset="0%"></stop>
            <stop stop-color="#fff" offset="100%"></stop>
          </linearGradient>
          <mask id="mask-loader">
            <rect fill="url(#gradient-mask)" height="128" width="128"></rect>
          </mask>
        </defs>

        <g stroke-dasharray="175.93 351.86" stroke-width="12" stroke-linecap="round">
          <g>
            <rect clip-path="url(#clip-eyes)" height="64" width="128" fill="hsl(193,90%,50%)"></rect>
            <g stroke="hsl(193,90%,50%)" fill="none">
              <circle transform="rotate(180,64,64)" r="56" cy="64" cx="64" class="mouth-top"></circle>
              <circle transform="rotate(0,64,64)" r="56" cy="64" cx="64" class="mouth-bottom"></circle>
            </g>
          </g>
          <g mask="url(#mask-loader)">
            <rect clip-path="url(#clip-eyes)" height="64" width="128" fill="hsl(223,90%,50%)"></rect>
            <g stroke="hsl(223,90%,50%)" fill="none">
              <circle transform="rotate(180,64,64)" r="56" cy="64" cx="64" class="mouth-top"></circle>
              <circle transform="rotate(0,64,64)" r="56" cy="64" cx="64" class="mouth-bottom"></circle>
            </g>
          </g>
        </g>
      </svg>
    </div>
  </div>
</div>

<?php include 'include/footer.php'; ?>
