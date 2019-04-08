// my validate function
function validateForm(){
    console.log('running');
    user_id = document.getElementById("user_id").value;
    password = document.getElementById("password").value;
    name = document.getElementById("name").value;
    email = document.getElementById("email").value;
    submit_btn = document.getElementById('submit');
    if(user_id == '' && password == ''){
        document.getElementById('user_id_error').innerHTML ="Please enter your user ID";
        document.getElementById('pw_id_error').innerHTML ="Please enter your password";
        document.getElementById('name_error').innerHTML ="Please enter your name";
        document.getElementById('email_error').innerHTML ="Please enter your email";
    }    
    else if(user_id == '' && password != ''){
        document.getElementById('user_id_error').innerHTML ="Please enter your user ID";
    }
    else if(user_id != '' && password == ''){
        document.getElementById('pw_id_error').innerHTML ="Please enter your password";
    }
    else if(user_id != '' && password != '' && name == ''){
        document.getElementById('name_error').innerHTML = "Please enter your name"; 
    }
    else if(user_id != '' && password != '' && name != '' && email == ''){
        document.getElementById('email_error').innerHTML = "Please enter your email"; 
    }
}
