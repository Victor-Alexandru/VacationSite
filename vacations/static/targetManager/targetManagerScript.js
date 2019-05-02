$(document).ready(function () {

    console.log("Victor was here");

    function validateForm() {
        let targetId = document.forms["targetForm"]["targetId"].value;
        let targetName = document.forms["targetForm"]["targetName"].value;
        let destinationId = document.forms["targetForm"]["destinationId"].value;

        if (!(targetId && targetName && destinationId)) {
            throw Error("Invalid form parameters")
        } else {
            return [targetId, targetName, destinationId]
        }
    }

    function addTarget() {
        $.ajax({
            type: "POST",
            url: "static/addTarget.php",
            data: {
                targetId: validateForm()[0],
                targetName: validateForm()[1],
                destinationId: validateForm()[2],

            },
            cache: false,
            success: function (data) {
                console.log(data)
                $("#result").html(data);

            },


        });
    }

    function deleteTarget() {
        $.ajax({
            type: "POST",
            url: "static/deleteTarget.php",
            data: {
                targetId: document.forms["targetForm"]["targetId"].value,
            },
            cache: false,
            success: function (data) {
                console.log(data);
                $("#result").html(data);

            },


        });
    }

    $("#add-button").click(() => {
        try {
            validateForm();
            addTarget()
        } catch (e) {
            alert(e)
        }
    });

    $("#delete-button").click(() => {
        try {
            if (!(document.forms["targetForm"]["targetId"].value)) {
                throw Error("Invalid form parameters");
            }
            deleteTarget()

        } catch (e) {
            alert(e)
        }
    });


});
