<?php

function CheckLoadImg($fileTmpName, $newName)
{
	if (is_uploaded_file($fileTmpName)) {
	return move_uploaded_file($fileTmpName, $newName);
	}
	return false;
}

function CheckFormatImg($fileTmpName)
{
	$imgInfo = getimagesize($fileTmpName);
	return ($imgInfo['mime'] == 'image/gif' || $imgInfo['mime'] =='image/jpeg');
}

