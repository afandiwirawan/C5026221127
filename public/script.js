function formValidation() {
  let name = document.getElementById("name");

  if (!name.value.match(letters)) {
    name.value = "";
    let alert = document.getElementById("name-character-alert");
    alert.style.display = "block";
    name.focus();
    return false;
  }

  if (name.value.length < 3) {
    let alert = document.getElementById("name-length-alert");
    alert.style.display = "block";
    name.focus();
    return false;
  }
}