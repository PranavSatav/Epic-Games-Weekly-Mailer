<?php
// Load the data from the file
$fileContents = file_get_contents('epic_games_data.txt');
$data = json_decode($fileContents, true);

// Create HTML content for the email
$htmlContent = '<html><body style="font-family: sans-serif; background-color: #f7fafc; padding: 20px;">';

foreach ($data as $game) {
    $htmlContent .= '<div style="max-width: 400px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); margin-bottom: 20px;">';
    $htmlContent .= '<img src="' . $game['offerImageWide'] . '" alt="Game Image" style="width: 100%; height: auto;">';
    $htmlContent .= '<div style="padding: 20px;">';
    $htmlContent .= '<h2 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 10px;">' . $game['name'] . '</h2>';
    $htmlContent .= '<p style="font-size: 1rem; color: #4a5568; margin-bottom: 10px;">' . $game['description'] . '</p>';
    $htmlContent .= '<p style="font-size: 1.2rem; font-weight: bold; color: #38a169; margin-bottom: 10px;">Price: $' . $game['discountPrice'] . ' (Discounted from $' . $game['originalPrice'] . ')</p>';
    $htmlContent .= '<p style="font-size: 1rem; color: #4a5568; margin-bottom: 10px;">Publisher: ' . $game['publisher'] . '</p>';
    $htmlContent .= '<p><a href="' . $game['appUrl'] . '" style="font-size: 1.1rem; color: #4299e1; text-decoration: underline;">View on Epic Games Store</a></p>';
    $htmlContent .= '</div></div>';
}

$htmlContent .= '</body></html>';

// Set up the email headers
$to = 'madphoenix1311@gmail.com'; // Replace with your recipient email address
$subject = 'Epic Games Store Data';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Send the email
mail($to, $subject, $htmlContent, $headers);

echo 'Email sent successfully!';
?>
