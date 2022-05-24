$(document).ready(function () {
    $(".editroom").on("click", function () {
        const id = $(this).data("id");
        const code = $(this).data("code");
        $.ajax({
            url: "/dashboard/rooms/" + code + "/edit",
            data: {
                id: id,
                code: code,
            },
            type: "get",
            dataType: "json",
            success: function (data) {
                console.log(data);
                $("#id").val(data.id);
                $("#code").val(data.code);
                $("#name").val(data.name);
                $("#floor").val(data.floor);
                $("#capacity").val(data.capacity);
                $("#building_id").val(data.building_id);
                $("#type").val(data.type);
                $("#description").val(data.description);
                $("#editform").attr("action", "/dashboard/rooms/" + data.code);
            },
        });
    });
});
