<?php
// Include api.php to make sure fetchDataFromAPI function is defined
include 'api.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    // Call the function to update the data
    $apiSuccess = fetchDataFromAPI();

    if (!$apiSuccess) {
        echo "Error fetching data from the API.";
    }
}

// Get games data from the file
$fileData = file_get_contents('epic_games_data.txt');
$games = json_decode($fileData, true);

// HTML UI
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epic Games Free Games</title>
    <!-- Include Tailwind CSS via CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/0.5.3/tailwind.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {display: none;}
.image-container {
    width: 200px; /* Set your desired fixed width */
    height: 150px; /* Set your desired fixed height */
    overflow: hidden;
    border-radius:5%;
}
.word-wrap {
        padding-right:1rem;
        word-wrap: break-word;
        text-align: justify;
    }
.game-image {
    width: 100%;
    height: 100%;
    object-fit: cover; /* This property ensures the image covers the entire container */
    display: block;
}

</style>
</head>
<body class="bg-red-light">
  


<header class="bg-red-light" style="font-family: Montserrat;">
  <nav class="container mx-auto p-4 sm:p-8 flex flex-wrap md:flex-no-wrap items-center justify-between text-white overflow-hidden">
    <div class="flex items-center font-bold tracking-wide mr-4 mb-4 md:mb-0">
      Epic Games Weekly Mailer v2

      


      
      <div class="pl-4 flex items-center justify-between">
        <span class="w-8 h-8 rounded-full bg-white opacity-25"></span>
        <span class="-ml-6 w-4 h-4 rounded-full bg-white"></span>
      </div>

    </div>
    <ul class="list-reset flex flex-wrap md:flex-no-wrap items-center md:justify-between  text-xs">
     <form method="post" action="" class="mt-8 text-center">
            
        
      <li>
        <button type="submit" class="mr-4 mb-4 md:mb-0 p-2 inline-block no-underline text-white uppercase border border-white rounded" name="update" value="Update">Update Games List
      </li></form>
    </ul>
  </nav>

  <div class="container mt-8 p-4 sm:p-8 rounded  mx-auto text-white">

    <h1 class="mb-3 tracking-wide text-base uppercase font-normal">Free Games</h1>
    <h2 class="tracking-wide text-3xl md:text-5xl font-semibold">These are Free Games
      <br>on Epic to Buy!</h2>

    <div class="container  mt-8 mx-auto flex flex-wrap md:shadow-lg">
      <div class="flex-auto  w-full md:w-1/2 mb-6 md:mb-0 bg-white shadow-lg md:shadow-none">

        <div class="flex flex-wrap justify-between lg:flex-no-wrap px-4 sm:px-6 py-8 bg-grey-lighter text-grey-darker text-sm">
          <div class="mb-6 lg:w-3/5 lg:mb-0">
              
            <h3 class="mb-3 text-black text-3xl font-semibold"><?= $games[0]['name'] ?></h3>
            <p class="word-wrap"><?= $games[0]['description'] ?>
            </p>
          </div>
          <div class="lg:flex-no-shrink">
            
            <div class="image-container">
    <img src="<?= $games[0]['offerImageWide'] ?>" alt="Game Image" class="game-image">
</div>

          </div>
        </div>
        <div class="px-4 sm:px-6 py-8">
          <ul class="list-reset text-black mb-8">
            <li class="flex items-center mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 mr-2" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                    />
                                </svg>  <p>Orignal Price - $<?= $games[0]['originalPrice'] ?></p>
            </li>
            <li class="flex items-center mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 mr-2" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                    />
                                </svg> <p>Discount Price - $<?= $games[0]['discountPrice'] ?></p>
            </li>
            <li class="flex items-center mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 mr-2" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                    />
                                </svg> <p>Publisher - <?= $games[0]['publisher'] ?></p>
            </li>
            
          </ul>
          <a  class="inline-block p-4 rounded text-sm text-white no-underline uppercase bg-teal" href="<?= $games[0]['appUrl'] ?>" target="_blank" class="text-blue-500 hover:underline">Get now for free</a>
          
        </div>
      </div>

      <div class="flex-auto w-full md:w-1/2 mb-6 md:mb-0 bg-grey-darkest shadow-lg md:shadow-none">

        <div class="flex flex-wrap justify-between lg:flex-no-wrap px-4 sm:px-6 py-8 text-white text-sm bg-black">
          <div class="mb-6 lg:w-3/5 lg:mb-0">
            <h3 class="mb-3 text-3xl font-semibold"><?= $games[1]['name'] ?></h3>
            <p class="word-wrap"><?= $games[1]['description'] ?>
            </p>
          </div><div class="lg:flex-no-shrink">
             <div class="image-container">
    <img src="<?= $games[1]['offerImageWide'] ?>" alt="Game Image" class="game-image">
</div>
          </div>
        </div>
        <div class="px-4 sm:px-6 py-8">
          <ul class="list-reset text-white mb-8">
            <li class="flex items-center mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 mr-2" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                    />
                                </svg>  <p>Orignal Price - $<?= $games[1]['originalPrice'] ?></p>
            </li>
            <li class="flex items-center mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 mr-2" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                    />
                                </svg> <p>Discount Price - $<?= $games[1]['discountPrice'] ?></p>
            </li>
            <li class="flex items-center mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 mr-2" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
                                    />
                                </svg> <p>Publisher - <?= $games[1]['publisher'] ?></p>
            </li>
            
          </ul>
          <a  class="inline-block p-4 rounded text-sm text-white no-underline uppercase bg-teal" href="<?= $games[1]['appUrl'] ?>" target="_blank" class="text-blue-500 hover:underline">Get now for free</a>
          
        </div>
      </div>
    </div>
  </div>

</header>
</body>
</html>