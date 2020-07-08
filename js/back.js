var backMain = $("#backMain");
var back_A = $("#back_about");
var back_E = $("#back_experience");
var back_B = $("#back_autobio");
var back_P = $("#back_Rollection");
var back_R = $("#back_require");

function toBackA() {
  $.get("./backend/about.html", {}, function (res) {
    back_A.addClass("back_focused");
    back_E.removeClass("back_focused");
    back_B.removeClass("back_focused");
    back_P.removeClass("back_focused");
    back_R.removeClass("back_focused");
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
    back_R.removeClass("back_focused");
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
    back_R.removeClass("back_focused");
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
    back_R.removeClass("back_focused");
    $.get("./backend/collection.php", { res }, function (display) {
      backMain.html(display);
    });
  });
}

function toBackR() {
  $.get("./backend/require.html", {}, function (res) {
    back_A.removeClass("back_focused");
    back_E.removeClass("back_focused");
    back_B.removeClass("back_focused");
    back_P.removeClass("back_focused");
    back_R.addClass("back_focused");
    $.get("./backend/require.php", { res }, function (display) {
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

function uploadR() {
  let formData = new FormData();
  let title = $("#titleR").val();
  let itemR1 = $("#itemR1").val();
  let itemR2 = $("#itemR2").val();
  let itemR3 = $("#itemR3").val();
  let itemR4 = $("#itemR4").val();
  let itemR5 = $("#itemR5").val();
  formData.append("title", title);
  formData.append("itemR1", itemR1);
  formData.append("itemR2", itemR2);
  formData.append("itemR3", itemR3);
  formData.append("itemR4", itemR4);
  formData.append("itemR5", itemR5);
  $.ajax({
    url: "api/R_add.php",
    data: formData,
    type: "POST",
    contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
    processData: false, // NEEDED, DON'T OMIT THIS
    // ... Other options like success and etc
    success: function (data) {
      console.log(data);
      toBackR();
    },
    error: function (e) {
      alert("Insert Failed");
      toBackR();
    },
  });
}
function showR(id) {
  console.log(id);
  $.post("api/R_sh.php", { id }, function (res) {
    console.log(res);
    toBackR();
  });
}
function updateR(id) {
  let updateR = $(`#updateR${id}`).val();
  $.post("api/R_update.php", { id, updateR }, function (res) {
    console.log(res);
    toBackR();
  });
}
function uploadR(id) {
  let upload = $(`#uploadR${id}`).val();
  console.log(upload);
  console.log(id);
  $.post("api/R_upload.php", { id, upload }, function (res) {
    console.log(res);
    toBackR();
  })
}
function deleteR(id) {
  $.post("api/R_del.php", { id }, function (res) {
    console.log(res);
    toBackR();
  });
}
function showR(id) {
  $.post("api/R_sh.php", { id }, function (res) {
    toBackR();
  });
}