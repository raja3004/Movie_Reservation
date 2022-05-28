<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type of Refund</title>
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
    <h1 id="page-title" class="heading display-3">Ticket Cancellation</h1><br>
    <div class="container">
        <div id="cancel-form" class="child">
        
          <label class="form-label display-6" for="reason">Reason for Cancellation</label><br>
          <textarea class="form-control" rows="3"></textarea><br>
          <div class="mb-3 row">
              <label class="form-label display-6 " for="refund-mode">Refund Mode</label>
              <div class="col-sm-10">
                  <select class="form-select "> 
                      <option selected class="dropdown-item" value="giftcard">GiftCard</option>
                      <option class="dropdown-item" value="paytm">PayTM</option>
                      <option class="dropdown-item" value="netbanking">NetBanking</option>
                      <option class="dropdown-item" value="UPI">UPI</option>
                  </select>
              </div>
            </div>
          </div>
      </div>
      <script>
          const showAlert=()=>{
              alert("Your cancellation has been initiated.");
          }
          
      </script>
      <div class="container">
          <div class="child">
              <button type="button" class="btn btn-danger" id="liveAlertBtn" onclick="showAlert();location.href='confirmation.php'">Confirm Cancellation</button>
          </div>
      </div>
      <br>
     
</body>
</html>