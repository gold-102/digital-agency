//show/hide nav bar

document.querySelector('.nav-btn').addEventListener("click", function() {
    //document.querySelector('#menus').style.display = "block";
    $('#menus').toggle();
    event.preventDefault();
     
     
 });













function formSubmit(){
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var msg = document.getElementById("msg").value;
    var error = document.getElementById("error");
    
    //name validation
    if(name == ""){
        error.innerHTML = "**please enter name**";
        return false;
    }
    if(!isNaN(name)) {
        error.innerHTML ="**characters are allowed**";
        return false;
    }



    //email validation
    var regx = /^([a-z0-9\.-]+)@([a-z0-9-]+).([a-z]{2,3})(.[a-z]{2,3})$/;
    if(email == "") {
        error.innerHTML = "**please enter email** ";
        return false;
    }
    if(!regx.test(email))
    {
        error.innerHTML ="**Invalid Email**";
        return false;
    }


    //message box 
    if(msg == ""){
        error.innerHTML = "**please drop your message**";
        return false;
    }
}
/* end of contact form*/