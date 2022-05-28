<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Seat Booking</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="movie-container">
        
        <select id="movie" style="display: none;">
            <option value="90">Basic (₹90)</option>
            <option value="150">Gold (₹150)</option>
            <option value="210">Diamond (₹210)</option>
        </select>
    </div>

    <ul class="showcase">
        <li>
            <div class="seat"></div>
            <small>N/A</small>
        </li>
        <li>
            <div class="seat selected"></div>
            <small>Selected</small>
        </li>
        <li>
            <div class="seat occupied"></div>
            <small>Occupied</small>
        </li>
    </ul>

    <div class="container">
        <div class="movie-screen">
            <img src='screen-thumb.png' alt='screen' />
        </div>
        <div>!Screen this way!</div>

        <div class="row-container">
            <h5 class='subtitle'>BASIC</h5>
            <div class="row basic">
                <div class="seat" id="A1" value="90"></div>
                <div class="seat" id="A2" value="90"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <div class="row basic">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat occupied"></div>
                <div class="seat occupied"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <h5 class='subtitle'>GOLD</h5>
            <div class="row gold">
                <div class="seat" id="B1" value="150"></div>
                <div class="seat" id="B2" value="150"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat occupied"></div>
                <div class="seat occupied"></div>
            </div>
            <div class="row gold">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <div class="row gold">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat occupied"></div>
                <div class="seat occupied"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <div class="row gold">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <h5 class='subtitle'>DIAMOND</h5>
            <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat occupied"></div>
                <div class="seat occupied"></div>
                <div class="seat occupied"></div>
                <div class="seat"></div>
            </div>

            <div class="text-wrapper">
                <p class="text">Selected Seats <span id='count'>0</span>
                    <p class="text">Total Price ₹<span id="total">0</span></p>
            </div>
            <div style="padding: 40px;"> <h3  id="show-proceed" style="display:none">Do you want to add Snacks?
               <a href="finalfood.php"><button style="border: none; font-size:20px; background-color: transparent; color: #31d7a9">Yes</button><label style="color:#31d7a9">/</label><a onclick="payment()"><button style="border: none; font-size:20px; background-color: transparent; color: #31d7a9">No</button></a></h3>
            </div>
        </div>

    </div>


    <!-- <div class="text-wrapper">
        <p class="text">Selected Seats <span id='count'>0</span>
            <p class="text">Total Price ₹<span id="total">0</span></p>
    </div> -->

    <script src='script.js'></script>
</body>

</html>