$(document).ready(function () {
    var tablica = [];
    var questionCount = 0;
    //
    $("#submit").click(function () {
        questionCount++;
        var limit = 1;
        $.ajax({
            url: "select_user_quiz.php",
            method: "POST",
            data: {
                limit: limit
            },
            beforeSend: function () {

                $("body").append('<div class="loader"><div class="spiner"></div></div></div>');
                $(".container").hide();

            },

            success: function (data) {
                $(".loader").delay(500).fadeOut(700);
                $(".container").show();
                $('#result').html(data);
                $(".change").on("click", function (event) {
                    var odp = event.target.id;
                    var pop = $("#poprawna").html();
                    // console.log(pop+"poprawna");

                    if (odp == pop) {
                        $(this).closest("div").addClass("btn-green");
                        $(".change").unbind("click");
                        $(this).closest("div").removeClass("odp");
                        $(this).closest("div").removeClass("change");
                        $(".change").removeClass("odp");
                        $(".change").addClass("disable");


                        tablica.push("good");

                        $('#pkt').html(tablica.length);

                    } else {
                        $(this).closest("div").addClass("btn-red");
                        $(this).closest("div").removeClass("odp");
                        $(".odp").addClass("disable");
                        $(".change").removeClass("odp");
                        $(".change").unbind("click");


                        var odp1 = $("#odp1").attr("id");
                        var odp2 = $("#odp2").attr("id");
                        var odp3 = $("#odp3").attr("id");
                        var odp4 = $("#odp4").attr("id");


                        if (odp1 == pop) {

                            $("#odp1").removeClass("disable");
                            $("#odp1").addClass("btn-green-disabled");
                            $("#odp1").removeClass("odp");

                        } else if (odp2 == pop) {
                            $("#odp2").removeClass("disable");
                            $("#odp2").addClass("btn-green-disabled");
                            $("#odp2").removeClass("odp");

                        } else if (odp3 == pop) {
                            $("#odp3").removeClass("disable");
                            $("#odp3").addClass("btn-green-disabled");
                            $("#odp3").removeClass("odp");

                        } else if (odp4 == pop) {
                            $("#odp4").removeClass("disable");
                            $("#odp4").addClass("btn-green-disabled");
                            $("#odp4").removeClass("odp");

                        }

                    }

                });

            }
        });
        console.log("pytanie nr:" + questionCount);
        console.log("id_pytania:" + $("#result").html());
    });
});
