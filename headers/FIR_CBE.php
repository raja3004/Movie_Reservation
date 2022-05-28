<!doctype html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>FIR -CBE</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="modals.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="headers.css" rel="stylesheet">
    <link href="footers.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
    <link href="headers.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        
        input[type=search] {
            width: 140px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 15px;
            background-color: white;
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding: 10px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
        }
        /* When the input field gets focus, change its width to 100% */
        
        input[type=search]:focus {
            width: 100%;
        }
        
        .center {
            margin: auto;
            width: 60%;
            border: 3px solid #73AD21;
            padding: 10px;
        }
        
        .button {
            border: none;
            color: white;
            padding: 6px 24px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 4%;
        }
        
        .button3 {
            border: none;
            color: white;
            padding: 6px 24px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 4%;
            background-color: white;
            color: black;
            border: 1px solid lightsteelblue;
        }
        
        .button1 {
            background-color: white;
            color: black;
            border: 2px solid lightsteelblue;
        }
        
        .button1:hover {
            background-color: #4CAF50;
            color: white;
        }
        
        .button2 {
            background-color: white;
            color: black;
            border: 2px solid lightsteelblue;
        }
        
        .button2:hover {
            background-color: red;
            color: white;
        }
        
        .datepicker {
            font-size: 0.875em;
        }
        /* solution 2: the original datepicker use 20px so replace with the following:*/
        
        .datepicker td,
        .datepicker th {
            width: 1.5em;
            height: 1.5em;
        }
        
        .checked {
            color: orange;
        }
        /*time new button*/
        /* From uiverse.io by @alexroumi */
        
        .nbutton {
            padding: 15px 25px;
            border: unset;
            border-radius: 15px;
            color: #212121;
            z-index: 1;
            background: #e8e8e8;
            position: relative;
            font-weight: 1000;
            font-size: 17px;
            -webkit-box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
            box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
            transition: all 250ms;
            overflow: hidden;
            height: 60px;
        }
        
        .nbutton::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 80px;
            width: 0;
            border-radius: 15px;
            background-color: red;
            z-index: -1;
            -webkit-box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
            box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
            transition: all 250ms
        }
        
        .nbutton:hover {
            color: #e8e8e8;
        }
        
        .nbutton:hover::before {
            width: 100%;
        }
        
        .mbutton {
            padding: 15px 25px;
            border: unset;
            border-radius: 15px;
            color: #212121;
            z-index: 1;
            background: #e8e8e8;
            position: relative;
            font-weight: 1000;
            font-size: 17px;
            -webkit-box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
            box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
            transition: all 250ms;
            overflow: hidden;
        }
        
        .mbutton::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 0;
            border-radius: 15px;
            background-color: green;
            z-index: -1;
            -webkit-box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
            box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
            transition: all 250ms
        }
        
        .mbutton:hover {
            color: #e8e8e8;
        }
        
        .mbutton:hover::before {
            width: 100%;
        }
        
        /* Navbar search from here */
        
        .form {
            --input-text-color: #fff;
            --input-bg-color: #212549;
            --focus-input-bg-color: transparent;
            --text-color: #949faa;
            color: white;
            --active-color: #1b9bee;
            --width-of-input: 200px;
            --inline-padding-of-input: 1.2em;
            --gap: 0.9rem;
        }
        
        .form {
            font-size: 0.9rem;
            display: flex;
            gap: 0.5rem;
            align-items: center;
            padding: 0.8em;
            padding-inline: var(--inline-padding-of-input);
            width: var(--width-of-input);
            position: relative;
            isolation: isolate;
        }
        
        .fancy-bg {
            position: absolute;
            width: 100%;
            inset: 0;
            background: var(--input-bg-color);
            border-radius: 30px;
            height: 100%;
            z-index: -1;
            pointer-events: none;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        }
        
        .search,
        .close-btn {
            position: absolute;
        }
        
        .search {
            fill: var(--text-color);
            left: var(--inline-padding-of-input);
            width: 17px;
        }
        
        .close-btn {
            right: var(--inline-padding-of-input);
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            padding: 0.1em;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: var(--active-color);
            opacity: 0;
            visibility: hidden;
        }
        
        .input {
            color: var(--input-text-color);
            width: 100%;
            margin-inline: min(2em, calc(var(--inline-padding-of-input) + var(--gap)));
            background: transparent;
            border: none;
        }
        
        .input:focus {
            outline: none;
        }
        
        .input::placeholder {
            color: var(--text-color)
        }
        
        .input:focus~.fancy-bg {
            border: 1px solid var(--active-color);
            background: var(--focus-input-bg-color);
        }
        
        .input:focus~.search {
            fill: var(--active-color);
        }
        
        .input:valid~.close-btn {
            opacity: 1;
            visibility: visible;
        }

        
        .nbutton {
            padding: 15px 25px;
            border: unset;
            border-radius: 15px;
            color: #212121;
            z-index: 1;
            background: #e8e8e8;
            position: relative;
            font-weight: 1000;
            font-size: 17px;
            -webkit-box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
            box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
            transition: all 250ms;
            overflow: hidden;
            height: 60px;
        }
        
        .nbutton::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 80px;
            width: 0;
            border-radius: 15px;
            background-color: red;
            z-index: -1;
            -webkit-box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
            box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
            transition: all 250ms
        }
        
        .nbutton:hover {
            color: #e8e8e8;
        }
        
        .nbutton:hover::before {
            width: 100%;
        }
        
        .mbutton {
            padding: 15px 25px;
            border: unset;
            border-radius: 15px;
            color: #212121;
            z-index: 1;
            background: #e8e8e8;
            position: relative;
            font-weight: 1000;
            font-size: 17px;
            -webkit-box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
            box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
            transition: all 250ms;
            overflow: hidden;
        }
        
        .mbutton::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 0;
            border-radius: 15px;
            background-color: green;
            z-index: -1;
            -webkit-box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
            box-shadow: 4px 8px 19px -3px rgba(0, 0, 0, 0.27);
            transition: all 250ms
        }
        
        .mbutton:hover {
            color: #e8e8e8;
        }
        
        .mbutton:hover::before {
            width: 100%;
        }
    </style>


    <!-- Custom styles for this template -->

