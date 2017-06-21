$(document).ready(function() {
    function show_data() {

        $.ajax({
            url:"user_question_select.php",
            method:"POST",
            success:function(data) {
                $("#show_data").html(data);

            }
        });
    }

    show_data();

    $(document).on('click', '#add', function() {

        var tresc = $('#tresc').text();
        var odp1 = $('#odp1').text();
        var odp2 = $('#odp2').text();
        var odp3 = $('#odp3').text();
        var odp4 = $('#odp4').text();
        var poprawna = $('#poprawna').text();


        $.ajax({
            url:"question_insert.php",
            method:"POST",
            data:{
                tresc:tresc,
                odp1:odp1,
                odp2:odp2,
                odp3:odp3,
                odp4:odp4,
                poprawna:poprawna

            },
            dataType:"text",
            success:function(data) {

                show_data();
            }

        });
    });
    function edit_data(id, text , column_name) {

        $.ajax({

            url:"user_edit_question.php",
            method:"POST",
            data:{id:id, text:text, column_name:column_name},
            dataType:"text",
            success:function(data) {


            }
        });
    }

    $(document).on('blur', '.tresc', function() {

        var id = $(this).data("id1");
        var tresc = $(this).text();
        edit_data(id, tresc, "tresc");
    });
    $(document).on('blur', '.odp1', function() {

        var id = $(this).data("id2");
        var odp1 = $(this).text();
        edit_data(id, odp1, "odp1");
    });
    $(document).on('blur', '.odp2', function() {

        var id = $(this).data("id3");
        var odp2 = $(this).text();
        edit_data(id, odp2, "odp2");
    });
    $(document).on('blur', '.odp3', function() {

        var id = $(this).data("id4");
        var odp3 = $(this).text();
        edit_data(id, odp3, "odp3");
    });
    $(document).on('blur', '.odp4', function() {

        var id = $(this).data("id5");
        var odp4 = $(this).text();
        edit_data(id, odp4, "odp4");
    });
    $(document).on('blur', '.poprawna', function() {

        var id = $(this).data("id6");
        var poprawna = $(this).text();
        edit_data(id, poprawna, "poprawna");
    });
    $(document).on('click', '#delete', function(){

        var id =$(this).data('id3');//////usuwam zmieniam 
        if(confirm("Are you sure  You want to delete this? ")){
            $.ajax({
                url:"delete_questions.php",
                method:"POST",
                data:{id:id},
                dataType:"text",
                success: function(data) {

                    show_data();
                }
            });
        }

    });












});
