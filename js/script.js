// DARK MODE 
let toggleBtn = document.querySelector(".theme-toggle");

if (toggleBtn) {
  // Apply saved theme
  if (localStorage.getItem("theme") === "dark") {
    document.body.classList.add("dark");
  }
  toggleBtn.onclick = function () {
    if (document.body.classList.contains("dark")) {
      document.body.classList.remove("dark");
      localStorage.setItem("theme", "light");
    } else {
      document.body.classList.add("dark");
      localStorage.setItem("theme", "dark");
    }
  };
}

// FORM HANDLING 
let form = document.querySelector("form");
if (form) {
  let members = [];
  form.onsubmit = function (e) {
    e.preventDefault();
    let inputs = form.querySelectorAll("input, textarea");
    let name = inputs[0].value;
    let email = inputs[1].value;
    if (name === "" || email === "") {
      alert("Please fill all required fields!");
      return;
    }
    let member = {
      name: name,
      email: email
    };
    members.push(member);
    alert("Application submitted successfully!");
    console.log("Members List:", members);
    form.reset();
  };
}

//BACK TO TOP BUTTON 
let topBtn = document.getElementById("topBtn");
if (topBtn) {
  window.onscroll = function () {
    if (document.documentElement.scrollTop > 200) {
      topBtn.style.display = "block";
    } else {
      topBtn.style.display = "none";
    }
  };
  topBtn.onclick = function () {
    document.documentElement.scrollTop = 0;
  };
}

// GALLERY CLICK EFFECT 
let images = document.querySelectorAll(".gallery-item img");
if (images.length > 0) {
  images.forEach(function (img) {
    img.onclick = function () {
      alert("Image clicked!");
    };
  });
}
// DYNAMIC MEMBERS 
let container = document.getElementById("membersContainer");
if (container) {
  membersData.forEach(function (member) {
    let card = document.createElement("div");
    card.className = "member-card";
    card.innerHTML =
      "<h3>" + member.name + "</h3>" +
      "<p class='role'>" + member.role + "</p>";
    container.appendChild(card);
  });
}
// SIMPLE CLASS DEMO 
class ClubMember {
  constructor(name, role) {
    this.name = name;
    this.role = role;
  }
  showInfo() {
    return this.name + " is a " + this.role;
  }
}

// Example usage
let demoMember = new ClubMember("Demo User", "Tester");
console.log(demoMember.showInfo());