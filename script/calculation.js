$(document).ready(function () {
    document.getElementById("calculation").onsubmit = function (e) {
        e.preventDefault();
    },
        $("#calculation").on("submit", function () {
            $.ajax({
                url: '/calc.php',
                method: 'post',
                data: $(this).serialize(),
                success: function (data) {
                    $('#message').html(data);
                }
            });
        });
});
