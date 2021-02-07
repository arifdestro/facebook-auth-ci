<!-- Display login button / Facebook profile information -->
<?php if (!empty($authURL)) { ?>
<h2>CodeIgniter Facebook Login</h2>
<a href="<?php echo $authURL; ?>"><img src="<?php echo base_url('assets/img/fb_button.png'); ?>" width="350"></a>
<?php } else { ?>
<h2>Facebook Profile Details</h2>
<div class="ac-data">
    <img src="<?php echo $userData['picture']; ?>" />
    <p><b>Facebook ID:</b> <?php echo $userData['oauth_uid']; ?></p>
    <p><b>Name:</b> <?php echo $userData['first_name'] . ' ' . $userData['last_name']; ?></p>
    <p><b>Email:</b> <?php echo $userData['email']; ?></p>
    <p><b>Gender:</b> <?php echo $userData['gender']; ?></p>
    <p><b>Login with:</b> Facebook</p>
    <p><b>Link to Profile:</b> <a href="<?php echo $userData['link']; ?>" target="_blank">Click to visit Facebook
            page</a></p>
    <p><b>Button Logout</p><br><a href="<?php echo base_url('user_authentication/logout'); ?>"><img
            src="<?php echo base_url('assets/img/fb_button_logout.png'); ?>" width="350"></a>
</div>
<?php } ?>