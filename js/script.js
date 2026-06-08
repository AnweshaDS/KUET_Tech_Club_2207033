// DARK MODE 
let toggleBtn = document.querySelector(".theme-toggle");

if (toggleBtn) {
    let icon = toggleBtn.querySelector("i");
    if (localStorage.getItem("theme") === "dark") {
        document.body.classList.add("dark");
        if(icon){
            icon.className = "fa-solid fa-sun";
        }
    }

    toggleBtn.addEventListener("click", function () {
        document.body.classList.toggle("dark");
        if (document.body.classList.contains("dark")) {
            localStorage.setItem("theme", "dark");
            if(icon){
                icon.className = "fa-solid fa-sun";
            }
        }else{
            localStorage.setItem("theme", "light");
            if(icon){
                icon.className = "fa-solid fa-moon";
            }
        }
    });
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
let links = document.querySelectorAll(".nav-links a");

//Highlight active link
links.forEach(function(link) {
  if (link.href === window.location.href) {
    link.classList.add("active");
  }
});