$("#submitProject").on("submit", function (e) {
    e.preventDefault();

    var data = $(this).serialize();

    $.ajax({
        url: "/store-project",
        data: data,
        method: "POST",
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
                getProject();
            } else {
                if (response.errors.name != null) {
                    Swal.close();
                    $("#name").addClass("is-invalid");
                }
            }
        },
    });
});
