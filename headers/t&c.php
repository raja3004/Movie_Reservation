<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T&C</title>
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
    <h2 class="heading display-4">Cancellation Terms</h2>
<div class="container">
  <div id="cancel-terms" class="child card">
    <ul class="list-group list-group-flush" style="padding: 1em;">
      <li class="list-group-item" >We do have quite a few cinemas who now provide cancellation of confirmed tickets. If you have tickets for a cinema that has the cancellation provision, it will reflect under ‘Purchase History’ on the app/website.</li>
      <li class="list-group-item">If you do not see an option to cancel your tickets, make sure you're logged in via the same email ID used to book the tickets. If the cancellation option still does not appear, chances are that the cinema you've booked for does not provide the cancellation of confirmed tickets.
    </li>
      <li class="list-group-item">Whilst booking the tickets, just tap on the cinema name, if you see 'Ticket Cancellation' under available facilities, you are the lucky one. Also, you may check the SMS or Email confirmation. It mentions if cancellation is available and the cancellation cut-off time, if available. Cinemas allow cancellation of tickets between 20 minutes to 4 hours prior to showtime. (Differing from cinema to cinema).
    </li>
      <li class="list-group-item">In order to avail of the cancellation feature, the user needs to be logged in via the same email ID used to book the tickets. All you need to do is select the booking you wish to cancel under the 'Purchase History' section and hit the cancel tab. 

    </li>
      <li class="list-group-item">No longer, will you lose the entire amount but instead remain eligible for 75%/70%/50% of the ticket amount to be refunded depending on cancellation policy of that particular cinema.

    </li>
      <li class="list-group-item">Note: In case you have redeemed a gift voucher while booking and canceled your tickets, the amount will be refunded to the same gift voucher. You may redeem it post 24 hours.
    </li>
    </ul>
  </div>
</div>
<br>
<div class="container">
    <div class="child">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
        I have read the cancellation terms and I understand that I'm solely responsibile for any further consequenses.
        </label>
    </div>
</div>
<br>
<div class="container">
    <div class="child">
      <button onclick='location.href="reason+type.php"' type="button" class="btn btn-warning">Go Next</button>
    </div>
  </div>
  <div class="container">
    <a href="/">Terms and Conditions</a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="/">Privacy policy</a>
    <br><br><br><br>
</body>
</html>
