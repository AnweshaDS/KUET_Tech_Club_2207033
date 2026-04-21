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