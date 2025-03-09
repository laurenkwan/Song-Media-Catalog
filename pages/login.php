<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="/public/styles/site.css" media="all">
</head>

<body class="login-body">

  <?php if (!is_user_logged_in()) { ?>

    <div class="song-login">
      <div class="song-buttons">
        <a class="button-link" href="/">
          All song entries
        </a>
        <a class="button-link" href="/form">
          Add a song entry
        </a>

      </div>
      <p class="song-description">Sign in</p>

      <?php
      echo login_form('/login', $session_messages);
      ?>
    </div>

  <?php } else { ?>
    <div class="song-buttons">
      <a class="button-link" href="/">
        All song entries
      </a>
      <a class="button-link" href="/form">
        Add a song entry
      </a>

    </div>

    <div class="welcome-container">
      <p class="welcome-message">Welcome <strong><?php echo htmlspecialchars($current_user['name']); ?></strong>!</p>

      <p class="welcome-sentence">Please use the 'All song entries' and 'Add a song entry' tabs to navigate through the site.</p>
    </div>
  <?php } ?>


</body>

</html>
