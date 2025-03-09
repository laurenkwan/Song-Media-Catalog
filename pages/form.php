<?php

$tags = exec_sql_query(
  $db,
  "SELECT * FROM tags"
);

define("MAX_FILE_SIZE", 1000000);
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
  <main class="form">

    <section>
      <?php if (is_user_logged_in()) { ?>

        <div class="add-song-info-form">
          <div class=" song-buttons">
            <a class="button-link" href="/">
              All song entries
            </a>
            <a class="button-link" href="/form">
              Add a song entry
            </a>
          </div>

          <h2 class="add-songs">Add Song Record</h2>

          <form method="post" action="/" enctype="multipart/form-data">

            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_FILE_SIZE; ?>">

            <div class="form-container">

              <div class="details-form">
                <label class="name-label" for="input-name">Song:</label>
                <input type="text" name="name" id="input-name">
              </div>

              <div class="details-form">
                <label class="artist-label" for="input-artist">Artist:</label>
                <input type="text" name="artist" id="input-artist">
              </div>

              <div class="checkboxes">Genre and Duration Tags:</div>
              <div class="details-form">
                <div class="checkbox-container">
                  <?php foreach ($tags as $tag) { ?>
                    <div class="checkbox-item-container">
                      <input class="checkbox-input" type="checkbox" name="<?php echo htmlspecialchars($tag['id']); ?>" id="select-tags">
                      <label class="checkbox-label" for="select-tags"><?php echo htmlspecialchars($tag['label']); ?></label>
                    </div>
                  <?php } ?>
                </div>

                <?php if ($upload_feedback['too_large']) { ?>
                  <p class=" feedback">We're sorry. The file failed to upload because it was too big. Please select a file that's no larger than 1MB.</p>
                <?php } ?>

              </div>
              <div class="details-form">
                <label class="upload-label" for="upload-file">JPG File:</label>
                <input class="upload-file" id="upload-file" type="file" name="jpg-file" accept=".jpg,image/jpg">
              </div>

              <div class="details-form">
                <label class="source-label" for="upload-source">Source URL:</label>
                <input id='upload-source' type="url" name="source" placeholder="URL(optional)">
              </div>

              <div class="align-right">
                <input class="submit-button" id="submit" type="submit" value="Submit" name="submit-songs">
              </div>
            </div>
          </form>
        </div>

      <?php } else { ?>

        <div class="song-login">
          <div class="song-buttons">
            <a class="button-link" href="/">
              All song entries
            </a>
            <a class="button-link" href="/form">
              Add a song entry
            </a>

          </div>
          <p class="song-description">Please sign in to add a song entry.</p>


          <?php
          echo login_form('/form', $session_messages);
          ?>
        </div>
      <?php } ?>
    </section>


  </main>

</body>

</html>
