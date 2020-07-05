var backMain = $("#backMain");
var back_A = $("#back_about");
var back_E = $("#back_experience");
var back_S = $("#back_skills");
var back_P = $("#back_portfolio");
var back_C = $("#back_contact");

function toBackA() {
  $.get("./backend/about.html", {}, function (res) {
    back_A.addClass("back_focused");
    back_E.removeClass("back_focused");
    back_S.removeClass("back_focused");
    back_P.removeClass("back_focused");
    back_C.removeClass("back_focused");
    $.get("./backend/about.php", { res }, function (display) {
      backMain.html(display);
    });
  });
}
function toBackE() {
  $.get("./backend/experience.html", {}, function (res) {
    back_A.classList.remove("back_focused");
    back_E.classList.add("back_focused");
    back_S.classList.remove("back_focused");
    back_P.classList.remove("back_focused");
    back_C.classList.remove("back_focused");
    $.get("./backend/experience.php", { res }, function (display) {
      backMain.innerHTML = display;
    });
  });
}
function toBackS() {
  $.get("./backend/skills.html", {}, function (res) {
    back_A.classList.remove("back_focused");
    back_E.classList.remove("back_focused");
    back_S.classList.add("back_focused");
    back_P.classList.remove("back_focused");
    back_C.classList.remove("back_focused");
    $.get("./backend/skills.php", { res }, function (display) {
      backMain.innerHTML = display;
    });
  });
}
function toBackP() {
  $.get("./backend/portfolio.html", {}, function (res) {
    back_A.classList.remove("back_focused");
    back_E.classList.remove("back_focused");
    back_S.classList.remove("back_focused");
    back_P.classList.add("back_focused");
    back_C.classList.remove("back_focused");
    $.get("./backend/portfolio.php", { res }, function (display) {
      backMain.innerHTML = display;
    });
  });
}

function toBackC() {
  $.get("./backend/contact.html", {}, function (res) {
    back_A.classList.remove("back_focused");
    back_E.classList.remove("back_focused");
    back_S.classList.remove("back_focused");
    back_P.classList.remove("back_focused");
    back_C.classList.add("back_focused");
    $.get("./backend/contact.php", { res }, function (display) {
      backMain.innerHTML = display;
    });
  });
}
