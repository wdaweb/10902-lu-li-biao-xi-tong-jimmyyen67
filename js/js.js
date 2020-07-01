var li_home = document.querySelector("#li_home");
var li_about = document.querySelector("#li_about");
var li_skills = document.querySelector("#li_skills");
var li_portfolio = document.querySelector("#li_portfolio");
var li_contact = document.querySelector("#li_contact");
var li_login = document.querySelector("#li_login");
var main = document.querySelector("#main");

toPageH();
function toPageH() {
  $.get("../frontend/home.php", {}, function (res) {
    li_home.classList.add("li_focused");
    li_about.classList.remove("li_focused");
    li_experience.classList.remove("li_focused");
    li_skills.classList.remove("li_focused")
    li_portfolio.classList.remove("li_focused")
    li_contact.classList.remove("li_focused");
    li_login.classList.remove("li_focused");
    main.innerHTML = res;
    console.log(res);
  });
}
function toPageA() {
  $.get("../frontend/about.php", {}, function (res) {
    li_home.classList.remove("li_focused");
    li_about.classList.add("li_focused");
    li_experience.classList.remove("li_focused");
    li_skills.classList.remove("li_focused")
    li_portfolio.classList.remove("li_focused")
    li_contact.classList.remove("li_focused");
    li_login.classList.remove("li_focused");
    main.innerHTML = res;
    console.log(res);
  });
}
function toPageE() {
  $.get("../frontend/experience.php", {}, function (res) {
    li_home.classList.remove("li_focused");
    li_about.classList.remove("li_focused");
    li_experience.classList.add("li_focused");
    li_skills.classList.remove("li_focused")
    li_portfolio.classList.remove("li_focused")
    li_contact.classList.remove("li_focused");
    li_login.classList.remove("li_focused");
    main.innerHTML = res;
    console.log(res);
  });
}
function toPageS() {
  $.get("../frontend/skills.php", {}, function (res) {
    li_home.classList.remove("li_focused");
    li_about.classList.remove("li_focused");
    li_experience.classList.remove("li_focused");
    li_skills.classList.add("li_focused")
    li_portfolio.classList.remove("li_focused")
    li_contact.classList.remove("li_focused");
    li_login.classList.remove("li_focused");
    main.innerHTML = res;
    console.log(res);
  });
}
function toPageP() {
  $.get("../frontend/portfolio.php", {}, function (res) {
    li_home.classList.remove("li_focused");
    li_about.classList.remove("li_focused");
    li_experience.classList.remove("li_focused");
    li_skills.classList.remove("li_focused")
    li_portfolio.classList.add("li_focused")
    li_contact.classList.remove("li_focused");
    li_login.classList.remove("li_focused");
    main.innerHTML = res;
    console.log(res);
  });
}

function toPageC() {
  $.get("../frontend/contact.php", {}, function (res) {
    li_home.classList.remove("li_focused");
    li_about.classList.remove("li_focused");
    li_experience.classList.remove("li_focused");
    li_skills.classList.remove("li_focused")
    li_portfolio.classList.remove("li_focused")
    li_contact.classList.add("li_focused");
    li_login.classList.remove("li_focused");
    main.innerHTML = res;
    console.log(res);
  });
}

loginBar();
function loginBar() {
  $.get("../frontend/login.php", {}, function (res) {
    li_login.innerHTML = res;
    console.log(res);
  });
}
// 漢堡按鈕及登入頁面的展開
function openLogin() {
  document.querySelector(".loginPanel").classList.toggle("show");
  document.querySelector("#loginBurger").classList.toggle("loginBurgerOP");
}