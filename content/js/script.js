var submitBtn = document.getElementById('submit');
submitBtn.addEventListener("click", validateForm);

function validateForm() {
  var username = document.userlgn.username.value;
  var password = document.userlgn.password.value;

  if ((username.trim() == "")) {
    window.alert("Du måste skriva in din email");
  }
  else if ((username.trim() == "") || (username.includes("@") != true) || (username.includes(".") != true)) {
    window.alert("Du måste skriva in en korrekt mailadress");
  }
  else if ((password.trim() == "")) {
    window.alert("Du fyllde inte i ett lösenord");
  }
}

submitBtn.addEventListener("click", validateReg);
function validateReg() {
  var access1 = document.userlvl.access1.checked;
  var access2 = document.userlvl.access2.checked;
  var access3 = document.userlvl.access3.checked;

  if ((((access1) == false)) && ((access2) == false) && ((access3) == false)) {
    window.alert("Du måste ange medlemsnivå");
  }
  else {
    window.location.replace("register-successful.html");
  }
}
