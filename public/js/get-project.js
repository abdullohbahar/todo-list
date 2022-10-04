function getProject() {
    $.ajax({
        url: "/get-project",
        method: "GET",
        dataType: "json",
        success: function (response) {
            if (response.status == 200) {
                $("#projects").html("");
                $.each(response.data, function (key, value) {
                    if (value.deadline == null) {
                        var deadline = "-";
                    } else {
                        var deadline = value.deadline;
                    }

                    if (value.client == null) {
                        var client = "-";
                    } else {
                        var client = value.client;
                    }

                    $("#projects").append(`
                        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-5">
                            <a href="" class="link-dark text-decoration-none">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase">${value.name}</h5>
                                        <p>Deadline : ${deadline}</p>
                                        <p>Client : ${client}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    `);
                });
            }
        },
    });
}

$(document).ready(function () {
    getProject();
});
