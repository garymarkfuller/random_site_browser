<meta http-equiv="refresh" content="30">

<?php 

$words = file('words.txt', FILE_IGNORE_NEW_LINES);

$wordnumber = array_rand($words);

$word= $words[$wordnumber];

$domain = 'http://' . $word . '.com';

echo $domain . '<br />';

$request = strip_tags(file_get_contents($domain));

echo "<p>This site's content:</p><p>$request</p>";