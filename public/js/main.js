var again = true;



$(document).ready(function () {


    $(".rate").click(function () {
        if (again) {
            again = false;
            $.ajax({
                method: "GET",
                url: "http://192.168.0.1/sae-bewertungstool/get.php",
                data: {
                    date: $(this).attr("data-date"),
                    evaluation: $(this).attr("data-eval"),
                    teacher: $(this).attr("data-lecturer"),
                    class: $(this).attr("data-course"),
                    subject: $(this).attr("data-subject"),
                    red_reason: $(this).attr("data-red")
                }
            }).done(function (res) {
                console.log(res);
                setTimeout(function () {
                    again = true;
                }, 500);
            });
        }

    });
});

// display Clock
window.setInterval('updateClock()', 1000);

// reload Page every 30 Minutes
window.setInterval('location.reload(true);', (15 * 60 * 1000));




