<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shultz Songs</title>
</head>

<body>
<?php
/*
Next program create list of songs of Robin Shultz.
Randomly selects one of the songs, saves the name in a
CONSTANT. The song is unset from the remaining play list
and displayed a random number of times between 1 and 20. 
Finally, the remainig play list is sorted and displayed 
*/

$shultzSongs = array("Sugar");
array_push($shultzSongs, "Rain");
array_push($shultzSongs, "Feeling");
array_push($shultzSongs, "Same");
array_push($shultzSongs, "Waves");
array_push($shultzSongs, "Prayer in C");
array_push($shultzSongs, "Willst Du");
array_push($shultzSongs, "Headlights");
array_push($shultzSongs, "Sun Goes Down");
array_push($shultzSongs, "Stone");

//echo "<p>".count($shultzSongs)."</p>";

$randomTrackNum = rand(0 , count($shultzSongs)-1);

$playingTrack = $shultzSongs[$randomTrackNum];

unset($shultzSongs[$randomTrackNum]);

define("CURRENT_TRACK", $playingTrack);

function playANiceShultzSong($track){
	global $message; 
	$message = " Awesome Track: $track.";
	return $message;
}

function printRemainingList($playList){
	print("<ol>");
	foreach ($playList as $track) {
		print("<li>$track</li>");
	}
	print("</ol>");
} 

print "Now playing ".playANiceShultzSong($playingTrack);
print "<p>Remaining play list:</p>";
print "".printRemainingList($shultzSongs);

?>
</body>
</html