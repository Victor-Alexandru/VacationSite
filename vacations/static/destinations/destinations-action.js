$(document).ready(function () {
    let start = 0;
    let end = 4;

    function tableCreate(data) {
        let resultDiv = document.getElementById('result');
        if (resultDiv.hasChildNodes()) {
            resultDiv.removeChild(resultDiv.childNodes[0]);
        }
        var tbl = document.createElement('table');
        tbl.classList.add("table");
        tbl.classList.add("table-dark");
        tbl.classList.add("table-hover");
        tbl.classList.add("items-table");
        tbl.classList.add("mt-5");
        tbl.classList.add("mx-1");
        let thead = document.createElement('thead');
        let trh = document.createElement('tr');

        let th = document.createElement('th');
        th.appendChild(document.createTextNode('Id'));

        let th1 = document.createElement('th');
        th1.appendChild(document.createTextNode('Location'));

        let th2 = document.createElement('th');
        th2.appendChild(document.createTextNode('Country'));

        let th3 = document.createElement('th');
        th3.appendChild(document.createTextNode('Description'));

        let th4 = document.createElement('th');
        th4.appendChild(document.createTextNode('Daily Cost'));


        trh.appendChild(th);
        trh.appendChild(th1);
        trh.appendChild(th2);
        trh.appendChild(th3);
        trh.appendChild(th4);
        thead.appendChild((trh));
        tbl.appendChild(thead);


        var tbdy = document.createElement('tbody');
        let dataArray = JSON.parse(data);

        let nr_iterations = (dataArray.length > 4) ? 4 : dataArray.length;

        for (let i = 0; i < nr_iterations; i++) {
            let tr = document.createElement('tr');

            let td = document.createElement('td');
            td.appendChild(document.createTextNode(dataArray[i]["destinationId"]));

            let td1 = document.createElement('td');
            td1.appendChild(document.createTextNode(dataArray[i]["locationName"]));

            let td2 = document.createElement('td');
            td2.appendChild(document.createTextNode(dataArray[i]["countryName"]));

            let td3 = document.createElement('td');
            td3.appendChild(document.createTextNode(dataArray[i]["description"]));

            let td4 = document.createElement('td');
            td4.appendChild(document.createTextNode(dataArray[i]["costPerDay"]));

            tr.appendChild(td);
            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            tr.appendChild(td4);

            tbdy.appendChild(tr);
        }
        tbl.appendChild(tbdy);
        resultDiv.appendChild(tbl)
    }

    function getData(start, end) {
        $.ajax({
            type: "POST",
            url: "static/fetchDestinations.php",
            data: {start: start, end: end},
            cache: false,
            success: function (data) {
                let nextBtn = document.getElementById("next-button");
                if (JSON.parse(data).length < 5) {
                    nextBtn.style.display = "none";
                    tableCreate(data);

                } else {
                    tableCreate(data);
                    nextBtn.style.display = "inline";
                }
            },


        });
    }

    console.log(start, end);
    getData(start, end);


    $("#previous-button").click(() => {

        if (start !== 0) {
            start = start - 4;
            end = end - 4;
            console.log(start, end);
            getData(start, end);
        }

    });

    $("#next-button").click(() => {
        if ($("tr").length >= 5) {
            start = start + 4;
            end = end + 4;
            console.log(start, end);
            getData(start, end);
        }

    });

});