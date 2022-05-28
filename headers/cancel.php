<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Cancel Ticket</title>
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
    <h1 id="page-title" class="heading display-3">Ticket Cancellation</h1><br>
    <h2 class="heading display-5">Your Ticket</h2>
    <div class="ticket-card-container">
      <div class="ticket card text-center">
        <div class="card-header">
          Corge Event Speciale
        </div>
        <div class="card-body">
   
          <b><p class="card-text">FIR -Tamil (U/A)</p></b>
          <br>
          <p class="card-text">Date: 17/05/2022</p>
          <p class="card-text">Time: 11.25 AM</p>
          <p class="card-text">Seats: <b>A1 B2</b></p>
          <p class="card-text">Theatre: K.G Cinemas</p>

          
          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
        <div class="card-footer text-muted">
          Premium Offers Applied
        </div>
      </div>
    </div>

    <div></div><br>
    <p class="lead" style="text-align: center;">
      Check and verify the details of the ticket before cancelling.
    </p>
    <div class="container">
      <div class="child">
        <button onclick='location.href="t&c.php"' type="button" class="btn btn-info">Proceed Further</button>
      </div>
    </div>
   
    </div>
  </body>
</html>