<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Data</title>
    <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.min.css" integrity="sha256-sWZjHQiY9fvheUAOoxrszw9Wphl3zqfVaz1kZKEvot8=" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1>PEOPLE DATA</h1>
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-warning btn-nxt-person rounded-pill float-end" id="add_person">NEXT PERSON</button>
            </div>
        </div>
        <div class="row overflow-scroll" id="people-data">
            
        </div>
        <div class="row mt-3 text-center text-light">
            <strong>CURRENTLY <span id="persons_count">0</span> PEOPLE SHOWING</strong>
        </div>

        <script type="text/javascript" src="./assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="./assets/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript" src="./assets/js/script.js"></script>
</body>

</html>