document.getElementById("b1").onclick = function () {
  window.location.href = "typingtips.php";
};
document.getElementById("b2").onclick = function () {
  window.location.href = "learntyping.php";
};

document.addEventListener("DOMContentLoaded", function () {
  const progressBar = document.getElementById("top-progress-bar");
  progressBar.style.opacity = "1";
  progressBar.style.width = "100%";
  setTimeout(() => {
    progressBar.style.opacity = "0";
  }, 2000);

  // Disable right-click on specific images
  ["man1", "man2", "man3", "man4", "man5"].forEach((id) => {
    const el = document.getElementById(id);
    if (el) {
      el.addEventListener("contextmenu", (e) => e.preventDefault());
    }
  });

  // Dark mode toggle
  const darkToggle = document.getElementById("darkModeToggle");
  const tooltip = document.querySelector(".tooltipdarkmood");
  const body = document.body;

  const userPref = localStorage.getItem("darkMode");
  if (userPref === "dark") {
    body.classList.add("dark-mode");
    darkToggle.checked = true;
  }

  darkToggle.addEventListener("change", () => {
    if (darkToggle.checked) {
      body.classList.add("dark-mode");
      tooltip.style.visibility = "hidden";
      tooltip.style.opacity = 0;
      localStorage.setItem("darkMode", "dark");
    } else {
      body.classList.remove("dark-mode");
      localStorage.setItem("darkMode", "light");
    }
  });

  // Dropdown logic
  const durationBtn = document.getElementById("durationDropdown");
  const difficultyBtn = document.getElementById("difficultyDropdown");
  const durationMenu = document.getElementById("durationDropdownMenu");
  const difficultyMenu = document.getElementById("difficultyDropdownMenu");
  const durationArrow = document.querySelector(".duration-arrow");
  const difficultyArrow = document.querySelector(".difficulty-arrow");

  durationBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    durationMenu.classList.toggle("show");
    difficultyMenu.classList.remove("show");
    durationArrow.classList.toggle("rotate-down");
    difficultyArrow.classList.remove("rotate-down");
  });

  difficultyBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    difficultyMenu.classList.toggle("show");
    durationMenu.classList.remove("show");
    difficultyArrow.classList.toggle("rotate-down");
    durationArrow.classList.remove("rotate-down");
  });

  document.querySelectorAll(".dropdown-item").forEach((item) => {
    item.addEventListener("click", () => {
      durationMenu.classList.remove("show");
      difficultyMenu.classList.remove("show");
      durationArrow.classList.remove("rotate-down");
      difficultyArrow.classList.remove("rotate-down");
    });
  });

  document.body.addEventListener("click", (e) => {
    if (
      !durationBtn.contains(e.target) &&
      !difficultyBtn.contains(e.target) &&
      !durationMenu.contains(e.target) &&
      !difficultyMenu.contains(e.target)
    ) {
      durationMenu.classList.remove("show");
      difficultyMenu.classList.remove("show");
      durationArrow.classList.remove("rotate-down");
      difficultyArrow.classList.remove("rotate-down");
    }
  });
});

if ("scrollRestoration" in history) {
  history.scrollRestoration = "manual";
}

window.addEventListener("load", () => {
  window.scrollTo(0, 0);
});

function setDuration(value) {
  document.getElementById("durationDropdown").textContent = value;
}

function setDifficulty(value) {
  document.getElementById("difficultyDropdown").textContent = value;
}

function startTypingTest() {
  const duration = document
    .getElementById("durationDropdown")
    .textContent.trim();
  const difficulty = document
    .getElementById("difficultyDropdown")
    .textContent.trim();

  const file = `${difficulty.toLowerCase()}_${duration
    .toLowerCase()
    .replace(" ", "_")}.php`;
  const validDurations = [
    "1 Minute",
    "2 Minutes",
    "3 Minutes",
    "5 Minutes",
    "10 Minutes",
  ];
  const validDifficulties = ["Easy", "Normal", "Hard", "Pro", "Specialist"];

  if (
    validDurations.includes(duration) &&
    validDifficulties.includes(difficulty)
  ) {
    window.location.href = file;
  }
}

$(document).ready(function () {
  $("#testimonial-slider").owlCarousel({
    items: 1,
    itemsDesktop: [1000, 1],
    itemsDesktopSmall: [979, 1],
    itemsTablet: [768, 1],
    pagination: false,
    navigation: true,
    navigationText: ["", ""],
    autoPlay: true,
  });
});
