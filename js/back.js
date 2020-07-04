function editOff() {
  $("#pageFront").toggleClass("pageFrontToggle");
  $("#pageBack").toggleClass("pageBackToggle");
  toPageBack();
  openLogin();
}