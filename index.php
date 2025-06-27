<?php include 'include/header.php'; ?>
<?php include 'include/nav.php'; ?>
<div class="side-bar-spacing"></div>
<div style="flex: 1; position: relative">
<div class="background"></div>

<div class="container-fluid index-container">
  <img src="./image/io.png" id="pp1" alt="" />
  <img src="./image/iiii.png" id="pp2" alt="" />
  <h3 id="headline1">Accelerate Your Typing Career with Us!</h3>
  <h4 id="headline2">Join 120 Million Fast Typists Worldwide!</h4>
  <div class="css-text-mask">TYPE FAST, SUCCEED FASTER!</div>
  <button id="b1">Typing Tips</button>
  <button id="b2">Typing Labs</button>
  <img id="ar1" src="./image/svg/arrow.svg" alt="" />
  <img id="ar2" src="./image/svg/arrow.svg" alt="" />
  <div class="form-group">
    <img
      src="./image/svg/ja2.svg"
      
      class="ja2-svg"
    />
    <label class="label" for="duration" title="Duration"
      >Duration</label
    >
    <div class="dropdown">
      <button
        type="button"
        id="durationDropdown"
        class="btn dropdown1 "
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        1 Minute
      </button>
      <!-- Arrow for Duration dropdown -->
      <i
        class="fas fa-caret-down dropdown-arrow duration-arrow rotate-up"
      ></i>
      <div class="dropdown-menu" id="durationDropdownMenu">
        <a
          class="dropdown-item"
          href="#"
          onclick="setDuration('1 Minute')"
          >1 Minute</a
        >
        <a
          class="dropdown-item"
          href="#"
          onclick="setDuration('2 Minutes')"
          >2 Minutes</a
        >
        <a
          class="dropdown-item"
          href="#"
          onclick="setDuration('3 Minutes')"
          >3 Minutes</a
        >
        <a
          class="dropdown-item"
          href="#"
          onclick="setDuration('5 Minutes')"
          >5 Minutes</a
        >
        <a
          class="dropdown-item"
          href="#"
          onclick="setDuration('10 Minutes')"
          >10 Minutes</a
        >
      </div>
    </div>
  </div>

  <div class="form-group">
    <img
      src="./image/svg/ja3.svg"
      class="ja3-svg"
    />

    <label class="label" for="difficulty" title="Difficulty"
      >Difficulty</label
    >
    <div class="dropdown">
      <button
        type="button"
        id="difficultyDropdown"
        class="btn dropdown1"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        Easy
      </button>
      <!-- Arrow for Difficulty dropdown -->
      <i
        class="fas fa-caret-down dropdown-arrow difficulty-arrow rotate-up"
      ></i>
      <div class="dropdown-menu" id="difficultyDropdownMenu">
        <a
          class="dropdown-item"
          href="#"
          onclick="setDifficulty('Easy')"
          >Easy</a
        >
        <a
          class="dropdown-item"
          href="#"
          onclick="setDifficulty('Normal')"
          >Normal</a
        >
        <a
          class="dropdown-item"
          href="#"
          onclick="setDifficulty('Hard')"
          >Hard</a
        >
        <a class="dropdown-item" href="#" onclick="setDifficulty('Pro')"
          >Pro</a
        >
        <a
          class="dropdown-item"
          href="#"
          onclick="setDifficulty('Specialist')"
          >Specialist</a
        >
      </div>
    </div>
  </div>

  <button
    id="startButton"
    class="btn-sm"
    onclick="startTypingTest()"
    title="Start Test"
  >
    Start Test
  </button>
</div>

<div class="flip-card" id="card">
  <div class="text3 italic-text">
    Time for typing games!
    <img src="./image/svg/game1.svg" class="game-icon" alt="" />
  </div>

  <div class="flip-card-inner card1">
    <a href="typinggame.php">
      <div class="flip-card-front">
        <img src="./image/car.jpg" class="game-image" alt="" />
        <p class="title">CAR RACING</p>
        <p class="subtitle">Race Around the Typing Track.</p>
      </div>
    </a>
  </div>
</div>

<div class="flip-card" id="card2">
  <div class="flip-card-inner">
    <a href="typinggame.php">
      <div class="flip-card-front">
        <img src="./image/balloon.jpg" class="game-image" alt="" />
        <p class="title">BALLOON KEY</p>
        <p class="subtitle">Balloon Key Float Up with Fast Fingers</p>
      </div>
    </a>
  </div>
