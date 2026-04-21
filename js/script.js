// DARK MODE TOGGLE
const toggleBtn = document.querySelector(".theme-toggle");

toggleBtn.addEventListener("click", () => {
  document.body.classList.toggle("dark");
});

// FORM SUBMIT ALERT
const form = document.querySelector("form");

if (form) {
  form.addEventListener("submit", function(e) {
    e.preventDefault(); // stop page reload
    alert("Application submitted successfully!");
  });
}

// BACK TO TOP BUTTON
const topBtn = document.getElementById("topBtn");

window.onscroll = function () {
  if (document.documentElement.scrollTop > 200) {
    topBtn.style.display = "block";
  } else {
    topBtn.style.display = "none";
  }
};

topBtn.onclick = function () {
  window.scrollTo({ top: 0, behavior: "smooth" });
};

