function checkPassWord(){

  var password = document.getElementById('p1').value;
  var confirm = document.getElementById('p2').value;

  if(p1 != p2 || p2 == ""){
    alert("Passwords Don't Match.");
    event.preventDefault();
  }
  return true;

}
