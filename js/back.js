var backMain = $("#backMain");
var back_A = $("#back_about");
var back_E = $("#back_experience");
var back_B = $("#back_autobio");
var back_P = $("#back_collection");
var back_C = $("#back_contact");

function toBackA() {
  $.get("./backend/about.html", {}, function (res) {
    back_A.addClass("back_focused");
    back_E.removeClass("back_focused");
    back_B.removeClass("back_focused");
    back_P.removeClass("back_focused");
    back_C.removeClass("back_focused");
    $.get("./backend/about.php", { res }, function (display) {
      backMain.html(display);
    });
  });
}
function toBackE() {
  $.get("./backend/experience.html", {}, function (res) {
    back_A.removeClass("back_focused");
    back_E.addClass("back_focused");
    back_B.removeClass("back_focused");
    back_P.removeClass("back_focused");
    back_C.removeClass("back_focused");
    $.get("./backend/experience.php", { res }, function (display) {
      backMain.html(display);
    });
  });
}
function toBackB() {
  $.get("./backend/autobio.html", {}, function (res) {
    back_A.removeClass("back_focused");
    back_E.removeClass("back_focused");
    back_B.addClass("back_focused");
    back_P.removeClass("back_focused");
    back_C.removeClass("back_focused");
    $.get("./backend/autobio.php", { res }, function (display) {
      backMain.html(display);
    });
  });
}
function toBackP() {
  $.get("./backend/collection.html", {}, function (res) {
    back_A.removeClass("back_focused");
    back_E.removeClass("back_focused");
    back_B.removeClass("back_focused");
    back_P.addClass("back_focused");
    back_C.removeClass("back_focused");
    $.get("./backend/collection.php", { res }, function (display) {
      backMain.html(display);
    });
  });
}

function toBackC() {
  $.get("./backend/contact.html", {}, function (res) {
    back_A.removeClass("back_focused");
    back_E.removeClass("back_focused");
    back_B.removeClass("back_focused");
    back_P.removeClass("back_focused");
    back_C.addClass("back_focused");
    $.get("./backend/contact.php", { res }, function (display) {
      backMain.html(display);
    });
  });
}

// 作品集 新增
$("#addPSwitch").click(function () {
  $("#addC").slideToggle();
});
$(document).ready(function (e) {
  $("#uploadForm").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      url: "api/C_add.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function (data) {
        console.log(data);
        toBackP();
      },
      error: function (e) {
        alert("Insert Failed");
        toBackP();
      },
    });
  });
});

function cSwitch() {
  $("#editP").toggleClass("editP_Open");
  $("#addP").toggleClass("addP_Open");
}

function deleteC(id) {
  let check = confirm("是否確定刪除此筆作品？");
  if (check) {
    $.post("api/C_del.php", { id }, function (res) {
      toBackP();
    });
  } else {
    toBackP();
  }
}

function showC(id) {
  $.post("api/C_sh.php", { id }, function (res) {
    toBackP();
  });
}

function updateC(id) {
  let formData = new FormData();
  let titleP = $(`#titleP${id}`).val();
  let urlP = $(`#urlP${id}`).val();
  let noteP1 = $(`#noteP1${id}`).val();
  let noteP2 = $(`#noteP2${id}`).val();
  let noteP3 = $(`#noteP3${id}`).val();
  let file = $(`#fileP${id}`)[0].files[0];
  formData.append("id", id);
  formData.append("url", urlP);
  formData.append("title", titleP);
  formData.append("note1", noteP1);
  formData.append("note2", noteP2);
  formData.append("note3", noteP3);
  formData.append("image", file);
  $.ajax({
    url: "api/C_update.php",
    data: formData,
    type: "POST",
    contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
    processData: false, // NEEDED, DON'T OMIT THIS
    // ... Other options like success and etc
    success: function (data) {
      console.log(data);
      toBackP();
    },
    error: function (e) {
      alert("Insert Failed");
      toBackP();
    },
  });
}
function shCheck(id) {
  $(`#shCheck${id}`).click();
}

// Autobio自傳
// $(document).ready(function (e) {
//   $("#uploadFormBio").on("submit", function (e) {
//     e.preventDefault();
//     $.ajax({
//       url: "api/B_add.php",
//       type: "POST",
//       data: new FormData(this),
//       contentType: false,
//       cache: false,
//       processData: false,
//       success: function (data) {
//         console.log(data);
//         toBackB();
//       },
//       error: function (e) {
//         alert("Insert Failed");
//         toBackB();
//       },
//     });
//   });
// });
function uploadBio() {
  let formData = new FormData();
  let title = $("#titleBio").val();
  let text = $("#textBio").val();
  formData.append("title", title);
  formData.append("text", text);
  $.ajax({
    url: "api/B_add.php",
    data: formData,
    type: "POST",
    contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
    processData: false, // NEEDED, DON'T OMIT THIS
    // ... Other options like success and etc
    success: function (data) {
      console.log(data);
      toBackB();
    },
    error: function (e) {
      alert("Insert Failed");
      toBackB();
    },
  });
}
function showBio(id) {
  $.post("api/B_sh.php", { id }, function (res) {
    console.log(res);
    toBackB();
  });
}
function deleteBio(id) {
  $.post("api/B_del.php", { id }, function (res) {
    console.log(res);
    toBackB();
  });
}
function showBioText(id) {
  let bioText = $(`#showBioText${id}`);
  // console.log(bioText);
  bioText.toggle();
}
