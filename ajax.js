jQuery(document).ready(function () {
    jQuery(document).on("click", ".save", function () {
        var name = jQuery(".name").val();
        var email = jQuery(".email").val();
        var phone = jQuery(".phone").val();
        var status = jQuery(".status").val();
        jQuery.ajax({
            url: "process.php",
            type: "POST",
            data: {
                name: name,
                email: email,
                phone: phone,
                status: status,
                action: "insert"
            },
            success: function (res) {
                alert(res);
            }
        });
    });
    jQuery(document).on("click", ".show", function () {
        var name = jQuery(".name").val();
        var email = jQuery(".email").val();
        var phone = jQuery(".phone").val();
        var status = jQuery(".status").val();
        jQuery.ajax({
            url: "process.php",
            type: "POST",
            data: {

                action: "show"
            },
            success: function (res) {

            }
        });
    });
});