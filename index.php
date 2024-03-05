<?php

    // LUNGHEZZA PASSWORD
    $password_len = !empty($_GET["pass-len"]) ? $_GET['pass-len'] : 5;
    
    var_dump($password_len);
    
    // ARRAY CARATTERI
    $characters=[
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
        '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '{', '}', '[', ']', '|', ':', ';', '"', "'",'<', '>', ',', '.', '?', '/'
        ,0, 1, 2, 3, 4, 5, 6, 7, 8, 9,
    ];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="d-flex justify-content-center align-content-center">

        <form method="GET" action="" class="row col-6 mt-5">

            

            <label class="form-label">Numero caratteri</label>
            
            <input type="number" name="pass-len" placeholder="min 5 - max 90" min="5" max="90" class="form-control text-center">
            
            <button class="btn btn-primary">Send</button>
        </form>

        <div>
            <!-- <?php echo $new ?>  -->
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>

</body>

</html>