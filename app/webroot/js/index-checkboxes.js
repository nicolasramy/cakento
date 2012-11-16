$(document).ready(function() {
    $(".checkboxes").click(function() {
        $.each($("input:checkbox"), function() {
            if ($(this).attr("checked")) {
                $(this).removeAttr("checked", "checked");
                $(this).parent().parent().parent().removeClass('info');
            } else {
                $(this).attr("checked", "checked");
                $(this).parent().parent().parent().addClass('info');
            }
        });
    });

    $(".table :checkbox").click(function() {
        if ($(this).attr("checked")) {
            $(this).parent().parent().parent().addClass('info');
        } else {
            $(this).parent().parent().parent().removeClass('info');
        }
    });
});
