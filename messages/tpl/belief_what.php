<?php
$filename = 'lib/scripts/allpossiblesserialized.php';
$fh = fopen($filename, 'r');
$string = fread($fh, filesize($filename));
$options = unserialize($string);

$recipients = $options->Belief_what->items;

foreach($recipients as $recipient) {
  $value = $recipient->name;
  $selected = ($_POST['belief_what'] == $value) ? 'selected="selected"' : '';
  echo "<option value='$value' $selected> $value </option>\n";

}

?>