<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="secscs.css">
</head>
<body>
    <div class="container">
        <form class="form" id="login" action="seatui.html" method="POST">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" id="ee" name="username" pattern="[A-Za-z0-9]+" autofocus placeholder="Username" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" id="pp" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autofocus placeholder="Password" required>
                <div class="form__input-error-message"></div>
            </div>
            <a href="seatui.html"><button class="form__button" type="submit">Continue</button></a>
            <br>
<button type="button" id="gss" class="login-with-google-btn" >
    Sign in with Google
  </button>
  
  
  
            <p class="form__text">
                <a href="#" class="form__link">Forgot your password?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="./" id="linkCreateAccount">New User? Create an account</a>
            </p>
        </form>
        <form class="form form--hidden" id="createAccount">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" id="em" autofocus placeholder="Email Address">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" id="pass" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" id="pn" autofocus placeholder="Phone number">
                <div class="form__input-error-message"></div>
            </div>
           <a href="seatui.html"><button class="form__button" type="submit">Continue</button></a> 
            <p class="form__text">
                <a class="form__link" href="./" id="linkLogin">Existing User? Log in</a>
            </p>
           
            
            
        </form>
    </div>

    
    
    
    
    <script>
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
    });

    document.querySelector("#linkLogin").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.remove("form--hidden");
        createAccountForm.classList.add("form--hidden");
    });

    


        setFormMessage(loginForm, "error", "Invalid Email/Username and password combination");
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
});
    </script>
</body>
