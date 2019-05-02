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

    <script src="static/customSearch/customSearch.js"></script>


    <link rel="stylesheet" type="text/css" href="static/base.css">

    <link rel="stylesheet" type="text/css" href="static/customSearch/customSearch.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<main class="container-fluid main-div">

    <?php
    include "static/header.php"
    ?>


    <div class="row main-part">
        <div class="col-sm-2 left-div">
            <div class="row">
                <form name="customSearchForm" class="mt-2 mx-auto">
                    <div class="form-group">
                        <label for="formGroupExampleInput2" class="text-primary">Country</label>
                        <input type="text" class="form-control" name="countryName" placeholder="Spain">
                        <button id="search-button" type="button" class="btn btn-outline-primary  mt-4">Search
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-8 middle-div">
            <div id="result" class="container"></div>
            <div class="container button-div">
                <div class="row">
                    <div>
                        <button id="previous-button" type="button" class="btn btn-outline-primary rounded-circle"><i
                                    class="fa fa-arrow-left"></i></button>
                    </div>

                    <div class="ml-auto">
                        <button id="next-button" type="button" class="btn btn-outline-primary rounded-circle"><i
                                    class="fa fa-arrow-right"></i></button>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-sm-2 right-div"></div>
    </div>


    <div class="container-fluid footer-part">
        <?php
        include "static/footer.php"
        ?>
    </div>

</main>
</body>
</html>