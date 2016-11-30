/**
 * Created by lumpa on 2016/10/29.
 */
$(document).ready(function () {
    $('.trace').click(function(){
        $.ajax({
            type: "GET",
            url: "phpFunction/mysql_iot.php?move=trace",
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
    });
});