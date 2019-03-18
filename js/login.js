// my validate function
function validateForm(){
    console.log('running');
    user_id = document.getElementById("user_id").value;
    password = document.getElementById("password").value;
    submit_btn = document.getElementById('submit');
    if(user_id == '' && password == ''){
        document.getElementById('user_id_error').innerHTML ="Please enter your user ID";
        document.getElementById('pw_id_error').innerHTML ="Please enter your password";
    }    
    else if(user_id == '' && password != ''){
        document.getElementById('user_id_error').innerHTML ="Please enter your user ID";
    }
    else if(user_id != '' && password == ''){
        document.getElementById('pw_id_error').innerHTML ="Please enter your password";
    }
    else{
        document.getElementById('user_id_error').innerHTML ="";
        document.getElementById('pw_id_error').innerHTML ="";
        window.location.href="createEvent.html";
    }
}
