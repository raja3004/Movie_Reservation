<!DOCTYPE html>

<style>
.form__inputs {
    display: block;
    width: 100%;
    padding: 0.75rem;
    box-sizing: border-box;
    border-radius: var(--border-radius);
    border: 1px solid #dddddd;
    outline: none;
    background: #eeeeee;
    transition: background 0.2s, border-color 0.2s;
}

.form__inputs:focus {
    border-color: var(--color-primary);
    background: #ffffff;
}

.form__inputs--error {
    color: #cc3333;
    border-color: #cc3333;
}

.form__inputs-error-message {
    margin-top: 0.5rem;
    font-size: 0.85rem;
    color: #cc3333;
}
    </style>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="secscssp.css">
</head>
<body>

    <div class="container">
        <form class="form form--hidden" id="login"  action="login_user.php" method="post" onclick="return validateForm();">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__inputs" id="loginEmail" name="email" autofocus placeholder="Email" required>
                <div class="form__inputs-error-message" id="loginEmailError"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__inputs" id="loginPassword" name="password" pattern="[A-Za-z0-9]+" autofocus placeholder="Password" required>
                <div class="form__inputs-error-message" id="loginPasswordError"></div>
            </div>
            <button class="form__button" type="submit">Continue</button>
            <br><br>
<button type="button" id="gss" class="login-with-google-btn" >
    Sign in with Google
  </button>
  
  
  
            <p class="form__text">
                <a href="#" class="form__link">Forgot your password?</a>
            </p>
            <p class="form__text">
                <a class="form__link"  id="linkCreateAccount">New User? Create an account</a>
            </p>
        </form>
        <form class="form form--hidden" id="createAccount" action="signup.php" method="post">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" autofocus name="username" placeholder="Username" pattern="[A-Za-z0-9]+" required> 
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="email" class="form__input" id="em" autofocus name="email" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$"  required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" id="pass" name="password"  autofocus placeholder="Password" pattern="[A-Za-z0-9]+"  required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" id="pn" name="phone" autofocus placeholder="Phone number" pattern="[0-9]+"required>
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">Continue</button>
            <p class="form__text">
                <a class="form__link" id="linkLogin">Existing User? Log in</a>
            </p>
           
            
            
        </form>
    </div>

    
    
    
    
    <script>
        window.onload=function(){
            
            const loginForm = document.querySelector("#login");
    const createAccountForm = document.querySelector("#createAccount");
            const urlParams = new URLSearchParams(window.location.search);
const myParam = urlParams.get('navigate');

            if(myParam=='login'){
                loginForm.classList.remove("form--hidden");
        createAccountForm.classList.add("form--hidden");  
            }
            else{
                loginForm.classList.add("form--hidden");
        createAccountForm.classList.remove("form--hidden");
            }
        }
        function setFormMessage(formElement, type, message) {
    const messageElement = formElement.querySelector(".form__message");

    messageElement.textContent = message;
    messageElement.classList.remove("form__message--success", "form__message--error");
    messageElement.classList.add(`form__message--${type}`);
}

function setInputError(inputElement, message) {
    inputElement.classList.add("form__input--error");
    inputElement.parentElement.querySelector(".form__input-error-message").textContent = message;
}

function clearInputError(inputElement) {
    inputElement.classList.remove("form__input--error");
    inputElement.parentElement.querySelector(".form__input-error-message").textContent = "";
}

document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector("#login");
    const createAccountForm = document.querySelector("#createAccount");

    document.querySelector("#linkCreateAccount").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.add("form--hidden");
        createAccountForm.classList.remove("form--hidden");
        window.location.href ='./user_access.php?navigate=signup';
    });

    document.querySelector("#linkLogin").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.remove("form--hidden");
        createAccountForm.classList.add("form--hidden");
        window.location.href ='./user_access.php?navigate=login';
    });

  


        //setFormMessage(loginForm, "error", "Invalid Email/Username and password combination");
    });

    document.querySelectorAll(".form__input").forEach(inputElement => {
        
        inputElement.addEventListener("blur", e => {
            var ma = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var a1=/[a-z]/;
            var a2=/[A-Z]/;
           var a3= /[0-9]/;
           var a4=/[^a-zA-Z\d]/;
            if (e.target.id === "signupUsername"  && e.target.value.length<5 ) {
                setInputError(inputElement, "Username must contain at least 5 characters");
            }
            if(e.target.id==="em" && !e.target.value.match(ma))
            {
                setInputError(inputElement, "Please enter a valid Email ID");
            }
            if(e.target.id=="pass"  && e.target.value.length<8)
            {
                setInputError(inputElement, "Password must contain at least 8 characters");
            }
            if(e.target.id=="pn"  && !e.target.value.match(a3))
            {
                setInputError(inputElement, "Phone number must contain only numerical values");
            }
        });

        inputElement.addEventListener("input", e => {
            clearInputError(inputElement);
        });
    });


    function  validateForm(){
        var y   = document.getElementById('loginEmail');
        var z= document.getElementById('loginPassword');
        var emailError=false;
        var passwordError=false;
        
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if( !(y.value.match(mailformat)) ){
            emailError=true;
            document.querySelector("#loginEmailError").textContent = 'Please enter a valid Email ID';
            
        }
        else{
            
            document.querySelector("#loginPasswordError").textContent = "";
        }
        console.log(z.value.length<=8);
        if(!(z.value.length<=8)){
            passwordError=true;
            document.querySelector("#loginPasswordError").textContent = 'Password must contain at least 8 characters';
            
        }
        else{
           
            document.querySelector("#loginPasswordError").textContent = "";
        }
        if((passwordError==true && emailError==true) || (passwordError==false && emailError==true) || (passwordError==true && emailError==false)){
            return false;
        }
        else{
            return true;
        }
   
    }
    </script>
</body>
