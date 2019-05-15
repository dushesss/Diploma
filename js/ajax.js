$(function () {
    $("#country").change(function () {
        // Запрашиваем у сервера города страны
        $.get("/tools/get_cities.php?country=" + this.value, function (data) {
            // Предполагается, что сервер нам вернёт готовый список <option>,
            // которым мы заменим те, что  есть сейчас в city
            $("#city").html(data);
        }, "html")
    });
});