<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vacations</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="static/targetManager/targetManagerScript.js"></script>


    <link rel="stylesheet" type="text/css" href="static/base.css">

    <link rel="stylesheet" type="text/css" href="static/destinationManager/destinationManager.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<main class="container-fluid main-div">

    <?php
    include "static/header.php"

    ?>


    <div class="row main-part">
        <div class="col-sm-2 left-div"></div>
        <div class="col-sm-8 middle-div">
            <div class="form-component container shadow-lg m-3 h-100 w-100">
                <form name="targetForm" class="mt-2">
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Target Id</label>
                        <input type="number" class="form-control" name="targetId" placeholder="1">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Target Name</label>
                        <input type="text" class="form-control" name="targetName"
                               placeholder="ex. Notre Damm Cathedral">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Destination Id</label>
                        <input type="number" class="form-control" name="destinationId" placeholder="1">
                    </div>
                </form>
                <div class="row">
                    <div class="mx-auto">
                        <button id="add-button" type="button" class="btn btn-outline-primary rounded-circle">Add/Update
                        </button>
                    </div>

                    <div class="mx-auto">
                        <button id="delete-button" type="button" class="btn btn-outline-danger rounded-circle">Delete
                        </button>
                    </div>
                </div>
                <div class="row m-4" id="result"></div>

            </div>
        </div>

    </div>
    <div class="col-sm-2 left-div"></div>
    </div>
    <div class="container footer-part ">

    </div>

</main>
</body>
</html>




























