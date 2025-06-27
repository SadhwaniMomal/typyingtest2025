<?php include 'include/header.php'; ?>
<?php include 'include/nav.php'; ?>

<div class="feedback-wrapper">
  <div class="feedback-content">
    <div class="feedback-container">
      <div class="feedback-info" id="feedback-info">
        <h3 class="feedback-heading">Give Us Your Feedback!</h3>
        <p class="feedback-text">
          Your feedback is important to us! Share your experience with our
          typing speed test site, and let us know how we can make it better
          for you. We're committed to creating the best typing tools for
          you.
        </p>
        <p><img src="./image/AA.png" alt="Feedback Illustration" class="feedback-image img-fluid" /></p>
      </div>

      <div class="feedback-form-wrapper">
        <h1 class="feedback-form-title">Fill the form</h1>
        <form
          method="post"
          id="feedbackForm"
          name="feedbackForm"
          onsubmit="return validateForm()"
        >
          <div class="form-group">
            <label class="form-label">Name</label>
            <input
              type="text"
              class="form-control"
              name="name"
              id="feedback-name"
              placeholder="Your name"
              required
            />
          </div>
          <div class="form-group">
            <label class="form-label">Title</label>
            <input
              type="text"
              class="form-control"
              name="subject"
              id="feedback-subject"
              placeholder="Title"
              required
            />
          </div>
          <div class="form-group">
            <label class="form-label">Feedback</label>
            <textarea
              class="form-control"
              name="message"
              id="feedback-message"
              rows="5"
              placeholder="Your Feedback"
              required
            ></textarea>
          </div>
          <div class="form-group submit-group">
            <input
              type="submit"
              value="Send Feedback"
              class="btn btn-primary custom-btn-primary"
            />
          </div>
        </form>

        <!-- Loader -->
        <div class="loader-overlay" id="loaderOverlay">
          <div>
            <svg height="108px" width="108px" viewBox="0 0 128 128" class="loader">
              <defs>
                <clipPath id="loader-eyes">
                  <circle transform="rotate(-40,64,64) translate(0,-56)" r="8" cy="64" cx="64" class="loader__eye1"></circle>
                  <circle transform="rotate(40,64,64) translate(0,-56)" r="8" cy="64" cx="64" class="loader__eye2"></circle>
                </clipPath>
                <linearGradient y2="1" x2="0" y1="0" x1="0" id="loader-grad">
                  <stop stop-color="#000" offset="0%"></stop>
                  <stop stop-color="#fff" offset="100%"></stop>
                </linearGradient>
                <mask id="loader-mask">
                  <rect fill="url(#loader-grad)" height="128" width="128" y="0" x="0"></rect>
                </mask>
              </defs>
              <g stroke-dasharray="175.93 351.86" stroke-width="12" stroke-linecap="round">
                <g>
                  <rect clip-path="url(#loader-eyes)" height="64" width="128" fill="hsl(193,90%,50%)"></rect>
                  <g stroke="hsl(193,90%,50%)" fill="none">
                    <circle transform="rotate(180,64,64)" r="56" cy="64" cx="64" class="loader__mouth1"></circle>
                    <circle transform="rotate(0,64,64)" r="56" cy="64" cx="64" class="loader__mouth2"></circle>
                  </g>
                </g>
                <g mask="url(#loader-mask)">
                  <rect clip-path="url(#loader-eyes)" height="64" width="128" fill="hsl(223,90%,50%)"></rect>
                  <g stroke="hsl(223,90%,50%)" fill="none">
                    <circle transform="rotate(180,64,64)" r="56" cy="64" cx="64" class="loader__mouth1"></circle>
                    <circle transform="rotate(0,64,64)" r="56" cy="64" cx="64" class="loader__mouth2"></circle>
                  </g>
                </g>
              </g>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'include/footer.php'; ?>