</head>
<script>
    $(".button button1 button2").mouseout(function() {
        $(this).css("background-color", "pink");
    });
</script>

<body>

    <svg src="cityicon.jpeg" style="display: none;">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <title>Bootstrap</title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>
  <symbol id="home" viewBox="0 0 16 16">
    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
  </symbol>
  <symbol id="speedometer2" viewBox="0 0 16 16">
    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
  </symbol>
  <symbol id="table" viewBox="0 0 16 16">
    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
  </symbol>
  <symbol id="people-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
  </symbol>
  <symbol id="grid" viewBox="0 0 16 16">
    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
  </symbol>
</svg>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <title>Bootstrap</title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>

  <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>

  <symbol id="check2" viewBox="0 0 16 16">
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>

  <symbol id="check2-circle" viewBox="0 0 16 16">
    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
  </symbol>

  <symbol id="bookmark-star" viewBox="0 0 16 16">
    <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z"/>
    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
  </symbol>

  <symbol id="grid-fill" viewBox="0 0 16 16">
    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
  </symbol>

  <symbol id="stars" viewBox="0 0 16 16">
    <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
  </symbol>

  <symbol id="film" viewBox="0 0 16 16">
    <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
  </symbol>

  <symbol id="github" viewBox="0 0 16 16">
    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
  </symbol>

  <symbol id="twitter" viewBox="0 0 16 16">
    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
  </symbol>

  <symbol id="facebook" viewBox="0 0 16 16">
    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
  </symbol>
