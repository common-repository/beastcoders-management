<?php
/*
Plugin Name: beastCoders Management
Plugin URI: http://wordpress.org/plugins/beastcoders-management/
Description: This Plugin is for ths users who wants some basic functionalities or their website.
Version: 1.1.1
Author: beastcoders
Author URI: http://beastcoders.blogspot.com
License: A "beastcoders-management" license name e.g. GPL2
*/
?>
<?php
/* Required File */
require_once 'framework/settings.php';
require_once 'widgets/fb_like_box.php';

/* Constants */
define("BEAST_URL",plugins_url().'/beastcoders-management',TRUE);

/* Actions */
add_action('admin_menu','create_beastcoders_menu');
add_action('admin_head','bc_admin_css');


/* Functions */
function bc_admin_css()
{
    ?>
<link rel="stylesheet" media="screen" href="<?php echo BEAST_URL;?>/admin/css/admin_css.css" />
    <?php
}

function create_beastcoders_menu()
{
    add_menu_page(__('beast Settings','beastcoders'),__('beast Settings','beastcoders'),manage_options,'beast_settings','display_beastcoders_settings');
}

function display_beastcoders_settings()
{
    $admin_bar=get_option('bc_disable_admin_bar');
    $recent_post_widget=get_option('bc_recent_post_widget');
    $fb_like_box=get_option('bc_fb_like_box');
    ?>
<div class="beast-main">
<div class="beast-head">
<h1>beastCoders Settings</h1>
</div>
<div class="beast-container">
    <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
    <div class="beast-fields">
        <input type="checkbox" name="bc_disable_admin_bar" <?php if($admin_bar=='on'){ echo 'checked="checked"';}?> />
        <label>Disable Admin Bar</label>
    </div>
    <?php /*<div class="beast-fields">
        <input type="checkbox" name="bc_recent_post_widget" <?php if($recent_post_widget=='on'){ echo 'checked="checked"';}?> />
        <label>Recent Post Widget</label>
    </div>*/?>
    <div class="beast-fields">
        <input type="checkbox" name="bc_fb_like_box" <?php if($fb_like_box=='on'){ echo 'checked="checked"';}?> />
        <label>Facebook Like Box</label>
    </div>
    <div class="beast-submit-buttons">
        <input class="button-primary" type="submit" name="bc_save_settings" value="Save Settings"/>
    </div>
    </form>
</div>
    
</div>
    <?php
    if($_POST['bc_save_settings'])
    {
        $disable_admin_bar=$_POST['bc_disable_admin_bar'];
        update_option('bc_disable_admin_bar', $disable_admin_bar);
        $recent_post_widget=$_POST['bc_recent_post_widget'];
        update_option('bc_recent_post_widget', $recent_post_widget);
        $fb_like_box=$_POST['bc_fb_like_box'];
        update_option('bc_fb_like_box', $fb_like_box);
        ?>
        <div id="message" class="success">Settings saved</div>  
        <?php
    }
}

?>
