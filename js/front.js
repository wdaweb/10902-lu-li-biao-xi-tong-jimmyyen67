var li_home = document.querySelector("#li_home");
var li_about = document.querySelector("#li_about");
var li_skills = document.querySelector("#li_skills");
var li_portfolio = document.querySelector("#li_portfolio");
var li_contact = document.querySelector("#li_contact");
var li_login = document.querySelector("#li_login");
var main = document.querySelector("#main");
var pageBack = document.querySelector("#pageBack");

toPageH();
function toPageH() {
  $.get("./frontend/home.html", {}, function (res) {
    li_home.classList.add("li_focused");
    li_about.classList.remove("li_focused");
    li_experience.classList.remove("li_focused");
    li_skills.classList.remove("li_focused");
    li_portfolio.classList.remove("li_focused");
    li_contact.classList.remove("li_focused");
    main.innerHTML = res;
  });
}
function toPageA() {
  $.get("./frontend/about.html", {}, function (res) {
    li_home.classList.remove("li_focused");
    li_about.classList.add("li_focused");
    li_experience.classList.remove("li_focused");
    li_skills.classList.remove("li_focused");
    li_portfolio.classList.remove("li_focused");
    li_contact.classList.remove("li_focused");
    li_login.classList.remove("li_focused");
    $.get("./frontend/about.php", { res }, function (display) {
      main.innerHTML = display;
    });
  });
}
function toPageE() {
  $.get("./frontend/experience.html", {}, function (res) {
    li_home.classList.remove("li_focused");
    li_about.classList.remove("li_focused");
    li_experience.classList.add("li_focused");
    li_skills.classList.remove("li_focused");
    li_portfolio.classList.remove("li_focused");
    li_contact.classList.remove("li_focused");
    li_login.classList.remove("li_focused");
    $.get("./frontend/experience.php", { res }, function (display) {
      main.innerHTML = display;
    });
  });
}
function toPageS() {
  $.get("./frontend/skills.html", {}, function (res) {
    li_home.classList.remove("li_focused");
    li_about.classList.remove("li_focused");
    li_experience.classList.remove("li_focused");
    li_skills.classList.add("li_focused");
    li_portfolio.classList.remove("li_focused");
    li_contact.classList.remove("li_focused");
    li_login.classList.remove("li_focused");
    $.get("./frontend/skills.php", { res }, function (display) {
      main.innerHTML = display;
    });
  });
}
function toPageP() {
  $.get("./frontend/portfolio.html", {}, function (res) {
    li_home.classList.remove("li_focused");
    li_about.classList.remove("li_focused");
    li_experience.classList.remove("li_focused");
    li_skills.classList.remove("li_focused");
    li_portfolio.classList.add("li_focused");
    li_contact.classList.remove("li_focused");
    li_login.classList.remove("li_focused");
    $.get("./frontend/portfolio.php", { res }, function (display) {
      main.innerHTML = display;
    });
  });
}

function toPageC() {
  $.get("./frontend/contact.html", {}, function (res) {
    li_home.classList.remove("li_focused");
    li_about.classList.remove("li_focused");
    li_experience.classList.remove("li_focused");
    li_skills.classList.remove("li_focused");
    li_portfolio.classList.remove("li_focused");
    li_contact.classList.add("li_focused");
    li_login.classList.remove("li_focused");
    $.get("./frontend/contact.php", { res }, function (display) {
      main.innerHTML = display;
    });
  });
}

loginBar();
function loginBar() {
  $.get("./frontend/loginBar.html", {}, function (res) {
    $.get("./frontend/loginBar.php", { res }, function (display) {
      li_login.innerHTML = display;
    });
  });
}
function logout() {
  $.get("api/checkLogin.php", {}, function (res) {
    history.go(0);
  });
}
// 漢堡按鈕及登入頁面的展開
function openLogin() {
  document.querySelector(".loginPanel").classList.toggle("show");
  document.querySelector("#loginBurger").classList.toggle("loginBurgerOP");
}

//編輯頁面開啟或關閉
function editSwitch() {
  $("#pageFront").toggleClass("pageFrontToggle");
  $("#pageBack").toggleClass("pageBackToggle");
  toPageBack();
  $.getScript("js/back.js");
}
function toPageBack() {
  $.get("./backend/admin.html", {}, function (res) {
    $.get("./backend/admin.php", { res }, function (display) {
      pageBack.innerHTML = display;
    });
  });
}
