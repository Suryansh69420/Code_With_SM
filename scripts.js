document.getElementById('joinButton').addEventListener('click', function() {
    alert('Thank you for joining LearnSmart!');
});

const enrollButtons = document.querySelectorAll('.enrollButton');
enrollButtons.forEach(button => {
    button.addEventListener('click', function() {
        const courseName = this.parentElement.querySelector('h3').innerText;

        // Send a POST request to enroll.php
        fetch('enroll.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `courseName=${encodeURIComponent(courseName)}`
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