</div>

<div class="flip-card" id="card1">
  <div class="flip-card-inner">
    <a href="typinggame.php">
      <div class="flip-card-front">
        <img src="./image/BALLS.jpg" class="game-image" alt="" />
        <p class="title">KEY BALLS</p>
        <p class="subtitle">Unleash Speed, Control the Balls.</p>
      </div>
    </a>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="">
      <div class="testimonial-bg">
        <div class="text4">
          Find out what typists are saying!
          <img src="./image/svg/feedback1.svg" class="feedback-icon" />
        </div>
        <div id="testimonial-slider" class="owl-carousel">
          <div class="testimonial">
            <p class="description">
              This is the best typing test website! The interface is
              clean and user-friendly. The variety of tests and detailed
              feedback have really helped improve my typing speed and
              accuracy. Highly recommended!
            </p>
            <div class="pic">
              <img src="./image/MAN1.jpeg" alt="" id="man1" />
            </div>
            <h3 class="title">Johnathan</h3>
            <span class="post">Doe</span>
          </div>
          <div class="testimonial">
            <p class="description">
              Absolutely love this site! The personalized lessons and
              progress tracking are fantastic. It’s great to see my
              improvements over time. The competitive typing races are a
              fun way to challenge myself and stay motivated.
            </p>
            <div class="pic">
              <img src="./image/girl.avif" alt="" id="man2" />
            </div>
            <h3 class="title">Sarah</h3>
            <span class="post">Lee</span>
          </div>
          <div class="testimonial">
            <p class="description">
              I’ve tried several typing test websites, but this one
              stands out. The adaptive learning algorithm customizes the
              lessons to my skill level, which has made a huge
              difference in my typing proficiency.
            </p>
            <div class="pic">
              <img src="./image/man2.avif" alt="" id="man3" />
            </div>
            <h3 class="title">Michael</h3>
            <span class="post">Brown</span>
          </div>
          <div class="testimonial">
            <p class="description">
              A must-visit site for anyone looking to improve their
              typing skills! The comprehensive lessons cover everything
              from basics to advanced techniques. I’ve seen significant
              progress in my typing speed and accuracy.
            </p>
            <div class="pic">
              <img src="./image/girl.jpg" alt="" id="man4" />
            </div>
            <h3 class="title">Emily</h3>
            <span class="post">Rogers</span>
          </div>
          <div class="testimonial">
            <p class="description">
              This website is a game-changer! The feedback on my typing
              errors and the practice exercises tailored to my
              weaknesses have been incredibly helpful. suggested website
              for beginners..
            </p>
            <div class="pic">
              <img src="./image/man4.jpg" alt="" id="man5" />
            </div>
            <h3 class="title">David</h3>
            <span class="post">King</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="paragraphsection">
  <div class="tips-heading-container">
    <h4 class="tips-heading">Typing Tips For Learner</h4>
    <img src="./image/svg/tip.svg" alt="" class="tip-icon" />
  </div>
  <img src="./image/sad.png" alt="" class="sad-icon" />
  <p class="paragraphtext">
    <span class="headingtext bold-heading" style="margin-top: 12px">
      Why can't typists speed up Easily?
    </span>
    Many people struggle to improve their typing speed and typing test
    results because they don't practice regularly or focus on accuracy.
    They might not learn the right finger positions or use typing
    exercises that can help. Without these important steps, it's hard to
    get better at typing quickly and smoothly. But with consistent
    practice and the right techniques, anyone can improve their typing
    speed and efficiency. Remember to take breaks to avoid fatigue, use
    typing games to make practice fun, and gradually challenge yourself
    with more difficult texts.
  </p>

  <img src="./image/happy.png" alt="" class="happy-icon" />

  <p class="paragraphtext1">
    <span class="headingtext bold-heading">
      What makes some Typists Successful?
    </span>
    What makes typists successful? Successful typists practice
    regularly, focusing on typing both fast and accurately. They learn
    how to place their fingers correctly and use typing exercises,
    typing speed tests, and typing tests to get better. They take breaks
    to stay fresh, play typing games for fun, and keep challenging
    themselves with harder texts and typing speed tests. By
    incorporating various typing tests into their routine and being
    dedicated and patient, they steadily improve their typing speed and
    accuracy, reaching their goals step by step.
  </p>
  <button class="btt" onclick="window.location.href='blog.php'">
    Read more
  </button>
</div>

<?php include 'include/footer.php'; ?>
