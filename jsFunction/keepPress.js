/**
 * Created by lumpa on 2016/11/15.
 */
$(document).ready(function () {
    $('.arrow').mousedown(function () {
        var direct = $(this).attr('arrow');
        timeout = setInterval(function () {
            $.ajax({
                type: "GET",
                url: "phpFunction/mysql_iot.php?move=" + direct,
                dataType: "json",
                success: function (data) {
                    if (data.result) {
                        $("#show-data").html(
                            "您的位置在:<br>X=" + data.sql['movX'] + ", Y=" + data.sql['movY']
                        );
                    } else {
                        $("#show-data").html('fuck');
                    }
                },
                error: function (jqXHR) {
                    alert("發生錯誤: " + jqXHR.status);
                }
            });
        }, 500);
    }).mouseup(function () {
        clearInterval(timeout);
    });
});