</svg>

    <main>

  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <h2>PopCornTimes - FIR</h2>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
         
        </ul>
        <div class="form">
                        <input placeholder="Search..." required="" type="text" class="input">
                        <div class="fancy-bg"></div>
                        <div class="search">
                            <svg class="r-14j79pv r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-4wgw6l r-f727ji r-bnwqim r-1plcrui r-lrvibr" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                        </div>
                        <div class="close-btn">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" fill-rule="evenodd"></path>
              </svg>
                        </div>
                    </div> &nbsp;&nbsp;&nbsp;

        <div class="text-end" >
        <?php if( isset($_SESSION['user_name']) && !empty($_SESSION['user_name']) )
{
?>
<div class="dropdown">
<a href="#" class="btn btn-secondary dropdown-toggle"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none;background-color:rgba(var(--bs-dark-rgb),var(--bs-bg-opacity))!important;border-color:rgba(var(--bs-dark-rgb),var(--bs-bg-opacity))!important;" ><img style= "border-radius:20px;width:48px" src="https://www.tutorialrepublic.com/examples/images/avatar/3.jpg" class="avatar" alt="Avatar"><span> Welcome <?php echo $_SESSION['user_name'] ?> </span><b class="caret"></b></a>
  
  <ul class="dropdown-menu" styl="width:100%" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
    <li><a class="dropdown-item" href="cancel.php">Cancellation</a></li>

  </ul>
</div>
 
<?php }else{ ?>

 
         
  <a class="" href="user_access.php?navigate=login" target="_blank" style="  text-decoration: none;"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
          <a class="" href="user_access.php?navigate=signup" target="_blank" style="  text-decoration: none;"><button type="button" class="btn btn-warning">Sign-up</button></a>
          
          <?php } ?> 
        </div>
      </div>
    </div>
  </header>

  <div style="background: linear-gradient(rgba(0, 18, 50, 0.84), rgba(0, 0, 0, 0.95)),
  url('./lloyd-dirks-4SLz_RCk6kQ-unsplash.jpg') bottom; height: 1830px; width: 1519px;">
 <br>

    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="align-content: center;">
        <div class="col" style="padding-left: 5px;">
          <div class="card shadow-sm" style="width: 1300px;height: 1790px;">
            <iframe height="600px" src="https://www.youtube.com/embed/eVKIjoK7FnM" title="YouTube video player" frameborder="2" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius: 2%;"></iframe>
<!-- Casting -->  
<div class="container" align="right"><br>
 <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
</div>
<br><div class="row">
  <div class="col-lg-4" >
    <div align="left">
      <h5 style="font-family:Verdana, Geneva, Tahoma, sans-serif;text-align: left;font-size:25px;color:teal;">&nbsp;Cast
        </h5>
      <img src="rw.jpg" height="100px" width="100px" style="border-radius: 60%;border-style:inherit;border-color: red;" align="right">
      <img src="vv.jpg" height="100px" width="100px" style="border-radius: 60%;border-style:inherit;border-color: red;" >
      <img src="gvm.jpeg" height="100px" width="100px" style="border-radius: 60%;border-style:inherit;border-color: red;">
      <img src="mm.webp" height="100px" width="100px" style="border-radius: 60%;border-style:inherit;border-color: red;"  >
    </div>
  </div>
</div><br>
<h5 style="font-family:Verdana, Geneva, Tahoma, sans-serif;text-align: left;font-size:25px;color:teal;">&nbsp;Screening At </h5><h5 style="font-family:Verdana, Geneva, Tahoma, sans-serif;text-align:center;font-size:15px;color:black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
  <circle cx="6" cy="6" r="6" fill="green"/>
</svg>&nbsp;&nbsp;Available &nbsp;&nbsp;&nbsp;&nbsp;
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
  <circle cx="6" cy="6" r="6" fill="red"/>
</svg>&nbsp;&nbsp;Fast Filling &nbsp;&nbsp;&nbsp;&nbsp;
</h5>
<div class="container">
  <main class="container">
    <div class="row" style="padding-top: 10px; border-radius: 6%;">
        <div class="col">
            <h6 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color: black;font-weight: lighter;">Your booking on - &nbsp;<input data-date-format="dd/mm/yyyy" id="datepicker"></h6>
        </div>
    </div>
</main>
  <div style="padding-left: 5px;padding-top: 10px;">
    <div class="button-effect">
  <h6 style="font-family:sans-serif;font-weight: bold;color: black;font-size: 20px;">K G Cinemas <svg xmlns="http://www.w3.org/2000/svg" tooltip="KG CIN" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </svg>

  </div></h6>
 <br>&nbsp;&nbsp;&nbsp;&nbsp;
 <a class="" href="allow_booking.php" target="_blank" style="  text-decoration: none;"><button class="mbutton">11:25 AM</button>&nbsp;&nbsp;&nbsp;&nbsp;
