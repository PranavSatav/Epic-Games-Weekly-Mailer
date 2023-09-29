<?php

function fetchDataFromAPI() {
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://epic-free-games.p.rapidapi.com/epic-free-games",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: epic-free-games.p.rapidapi.com",
            "X-RapidAPI-Key: d2eaf5f479mshf557ca322b1afc5p1aadf3jsn51be1a56948b"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return false;
    } else {
        // Save the response to the file
        file_put_contents('epic_games_data.txt', $response);
        return true;
    }
}

?>
