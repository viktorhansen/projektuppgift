var submitBtn = document.getElementById('submitBtn');
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
