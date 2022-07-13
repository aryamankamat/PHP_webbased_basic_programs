<?php
$xml = new DOMDocument();
$xml->load("slip4-2(b).xml");

$run = $xml->getElementsByTagName('runs');
$wic = $xml->getElementsByTagName('wickets');
$name = $xml->getElementsByTagName('player');

echo "<br/> Player Details are displayed below...<br/>";
foreach ($name as $n) {
    if (($run > '1200') && ($wic >= '50')) {
        echo "<br>" . $n->textContent;
    } else {
        echo "No players.";
    }
}
