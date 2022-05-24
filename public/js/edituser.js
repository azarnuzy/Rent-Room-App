$(document).ready(function () {
    $(".edituser").on("click", function () {
        const id = $(this).data("id");
        $.ajax({
            url: "/dashboard/users/" + id + "/edit",
            data: {
                id: id,
            },
            type: "get",
            dataType: "json",
            success: function (data) {
                $("#id").val(data.id);
                $("#name").val(data.name);
                $("#nomor_induk").val(data.nomor_induk);
                $("#email").val(data.email);
                $("#password").val(data.password);
                $("#role_id").val(data.role_id);
                $("#editformuser").attr(
                    "action",
                    "/dashboard/users/" + data.id
                );
            },
        });
    });
});
