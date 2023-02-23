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
                jQuery(".msg").html('<div class="alert alert-success">' + res + '</div>');
                jQuery(".msg").fadeOut("5000");
                jQuery(".name").val('');
                jQuery(".email").val('');
                jQuery(".phone").val('');
                jQuery(".status").val('');
                show();
            }
        });
    });
    show();
    function show() {
        jQuery.ajax({
            url: "process.php",
            type: "POST",
            data: {
                action: "show"
            },
            success: function (res) {
                jQuery(".tData").html(res);
            }
        })
    }
});