$(document).ready(function () {

    console.log("Victor was here");

    function validateForm() {
        let id = document.forms["destinationForm"]["id"].value;
        let locationName = document.forms["destinationForm"]["locationName"].value;
        let countryName = document.forms["destinationForm"]["countryName"].value;
        let description = document.forms["destinationForm"]["description"].value;
        let costPerDay = document.forms["destinationForm"]["costPerDay"].value;

        if (!(id && locationName && countryName && description && costPerDay)) {
            throw Error("Invalid form parameters")
        } else {
            return [id, locationName, countryName, description, costPerDay]
        }
    }

    function addDestination(start, end) {
        $.ajax({
            type: "POST",
            url: "static/addDestination.php",
            data: {
                id: validateForm()[0],
                locationName: validateForm()[1],
                countryName: validateForm()[2],
                description: validateForm()[3],
                costPerDay: validateForm()[4],

            },
            cache: false,
            success: function (data) {
                console.log(data)
                $("#result").html(data);

            },


        });
    }

    function deleteDestination(start, end) {
        $.ajax({
            type: "POST",
            url: "static/deleteDestination.php",
            data: {
                id: document.forms["destinationForm"]["id"].value,
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
            addDestination()
        } catch (e) {
            alert(e)
        }
    });

    $("#delete-button").click(() => {
        try {
            if (!(document.forms["destinationForm"]["id"].value)) {
                throw Error("Invalid form parameters");
            }
            deleteDestination()

        } catch (e) {
            alert(e)
        }
    });


});
