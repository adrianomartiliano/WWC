<?php 
    require_once '../../menu.html';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
    <style>
        #carroselinscritos{
            max-width: 400px;
            margin: 20px auto;
            border-radius: 20px;
        }
        #testee{
            border: 1px solid gray;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <div id="carroselinscritos" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../../images/x1faca.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../../images/x2menu.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../../images/x3menu.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <div id="testee" class="d-block w-100">
                    Teste
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carroselinscritos" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carroselinscritos" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>