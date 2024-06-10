window.onload = function() {
    var timeLeft = 10; // 45 minutes
    var timer = setInterval(function() {
        document.getElementById('timer').innerHTML = formatTime(timeLeft);
        timeLeft--;
        if (timeLeft < 0) {
            clearInterval(timer);
            document.getElementById('submit_exam_Btn').disabled = false;
            alert('Time is up! Please click on OK to submit your answers.');
            submitForm(); // submit when time up
        }
    }, 1000);

    // Add event listener to the submit button
    document.getElementById('submit_exam_Btn').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default form submission
        clearInterval(timer); // Stop the timer
        var confirmed = confirm('Are you sure you want to submit your answers?');
        if (confirmed) {
            submitForm(); // Submit the form
            window.location.replace("Exam_B_result.php"); 
        } else {
            alert('You can continue answering the questions.');
        }
    });
}

function formatTime(seconds) {
    var minutes = Math.floor(seconds / 60);
    var remainingSeconds = seconds % 60;
    return minutes + "m " + remainingSeconds + "s";
}

function submitForm() {
    document.getElementById("Exam_Form").submit();
}
