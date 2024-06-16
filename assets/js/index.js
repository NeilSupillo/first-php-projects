document.addEventListener("DOMContentLoaded", (event) => {
  setTimeout(function () {
    var successMessage = document.getElementById("signup-success");
    if (successMessage) {
      successMessage.style.display = "none";
    }
  }, 2000);
});
