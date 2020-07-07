var li_home = document.querySelector("#li_home");
var li_about = document.querySelector("#li_about");
var li_autobio = document.querySelector("#li_autobio");
var li_collection = document.querySelector("#li_collection");
var li_condition = document.querySelector("#li_condition");
var li_login = document.querySelector("#li_login");
var main = document.querySelector("#main");
var pageBack = document.querySelector("#pageBack");

$.getScript("js/back.js");

window.onload = toPageA();
function toPageA() {
  $.get("./frontend/about.html", {}, function (res) {
    li_about.classList.add("li_focused");
    li_experience.classList.remove("li_focused");
    li_autobio.classList.remove("li_focused");
    li_collection.classList.remove("li_focused");
    li_condition.classList.remove("li_focused");
    li_login.classList.remove("li_focused");
    $.get("./frontend/about.php", { res }, function (display) {
      main.innerHTML = display;
    });
  });
}
function toPageE() {
  $.get("./frontend/experience.html", {}, function (res) {
    li_about.classList.remove("li_focused");
    li_experience.classList.add("li_focused");
    li_autobio.classList.remove("li_focused");
    li_collection.classList.remove("li_focused");
    li_condition.classList.remove("li_focused");
    li_login.classList.remove("li_focused");
    $.get("./frontend/experience.php", { res }, function (display) {
      main.innerHTML = display;
    });
  });
}
function toPageB() {
  $.get("./frontend/autobio.html", {}, function (res) {
    li_about.classList.remove("li_focused");
    li_experience.classList.remove("li_focused");
    li_autobio.classList.add("li_focused");
    li_collection.classList.remove("li_focused");
    li_condition.classList.remove("li_focused");
    li_login.classList.remove("li_focused");
    $.get("./frontend/autobio.php", { res }, function (display) {
      main.innerHTML = display;
    });
  });
}
function toPageP() {
  $.get("./frontend/collection.html", {}, function (res) {
    li_about.classList.remove("li_focused");
    li_experience.classList.remove("li_focused");
    li_autobio.classList.remove("li_focused");
    li_collection.classList.add("li_focused");
    li_condition.classList.remove("li_focused");
    li_login.classList.remove("li_focused");
    $.get("./frontend/collection.php", { res }, function (display) {
      main.innerHTML = display;
    });
  });
}

function toPageC() {
  $.get("./frontend/condition.html", {}, function (res) {
    li_about.classList.remove("li_focused");
    li_experience.classList.remove("li_focused");
    li_autobio.classList.remove("li_focused");
    li_collection.classList.remove("li_focused");
    li_condition.classList.add("li_focused");
    li_login.classList.remove("li_focused");
    $.get("./frontend/condition.php", { res }, function (display) {
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
  $.getScript("js/back.js");
  // toPageBack();
}
// function toPageBack() {
//   $.get("./backend/admin.html", {}, function (res) {
//     $.get("./backend/admin.php", { res }, function (display) {
//       pageBack.innerHTML = display;
//     });
//   });
//   $.getScript("js/back.js");
// }