<a class="" href="allow_booking.php" target="_blank" style="  text-decoration: none;"><button class="nbutton">03:10 PM</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a class="" href="allow_booking.php" target="_blank" style="  text-decoration: none;"> <button class="mbutton">05:50 PM</button></a>
  
  </div><br>

  <div style="padding-left: 5px;padding-top: 10px;">
    <div class="button-effect">
  <h6 style="font-family:sans-serif;font-weight: bold;color: black;font-size: 20px;">INOX Cinemas <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </svg>

  </div></h6>
 <br>&nbsp;&nbsp;&nbsp;&nbsp;
 <a class="" href="allow_booking.php" target="_blank" style="  text-decoration: none;"><button class="mbutton">02:00 PM</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
 <a class="" href="allow_booking.php" target="_blank" style="  text-decoration: none;"> <button class="nbutton">06:00 PM</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
 <a class="" href="allow_booking.php" target="_blank" style="  text-decoration: none;"><button class="nbutton">10:10 PM</button></a>
  
  </div><br>
  
  <div style="padding-left: 5px;padding-top: 10px;">
    <div class="button-effect">
  <h6 style="font-family:sans-serif;font-weight: bold;color: black;font-size: 20px;">The Cinemas <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </svg>

  </div></h6>
 <br>&nbsp;&nbsp;&nbsp;&nbsp;
 <a class="" href="allow_booking.php" target="_blank" style="  text-decoration: none;"><button class="mbutton">02:50 PM</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
 <a class="" href="allow_booking.php" target="_blank" style="  text-decoration: none;"><button class="mbutton">06:45 PM</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
 <a class="" href="allow_booking.php" target="_blank" style="  text-decoration: none;"><button class="nbutton">10:15 PM</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
 <a class="" href="allow_booking.php" target="_blank" style="  text-decoration: none;"><button class="mbutton">10:40 PM</button>
  
</div><br>

<div style="padding-left: 5px;padding-top: 10px;">
  <div class="button-effect">
<h6 style="font-family:sans-serif;font-weight: bold;color: black;font-size: 20px;">Karpagam Theatre <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
</svg>

</div></h6>
<br>&nbsp;&nbsp;&nbsp;&nbsp;
<a class="" href="allow_booking.php" target="_blank" style="  text-decoration: none;"><button class="mbutton">10:05 AM</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a class="" href="allow_booking.php" target="_blank" style="  text-decoration: none;"><button class="mbutton">12:55 PM</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a class="" href="allow_booking.php" target="_blank" style="  text-decoration: none;"><button class="nbutton">04:20 PM</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a class="" href="allow_booking.php" target="_blank" style="  text-decoration: none;"><button class="mbutton">10:10 PM</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a class="" href="allow_booking.php" target="_blank" style="  text-decoration: none;"><button class="nbutton">11:10 PM</button>
</div><br>
<div style="padding-left: 5px;padding-top: 10px;">
  <div class="button-effect">
<h6 style="font-family:sans-serif;font-weight: bold;color: black;font-size: 20px;">Fun Cinema Hall <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
</svg>

</div></h6>
<br>&nbsp;&nbsp;&nbsp;&nbsp;

<a class="" href="allow_booking.php" target="_blank" style="  text-decoration: none;"><button class="mbutton">03:25 PM</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a class="" href="allow_booking.php" target="_blank" style="  text-decoration: none;"><button class="mbutton">06:40 PM</button></a>&nbsp;&nbsp;&nbsp;&nbsp;


</div>
</div>  
</div>
</div>
</div><br>
        <div class="container">
          <footer><br><br><br>
            <div class="container">
              <footer class="py-5">
                <div class="row">
                  <div class="col-2">
                    <h5>Hey, Attention Please!</h5>
                    <ul class="nav flex-column">
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fas fa-file-powerpoint ">  &nbsp;</i>Policy</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fas fa-rupee-sign">&nbsp;</i>Pricing</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="fas fa-file-alt ">&nbsp;</i>FAQs</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="far fa-address-book ">  &nbsp;</i>About US</a></li>
                    </ul>
                  </div>
            
                  <div class="col-2">
                    <h5></h5>
                    <ul class="nav flex-column">
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                    </ul>
                  </div>
            
                  <div class="col-2">
                    <h5></h5>
                    <ul class="nav flex-column">
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
                    </ul>
                  </div>
            
                  <div class="col-4 offset-1">
                    <form>
                      <h5>Subscribe to get an exclusive update on new releases</h5>
                      
                      <div class="d-flex w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                      </div>
                    </form>
                  </div>
                </div>
            <br><br><br>
                <div class="d-flex justify-content-between py-4 my-4 border-top">
                  <p>&copy; 2022 - 2023<br> PopCornTimes Inc.<br> All rights reserved.</p>
                  <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#"><img src="twit.png" height="35px" width="40px"></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><img src="ins.png" height="35px" width="40px"></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><img src="face.png" height="35px" width="40px"></a></li>
                  </ul>
                </div>
          </footer>
        </div>            

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript">
      function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
$('#datepicker').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
    });
    $('#datepicker').datepicker("setDate", new Date());
  </script>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
