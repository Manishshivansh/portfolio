var typed = new Typed(".text", {
    strings: ["Fullstack Developer . . ." , "Programmer . . ." , "Web Developer . . ."],
    typeSpeed: 70,
    backSpeed: 50,
    backDelay: 1000,
    loop: true
})

$(document).ready(function() {
    $('#emailForm').submit(function(e) {
        e.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var subject = $('#subject').val();
        var message = $('#message').val();

        $.ajax({
            type: 'POST',
            url: 'script.php', 
            data: {
                name: name,
                email: email,
                subject: subject,
                message: message
            },
            success: function(response) {
                alert('Email sent successfully!');
            },
            error: function(xhr, status, error) {
                alert('Error sending email: ' + error);
            }
        });
    });
});

document.getElementById("dark-mode").addEventListener("click", function() {
    document.body.classList.toggle("dark-mode");
});

