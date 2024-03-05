<?php
// LUNGHEZZA PASSWORD
    $password_len = !empty($_GET["pass-len"]) ? $_GET['pass-len'] : 5;
    
    // var_dump($password_len);
    
    // ARRAY CARATTERI
    $characters=[
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
        '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '{', '}', '[', ']', '|', ':', ';', '"', "'",'<', '>', ',', '.', '?', '/'
        ,0, 1, 2, 3, 4, 5, 6, 7, 8, 9,
    ];

    // FUNCTION PASSWORD GENERATOR
    function generate_password ($characters, $password_len) {

        // NEW PASS ARRAY
        $password = [];

        for ($i = 0; $i <= $password_len; $i++) {

            // RANDOM CHARACTER KEY
            $character_key = array_rand($characters);

            // RANDOM CHARACTER
            $character = $characters[$character_key];

            // PUSH INTO NEW PASS ARRAY
            $password[] = $character;

        }

        // IMPLODE ARRAY
        $generated_password = implode('', $password);

        // RETURN
        return $generated_password;

    };

    $password_generator = generate_password($characters, $password_len);

    // var_dump($password_generator);