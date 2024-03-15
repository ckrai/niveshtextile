<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function is_logged_in()
{
	if (!isset($_SESSION['np_session_id'])) {
		session_destroy();
		echo "<script>window.location = 'login';</script>";
	}

}


function upload_image($location)
{
	if(isset($_FILES["file"]))
	{
		$extension = explode('.', $_FILES['file']['name']);
		$new_name = rand() . '.' . $extension[1];
		$destination = $location . $new_name;
		move_uploaded_file($_FILES['file']['tmp_name'], $destination);
		return $new_name;
	}   
}
function upload_image_event_jpg($locationjpg)
{
	if(isset($_FILES["jpgfile"]))
	{
		$extension = explode('.', $_FILES['jpgfile']['name']);
		$new_name = rand() . '.' . $extension[1];
		$destination = $locationjpg . $new_name;
		move_uploaded_file($_FILES['jpgfile']['tmp_name'], $destination);
		return $new_name;
	}
}
function upload_image_event_pdf($locationpdf)
{
	if(isset($_FILES["pdffile"]))
	{
		$extension = explode('.', $_FILES['pdffile']['name']);
		$new_name = rand() . '.' . $extension[1];
		$destination = $locationpdf . $new_name;
		move_uploaded_file($_FILES['pdffile']['tmp_name'], $destination);
		return $new_name;
	}
}

/**
 * Return the slug of a string to be used in a URL.
 *
 * @return String
 */
function slugify($text){
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
    // trim
    $text = trim($text, '-');
    // remove duplicated - symbols
    $text = preg_replace('~-+~', '-', $text);
    // lowercase
    $text = strtolower($text);
    if (empty($text)) {
      return 'n-a';
    }
    return $text;
}
?>