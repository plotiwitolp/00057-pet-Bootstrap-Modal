<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>00056-pet-PHP-2 and Bootsrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modal1">Modal</button>
    <div id="modal1" class="modal fade modal-lg" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content p-5 bg-dark text-white">
                <div class="modal-header">
                    <h1 class="modal-title">Modal 1</h1>
                    <button class="btn-close btn-close-white" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla iste nesciunt a sunt itaque delectus similique eveniet vero nihil quisquam dicta officia nobis accusantium molestias tempore temporibus assumenda, commodi dolorem!
                </div>
                <div class="modal-footer">
                    <div class="btn btn-success" data-bs-dismiss="modal">Close</div>
                </div>
            </div>

        </div>
    </div>
    <div id="modal2" class="modal fade modal-lg" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content p-5 bg-dark text-white">
                <div class="modal-header">
                    <h1 class="modal-title">Modal 2</h1>
                    <button class="btn-close btn-close-white" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla iste nesciunt a sunt itaque delectus similique eveniet vero nihil quisquam dicta officia nobis accusantium molestias tempore temporibus assumenda, commodi dolorem!
                </div>
                <div class="modal-footer">
                    <div class="btn btn-success" data-bs-dismiss="modal">Close</div>
                </div>
            </div>

        </div>
    </div>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>