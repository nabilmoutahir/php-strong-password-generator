<?php

    include_once __DIR__ . "/./functions.php";

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

    <div class="d-flex justify-content-center align-content-center row">

        <h1 class="text-center mt-5">Password Generator</h1>

        <form method="GET" action="" class="mt-2 col-2 text-center">

            <label class="form-label">Scegli il numero di caratteri</label>
            
            <input type="number" name="pass-len" placeholder="min 5 - max 90" min="5" max="90" class="form-control text-center my-3">
            
            <button class="btn btn-primary col-12">Send</button>
            

        </form>


        <div class="text-center mt-5">

            <h4>La tua password è:</h4>
            
            <div>
                <?php echo $password_generator ?>
            </div>

        </div>

        
    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>

</body>

</html>