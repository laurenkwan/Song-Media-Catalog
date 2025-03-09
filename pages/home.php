<?php

define("MAX_FILE_SIZE", 1000000);

$upload_feedback = array(
  'general_error' => False,
  'too_large' => False
);

$upload_source = NULL;
$upload_file_name = NULL;
$upload_file_ext = NULL;

$form_values = array(
  'name' => '',
  'artist' => ''
);

if (isset($_POST["submit-songs"])) {

  $upload_source = trim($_POST['source']);
  if (empty($upload_source)) {
    $upload_source = NULL;
  }

  $upload = $_FILES['jpg-file'];

  $form_valid = True;

  $upload_file_name = basename($upload['name']);

  $upload_file_ext = strtolower(pathinfo($upload_file_name, PATHINFO_EXTENSION));


  if (!in_array($upload_file_ext, array('jpg'))) {
    $form_valid = False;
    $upload_feedback['general_error'] = True;
  }


  if ($form_valid) {

    $form_values['name'] = ($_POST['name'] == '' ? NULL : $_POST['name']);
    $form_values['artist'] = ($_POST['artist'] == '' ? NULL : $_POST['artist']);


    $result = exec_sql_query(
      $db,
      "INSERT INTO songs (name, artist, file_name, file_ext, source) VALUES (:name, :artist, :file_name, :file_ext, :source);",
      array(
        ':name' => $form_values['name'],
        ':artist' => $form_values['artist'],
        ':file_name' => $upload_file_name,
        ':file_ext' => $upload_file_ext,
        ':source' => $upload_source
      )
    );

    $record_id = $db->lastInsertId("id");


    if ($result) {
      $upload_storage_path = 'public/uploads/songs/' . $record_id . '.' . $upload_file_ext;

      move_uploaded_file($upload["tmp_name"], $upload_storage_path);
    }
  }
}


$id_param = $_GET['delete-songs'] ?? NULL;

if (isset($_GET["delete-songs"])) {

  exec_sql_query(
    $db,
    "DELETE FROM song_tags WHERE song_id = :song_id",
    array(':song_id' => $id_param)
  );

  exec_sql_query(
    $db,
    "DELETE FROM songs WHERE id = :id",
    array(':id' => $id_param)
  );
}


$tag_check =  $_GET['label'] ?? NULL;

if (isset($tag_check)) {
  $result2 = exec_sql_query(
    $db,
    "SELECT songs.id AS 'songs.id', songs.name AS 'songs.name', songs.artist AS 'songs.artist', songs.file_name AS 'songs.file_name', songs.file_ext AS 'songs.file_ext', songs.source AS 'songs.source' FROM songs INNER JOIN song_tags ON (songs.id = song_tags.song_id) INNER JOIN tags on (song_tags.tag_id = tags.id) WHERE (:label = tags.label)",
    array(":label" => $tag_check)
  );
} else {
  $result2 = exec_sql_query(
    $db,
    "SELECT songs.id AS 'songs.id', songs.name AS 'songs.name', songs.artist AS 'songs.artist', songs.file_name AS 'songs.file_name', songs.file_ext AS 'songs.file_ext', songs.source AS 'songs.source' FROM songs"
  );
}
$records = $result2->fetchAll();

$tags = exec_sql_query(
  $db,
  "SELECT * FROM tags"
)->fetchAll();


foreach ($tags as $tag) {
  if ($_POST[$tag['id']] == "on") {
    exec_sql_query(
      $db,
      "INSERT INTO song_tags (song_id, tag_id) VALUES (:song_id, :tag_id)",
      array(
        ':song_id' => $record_id,
        ':tag_id' => $tag['id']
      )
    );
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Songs</title>

  <link rel="stylesheet" type="text/css" href="/public/styles/site.css" media="all">
</head>

<body>
  <?php include 'includes/header.php'; ?>


  <!-- Source: https://open.spotify.com/-->
  <main class="songs">
    <div class="sidebar">
      <p class="tag-title">Tags</p>

      <?php foreach ($tags as $tag) { ?>
        <a class="genre-link" href="/?<?php echo http_build_query(array('label' => $tag['label'])); ?>"><?php echo $tag['label']; ?></a>
      <?php } ?>
    </div>


    <div class="title-and-songs">

      <?php if (is_user_logged_in()) { ?>
        <p class="welcome-message">Welcome <strong><?php echo htmlspecialchars($current_user['name']); ?></strong>!</p>
      <?php } ?>

      <h1 class="songs-title">Songs</h1>

      <div class="song-buttons">
        <a class="button-link" href="/">
          All song entries
        </a>
        <a class="button-link" href="/form">
          Add a song entry
        </a>
      </div>


      <?php
      if (count($records) > 0) { ?>
        <ul class="gallery-container">


          <?php foreach ($records as $record) {
            $file_url = '/public/uploads/songs/' . $record['songs.id'] . '.' . $record['songs.file_ext'];
          ?>
            <li class="specific-song-container ">
              <a href="/details?id=<?php echo htmlspecialchars($record['songs.id']); ?>">
                <div class="thumbnail">
                  <img class="song-image" src="<?php echo htmlspecialchars($file_url); ?>" alt="<?php echo htmlspecialchars($record['songs.name']); ?>" width="300" height="300">
                </div>
                <div class="song-info">
                  <div class="song-title"><?php echo htmlspecialchars($record['songs.name']); ?></div>
                  <div class="song-artist"><?php echo htmlspecialchars($record['songs.artist']); ?></div>
                </div>

              </a>
            </li>
          <?php
          } ?>
        </ul>

      <?php
      } else { ?>
        <p class="empty-collection">Your song collection is <em>empty</em>. Try uploading some songs.</p>
      <?php } ?>

    </div>

  </main>

</body>

</html>
