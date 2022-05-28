const seats = document.querySelectorAll(".row .seat:not(.occupied)");
const seatContainer = document.querySelector(".row-container");
const count = document.getElementById("count");
const total = document.getElementById("total");
const movieSelect = document.getElementById("movie");

// Another Approach

// seats.forEach(function(seat) {
//   seat.addEventListener("click", function(e) {
//     seat.classList.add("selected");
//     const selectedSeats = document.querySelectorAll(".container .selected");
//     selectedSeathLength = selectedSeats.length;
//     count.textContent = selectedSeathLength;
//     let ticketPrice = +movieSelect.value;
//     total.textContent = ticketPrice * selectedSeathLength;
//   });
// });

// localStorage.clear();

populateUI();

let ticketPrice = +movieSelect.value;

// Save selected movie index and price
function setMovieData(movieIndex, moviePrice) {
  localStorage.setItem("selectedMovieIndex", movieIndex);
  localStorage.setItem("selectedMoviePrice", moviePrice);
}

function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll(".container .selected");

  seatsIndex = [...selectedSeats].map(function(seat) {
    return [...seats].indexOf(seat);
  });

  localStorage.setItem("selectedSeats", JSON.stringify(seatsIndex));

  let selectedSeatsCount = selectedSeats.length;
  count.textContent = selectedSeatsCount;
  total.textContent = selectedSeatsCount * ticketPrice;
}

// Get data from localstorage and populate
function populateUI() {
  const selectedSeats = JSON.parse(localStorage.getItem("selectedSeats"));

  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach(function(seat, index) {
      if (selectedSeats.indexOf(index) > -1) {
        seat.classList.add("selected");
      }
    });
  }

  const selectedMovieIndex = localStorage.getItem("selectedMovieIndex");

  if (selectedMovieIndex !== null) {
    movieSelect.selectedIndex = selectedMovieIndex;
  }
}

// Movie select event

movieSelect.addEventListener("change", function(e) {
  ticketPrice = +movieSelect.value;
  setMovieData(e.target.selectedIndex, e.target.value);
  updateSelectedCount();
});

// Adding selected class to only non-occupied seats on 'click'

seatContainer.addEventListener("click", function(e) {
  
  if (
    e.target.classList.contains("seat") &&
    !e.target.classList.contains("occupied")
  ) {

    e.target.classList.toggle("selected");
    
    //updateSelectedCount();
   getList();
  

}
});

function getList(){
  const selectedSeats = document.querySelectorAll(".container .basic .selected");
  const selectedGoldSeats = document.querySelectorAll(".container .gold .selected");
  //console.log(selectedSeats.length);
  console.log(selectedSeats);
  console.log(((selectedSeats.length) +(selectedGoldSeats.length)));
  const counts = ((selectedSeats.length) +(selectedGoldSeats.length));
  console.log(counts);
  if((selectedSeats.length+selectedGoldSeats.length)>0)
  {
    document.getElementById("show-proceed").style.display = "block";
  }
  else{
    console.log('dfgdth');
    document.getElementById("show-proceed").style.display = "none";
  }
  const totals = ((selectedSeats.length)*90)+((selectedGoldSeats.length)*150)
  count.textContent = counts;
  total.textContent = totals;

}

function payment(){
  const selectedSeats = document.querySelectorAll(".container .basic .selected");
  const selectedGoldSeats = document.querySelectorAll(".container .gold .selected");
  const totals = ((selectedSeats.length)*90)+((selectedGoldSeats.length)*150)
  var s=[];
for (var i=0;i< selectedSeats.length;i++)
{
  s.push(selectedSeats[i].id);

}
for (var i=0;i< selectedGoldSeats.length;i++)
{
  s.push(selectedGoldSeats[i].id);
 
}
localStorage.setItem("tickets", s);
localStorage.setItem("ticketPrice", totals);
window.location.href="payment.php";
}

// Initial count and total rendering
updateSelectedCount();
