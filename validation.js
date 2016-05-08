function checkPassWord(){

  var password = document.getElementById('p1').value;
  var confirm = document.getElementById('p2').value;

  if(password != confirm || confirm == ""){
    alert("Please match your password with your password reentry.");
    return false;
  }
  return true;

}
