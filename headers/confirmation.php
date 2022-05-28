<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
       
        .container {
          display: flex;
          justify-content: center;
        }
        .heading {
          text-align: center;
        }
        #page-title {
          text-align: center;
        }
        #ticket {
          width: 700px;
          height: 240px;
          overflow: hidden;
        }
        #cancel-terms {
          border-width: 2px;
          border-style: solid;
          border-radius: 5%;
        }
        #cancel-form{
            padding: 1em;
        }
      </style>
</head>
<body>
    <br><br>
    <h1 id="page-title" class="heading display-4">Ticket has been cancelled :(</h1><br>
    <div class="ticket-card-container">
        <div class="ticket card text-center">
          <div class="card-header">
            Info of Cancellation
          </div>
          <div class="card-body">
            <h5 class="card-title">Mr. Johnny Depp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mr. Victor Samuel</h5>
            <b><p class="card-text">Rise of the Horizon</p></b>
            <br>
            <p class="card-text">Date: 19/06/2021</p>
            <p class="card-text">Time: 08:00</p>
            <p class="card-text">Seats: <b>A4 B4</b></p>
            <p class="card-text">Phone: +17273081393</p>
  
            
            <a href="#" class="btn btn-primary">Mail the info</a>
          </div>
</body>
</html>