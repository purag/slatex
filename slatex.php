<?
header("Content-type:application/json");

$url = "https://chart.googleapis.com/chart?cht=tx&chl=" . urlencode($_POST["text"]);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch);

$info = curl_getinfo($ch);
$status = $info["http_code"];

if ($status === 200) {
?>

  {
    "response_type": "in_channel",
    "text": "<<?= $url ?>| >",
    "unfurl_links": true
  }

<?
} else {
?>

  {
    "text": "Sorry, I couldn't render that. There was an error in your LaTeX. :slightly_frowning_face:"
  }

<?
}

curl_close($ch);
?>
