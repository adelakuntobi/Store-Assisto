var input = document.getElementById("emailField");
input.addEventListener("click",function(){
  document.getElementById("provide").style.display = "none";
})
function myFunction() {
  if (input.value === "") {
    document.getElementById("provide").style.display = "block";
  }
  else if (!input.checkValidity()) {
      document.getElementById("provide").style.display = "block";
    }
    else{
      document.getElementById("provide").style.display = "none";
    }
  }
