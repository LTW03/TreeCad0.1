function validate_login(){
    var Login_useremail = document.getElementById('login_user_email').value;
    var Login_password = document.getElementById('login_pass').value;

    const isvalid_email = Login_email => {
        const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;// last part is for top-level domain(.com, .net)
        //email addres before the @ allow any combination except for some certain characters
        return re.test(String(Login_email).toLowerCase())
    }

    if(Login_useremail === ""|| Login_password === ""){
        alert("Please Fill in all fields for login.");
        return false;
    }
    if(!isvalid_email(Login_useremail)){
        alert('Invalid Email');
        return false;
    }
    return true;
}


function validate_register(){
    var username = document.getElementById('reg_name').value;
    var email =document.getElementById('reg_email').value;
    var password = document.getElementById('regpass').value;
    var repeat_password = document.getElementById('reg_Rp_pass').value;

    // check the correct layout of email 
    // exp; *******@*****.***
    const isvalid_email = Register_email => {
        const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;// last part is for top-level domain(.com, .net)
        //email addres before the @ allow any combination except for some certain characters
        return re.test(String(Register_email).toLowerCase())

    }
    if (username === ""|| email === ""|| password === ""|| repeat_password === ""){
        alert("Please fill in all fields for registration.");
        return false;
    }
    if(!isvalid_email(email)){
        alert('Invalid Email');
        return false;
    }
    if (password !== repeat_password){
        alert("Repeat password and password does not match");
        return false;
    }
    if ((password).length < 8 ){
        alert('Password must be at least 8 charactes long');
        return false;
    }
        // AJAX request to PHP for registration
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText === "success") {
                alert("Registration successful");
                window.location.href = "Login_page.php"; // Redirect to login page
            } else {
                alert("Email or User Name have been used by someone");
            }
        }
    };
    xhttp.open("POST", "Registration.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("fullname=" + username + "&email=" + email + "&password=" + password + "&submit=submit");
    return false; // Prevent form submission
}



