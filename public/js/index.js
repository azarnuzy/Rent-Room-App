$(document).ready(function () {
    $("#denah-select").on("change", function () {
        let denah = $("#denah-select option:selected").val();

        if (denah == "1") {
            $(".denah_lt1-img").removeClass("d-none");
            $(".denah_lt2-img").addClass("d-none");
            $(".denah_lt3-img").addClass("d-none");
        }

        if (denah == "2") {
            $(".denah_lt1-img").addClass("d-none");
            $(".denah_lt2-img").removeClass("d-none");
            $(".denah_lt3-img").addClass("d-none");
        }
        if (denah == "3") {
            $(".denah_lt1-img").addClass("d-none");
            $(".denah_lt2-img").addClass("d-none");
            $(".denah_lt3-img").removeClass("d-none");
        }
    });
});

$(document).ready(function () {
    let now = new Date();

    let day = ("0" + now.getDate()).slice(-2);
    let month = ("0" + (now.getMonth() + 1)).slice(-2);
    let today = now.getFullYear() + "-" + month + "-" + day;

    $("#datePicker").val(today);

    $("#datereset").click(function () {
        const tr = document.querySelectorAll(".rent-detail");
        for (let i = 0; i < tr.length; i++) {
            tr[i].style.display = "table-row";
        }
    });

    $("#datebtn").click(function () {
        let value = $("#datePicker").val();
        const tr = document.querySelectorAll(".rent-detail");
        for (let i = 0; i < tr.length; i++) {
            const start_detail_time = document
                .querySelectorAll(".detail-rent-room_start-time")
                [i].innerText.split(" ")[0];
            start_detail_time != value
                ? (tr[i].style.display = "none")
                : (tr[i].style.display = "table-row");
        }
    });
});
