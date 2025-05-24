<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="popup.css">

</head>

<body>
    <div class="contianer">
        <button type="button" class="btn btn-success" onclick="open_popup()">
            Submit
        </button>
        <button type="button" class="btn btn-danger" onclick="opencross_popup()">
            Submit
        </button>
        <div class="popup_container" id="popup">
            <img src="/templatepractice/rentalcar/assets/images/tick.png" alt="" />
            <h2>Thank you!</h2>
            <p>Your details has been successfully submitted!</p>
            <button type="button" name="name" onclick="close_popup()">ok</button>
        </div>

        <div class="crosspopup_container" id="cross_popup">
            <img src="/templatepractice/rentalcar/assets/images/cross.png" alt="" />
            <h2>Opss! Sorry</h2>
            <p>Your details has been failed to submitted!</p>
            <button type="button" name="name" onclick="closecross_popup()">ok</button>
        </div>
    </div>
    <script>
    let popup = document.getElementById("popup");

    function open_popup() {
        popup.classList.add("open-popup");
    }

    function close_popup() {
        popup.classList.remove("open-popup");
    }



    let pop = document.getElementById("cross_popup");

    function opencross_popup() {
        pop.classList.add("opencross_popup");
    }

    function closecross_popup() {
        pop.classList.remove("opencross_popup");
    }
    </script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>