// Booking Form Submit Handler
document.getElementById("bookingForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const destination = document.getElementById("destination").value;
    const date = document.getElementById("date").value;

    if (destination && date) {
        alert(`Your trip to ${destination} on ${date} has been booked successfully!`);
    } else {
        alert("Please fill in all fields.");
    }
});
