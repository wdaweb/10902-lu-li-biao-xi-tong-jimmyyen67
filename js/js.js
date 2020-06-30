var li_home = document.querySelector("#li_home");
var li_about = document.querySelector("#li_about");
var li_skills = document.querySelector("#li_skills");
var li_portfolio = document.querySelector("#li_portfolio");
var li_contact = document.querySelector("#li_contact");
var main = document.querySelector("#main");

toPageH();
function toPageH() {
  $.get("../frontend/home.html", {}, function (res) {
    li_home.classList.add("li_focused");
    li_about.classList.remove("li_focused");
    li_skills.classList.remove("li_focused")
    li_portfolio.classList.remove("li_focused")
    li_contact.classList.remove("li_focused");
    main.innerHTML = res;
    main.classList.add("show");
    console.log(res);
  });
}
function toPageA() {
  $.get("../frontend/about.html", {}, function (res) {
    li_home.classList.remove("li_focused");
    li_about.classList.add("li_focused");
    li_skills.classList.remove("li_focused")
    li_portfolio.classList.remove("li_focused")
    li_contact.classList.remove("li_focused");
    main.innerHTML = res;
    main.classList.add("show");
    console.log(res);
  });
}
function toPageS() {
  $.get("../frontend/skills.html", {}, function (res) {
    li_home.classList.remove("li_focused");
    li_about.classList.remove("li_focused");
    li_skills.classList.add("li_focused")
    li_portfolio.classList.remove("li_focused")
    li_contact.classList.remove("li_focused");
    main.innerHTML = res;
    main.classList.add("show");
    console.log(res);
  });
}
function toPageP() {
  $.get("../frontend/portfolio.html", {}, function (res) {
    li_home.classList.remove("li_focused");
    li_about.classList.remove("li_focused");
    li_skills.classList.remove("li_focused")
    li_portfolio.classList.add("li_focused")
    li_contact.classList.remove("li_focused");
    main.innerHTML = res;
    main.classList.add("show");
    console.log(res);
  });
}

function toPageC() {
  $.get("../frontend/contact.html", {}, function (res) {
    li_home.classList.remove("li_focused");
    li_about.classList.remove("li_focused");
    li_skills.classList.remove("li_focused")
    li_portfolio.classList.remove("li_focused")
    li_contact.classList.add("li_focused");
    main.innerHTML = res;
    main.classList.add("show");
    console.log(res);
  });
}
