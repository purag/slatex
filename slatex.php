<? header("Content-type:application/json"); ?>
{
	"response_type": "in_channel",
	"text": "https://chart.googleapis.com/chart?cht=tx&chl=<?= urlencode($_POST["text"]) ?>",
	"unfurl_links": true
}
