<?php
$dir = new FilesystemIterator('/mnt/motionvideos', FilesystemIterator::SKIP_DOTS);
$count = iterator_count($dir);
$new_count = iterator_count($dir);
while (true){
	$fi = new FilesystemIterator('/mnt/motionvideos', FilesystemIterator::SKIP_DOTS);
	$new_count = iterator_count($dir);
	if ($count < $new_count){
		$to = "pepi2401_98@abv.bg";
		$subject = "Pi update";
		$txt = "Motion detected!!";
		$headers = "From: raspberry@pi.com";

		mail($to,$subject,$txt,$headers);
		echo "sent mail";
		$count = $new_count;
	}
}
?>
