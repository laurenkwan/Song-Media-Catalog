<?php
?>
<!DOCTYPE html>
<html lang="en">
<!-- test -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/public/styles/site.css" media="all">

  <title>Song Details</title>

</head>

<body>
  <main>
    <?php include 'includes/header.php'; ?>
    <?php

    $id_param = $_GET['id'] ?? NULL;

    $result1 = exec_sql_query(
      $db,
      "SELECT songs.id AS 'songs.id', songs.name AS 'songs.name', songs.artist AS 'songs.artist', songs.file_name AS 'songs.file_name', songs.file_ext AS 'songs.file_ext', songs.source AS 'songs.source'
FROM songs WHERE (id = $id_param);"
    );

    $result2 = exec_sql_query(
      $db,
      "SELECT tags.id AS 'tags.id', tags.label AS 'tags.label', song_tags.song_id AS 'song_tags.song_id', song_tags.tag_id AS 'song_tags.tag_id'
    FROM tags
    INNER JOIN song_tags ON tags.id = song_tags.tag_id
    WHERE song_tags.song_id = $id_param;"
    );

    $records1 = $result1->fetchAll();
    $records2 = $result2->fetchAll();

    ?>

    <!-- Source: https://open.spotify.com/-->

    <?php foreach ($records1 as $record) { ?>
      <h1 class="song-title-details"><?php echo htmlspecialchars($record['songs.name']); ?></h1>
      <div class="specific-song-details-container">
        <div class="song-pic-container">
          <img class="song-pic" src="<?php echo htmlspecialchars('/public/uploads/songs/' . $record['songs.id'] . '.' . $record['songs.file_ext']); ?>" alt="<?php echo htmlspecialchars($record['songs.file_name']); ?>" width="400" height="400">
          <p class="song-source"><?php echo htmlspecialchars($record['songs.source']); ?></p>
        </div>
        <div class="specific-song-information">

          <h2><?php echo htmlspecialchars($record['songs.artist']); ?></h2>
        <?php } ?>

        <?php foreach ($records2 as $record) { ?>
          <h3>#<?php echo htmlspecialchars($record['tags.label']); ?></h3>
        <?php } ?>

        </div>

      </div>

      <div class="detail-links">
        <a class="back-to-homepage" href="/">Back to all song entries</a>

        <?php if (is_user_logged_in()) { ?>
          <a class="delete-link" href="/?<?php echo http_build_query(array('delete-songs' => $id_param)) ?>"> Delete </a>
        <?php } ?>
      </div>

  </main>

</body>


</html>
