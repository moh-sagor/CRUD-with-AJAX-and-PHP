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
                // jQuery(".msg").fadeOut("5000");
                jQuery(".name").val('');
                jQuery(".email").val('');
                jQuery(".phone").val('');
                jQuery(".status").val('');
                show();
            }
        });
    });


    jQuery(document).on("click", "#edit", function () {
        jQuery(".update").show();
        jQuery(".save").hide();
        var id = jQuery(this).val();
        jQuery.ajax({
            url: "process.php",
            type: "POST",
            dataType: "json",
            data: {
                action: "finddata",
                id: id
            },
            success: function (res) {
                jQuery(".name").val(res.name);
                jQuery(".email").val(res.email);
                jQuery(".phone").val(res.phone);
                jQuery(".status").val(res.status);
                jQuery(".update").val(res.id);
            }
        });
    });

    jQuery(document).on("click", "#editmodal", function () {
        var id = jQuery(this).val();
        jQuery.ajax({
            url: "process.php",
            type: "POST",
            dataType: "json",
            data: {
                action: "finddata",
                id: id
            },
            success: function (res) {
                jQuery(".mname").val(res.name);
                jQuery(".memail").val(res.email);
                jQuery(".mphone").val(res.phone);
                jQuery(".mstatus").val(res.status);
                jQuery(".mupdate").val(res.id);
            }
        });
    });

    jQuery(document).on("click", ".update", function () {
        var name = jQuery(".name").val();
        var email = jQuery(".email").val();
        var phone = jQuery(".phone").val();
        var status = jQuery(".status").val();
        var id = jQuery(this).val();
        jQuery.ajax({
            url: "process.php",
            type: "POST",
            data: {
                name: name,
                email: email,
                phone: phone,
                status: status,
                action: "update",
                id: id
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
    jQuery(document).on("click", ".mupdate", function () {
        var name = jQuery(".mname").val();
        var email = jQuery(".memail").val();
        var phone = jQuery(".mphone").val();
        var status = jQuery(".mstatus").val();
        var id = jQuery(this).val();
        jQuery.ajax({
            url: "process.php",
            type: "POST",
            data: {
                name: name,
                email: email,
                phone: phone,
                status: status,
                action: "update",
                id: id
            },
            success: function (res) {
                jQuery(".msg").html('<div class="alert alert-success">' + res + '</div>');
                jQuery(".msg").fadeOut("5000");
                jQuery(".mname").val('');
                jQuery(".memail").val('');
                jQuery(".mphone").val('');
                jQuery(".mstatus").val('');
                jQuery("#updateItem").modal("hide");
                show();
            }
        });
    });



    jQuery(document).on("click", "#delete", function () {
        var id = jQuery(this).val();
        jQuery("#deleteItem").modal("show");
        jQuery(".btn-delete").val(id);
    });
    jQuery(document).on("click", ".btn-delete", function () {
        var id = jQuery(this).val();
        jQuery.ajax({
            url: "process.php",
            type: "POST",
            data: {
                id: id,
                action: "delete"
            },
            success: function (res) {
                jQuery("#deleteItem").modal("hide");
                show();

            }
        });
    });

    jQuery(document).on("click", ".active", function () {
        var id = jQuery(this).val();
        jQuery.ajax({
            url: "process.php",
            type: "POST",
            data: {
                id: id,
                action: "active"
            },
            success: function (res) {
                show();
            }
        });
    });


    jQuery(document).on("click", ".inactive", function () {
        var id = jQuery(this).val();
        jQuery.ajax({
            url: "process.php",
            type: "POST",
            data: {
                id: id,
                action: "inactive"
            },
            success: function (res) {
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
        });
    }
});
