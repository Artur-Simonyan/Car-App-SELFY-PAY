jQuery(document).ready(function () {
    $("#form").submit(function () {
        $.ajax({
            type:"POST",
            url: "/cars/create",
            data: $(this).serialize()
        }).done(function (data) {
            document.getElementById("form").reset();
            $("body").html(data);
        });
        return false;
    });
});