<?php if (is_user_logged_in()) { ?>
  <p class="float-right"><a class="sign-link" href="<?php echo logout_url(); ?>">Sign Out</a></p>
<?php } else { ?>
  <p class="float-right"><a class="sign-link" href="/login">Sign in</a></p>
<?php } ?>
