<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
</head>
<body>

<section class="text-gray-700 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
       
       <p class="mb-8 leading-relaxed">
      <b>👾 Free Games </b>:
      <?php
$data = json_decode(file_get_contents('PUT YOUR LINK HERE'), true);
echo $data['freeGames']['current']['0']['title'];

?>

& 

<?php
$data = json_decode(file_get_contents('PUT YOUR LINK HERE'), true);

echo $data['freeGames']['current']['1']['title'];
?>



      </p>
      <p class="mb-8 leading-relaxed">
      <b>🔜 Upcoming Games </b>:
      <?php
$data = json_decode(file_get_contents('PUT YOUR LINK HERE'), true);
echo $data['freeGames']['upcoming']['0']['title'];

?>

& 

<?php
$data = json_decode(file_get_contents('PUT YOUR LINK HERE'), true);

echo $data['freeGames']['upcoming']['1']['title'];
?>


</p>
     
    </div>
   



 


  </div>
</section>


<?php
$to = "abc@gmail.com, xyz@gmail.com";
$subject = "This Week's Epic Games";
$txt = "[ Available ✅ ]-=".$data['freeGames']['current']['0']['title']." & ".$data['freeGames']['current']['1']['title']."=-"; 



$headers = "From: FreeEpicGames@accts.epicgames.com" . "\r\n" .
"CC: FreeEpicGames@accts.epicgames.com";

mail($to,$subject,$txt,$headers);
?>


</body>
</html>
