const humberger = document.querySelector(".humberger");
const navUl = document.querySelector("nav ul");

humberger.addEventListener('click', () => {
      humberger.classList.toggle("slide");
      navUl.classList.toggle("slide");
});

document.querySelectorAll(".nav-link").forEach(n => n.
      addEventListener('click', () => {
            humberger.classList.remove("slide");
            navUl.classList.remove("slide");
      }));