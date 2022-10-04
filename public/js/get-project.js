$("#submitProject").on("submit", function (e) {
    $.ajax({
        url: "/get-project",
        method: "GET",
        dataType: "json",
        beforeSend: function () {
            Swal.fire({
                title: "Processing Data",
                didOpen: () => {
                    Swal.showLoading();
                },
            });
        },
        success: function (response) {
            if (response.status == 200) {
                Swal.close();
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Project Added Successfully",
                    showConfirmButton: false,
                    timer: 1500,
                });

                $("input").val("");
                $("#addProject").hide();
                $(".modal-backdrop").removeClass();
                $(".fade").removeClass();
                $(".show").removeClass();
            } else {
                if (response.errors.name != null) {
                    Swal.close();
                    $("#name").addClass("is-invalid");
                }
            }
        },
    });
});
