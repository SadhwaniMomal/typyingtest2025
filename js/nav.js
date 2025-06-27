window.onload = function () {
  const sidebar = document.querySelector(".sidebar");
  const closeBtn = document.querySelector("#btn");
  const searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", toggleSidebar);
  searchBtn.addEventListener("click", toggleSidebar);

  function toggleSidebar() {
    sidebar.classList.toggle("open");
    updateMenuIcon();
  }

  function updateMenuIcon() {
    if (sidebar.classList.contains("open")) {
      closeBtn.classList.replace("bx-menu", "bx-x");
      document.body.addEventListener("click", closeOnBodyClick);
    } else {
      closeBtn.classList.replace("bx-x", "bx-menu");
      document.body.removeEventListener("click", closeOnBodyClick);
    }
  }

  function closeOnBodyClick(e) {
    if (!sidebar.contains(e.target) && e.target !== closeBtn) {
      sidebar.classList.remove("open");
      closeBtn.classList.replace("bx-x", "bx-menu");
      document.body.removeEventListener("click", closeOnBodyClick);
    }
  }
};
