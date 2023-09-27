<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $textareaContent = $_POST['textarea'];
    $array = explode("\n", $textareaContent);

    // Print the resulting array
    $emails = $array;
    $tempatEmail = [];
    $count = 1;
    $index = 0;
    foreach($emails as $email ){
      if($count >= 76){
        $index++;
        $count = 1;
      }
      $tempatEmail[$index][] = $email;
      $count++;
    }
    echo json_encode($tempatEmail);
    $jsonfile = json_encode($tempatEmail);
    file_put_contents('daftar.json', $jsonfile);
}
?>

<!-- HTML form with textarea -->
<form method="post" action="">
    <textarea name="textarea"></textarea>
    <input type="submit" value="Convert to Array">
</form>
