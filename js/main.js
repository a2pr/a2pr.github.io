$(document).ready(function () {
    $("#mycarousel").carousel({
        ride:"carousel"
    });

    $("#carousel-button").click(function () {
        if ($("#carousel-button").children("span").hasClass("fa-pause")) {
            $("#mycarousel").carousel('pause');
            $("#mycarousel").carousel({
                interval:false
            });

            $("#carousel-button").children("span").removeClass("fa-pause");
            $("#carousel-button").children("span").addClass("fa-play");
        }
        else if ($("#carousel-button").children("span").hasClass("fa-play")) {
            $("#mycarousel").carousel('cycle');
            $("#mycarousel").carousel({
                interval:3000
            });
            $("#carousel-button").children("span").removeClass("fa-play");
            $("#carousel-button").children("span").addClass("fa-pause");
        }
       
    });
});