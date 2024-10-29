<?php
/*
Plugin Name: beastCoders Management
Author: Mehul Gohil
*/
?>
<?php
/* Constants */
define("BEAST_URL",plugins_url().'/beastcoders',TRUE);

/* Actions */
add_action('admin_menu','create_beastcoders_menu');
add_action('admin_head','bc_admin_css');


/* Functions */
function bc_admin_css()
{
    ?>
<link rel="stylesheet" media="screen" href="<?php echo BEASTURL;?>/admin/css/admin_css.css" />
    <?php
}

function create_beastcoders_menu()
{
    add_menu_page(__('beast Settings','beastcoders'),__('beast Settings','beastcoders'),manage_options,'beast_settings','display_beastcoders_settings');
}

function display_beastcoders_settings()
{
    $admin_bar=get_option('bc_disable_admin_bar');
    ?>
<div class="beast-main">
<h1>beastCoders Settings</h1>
<div class="beast-container">
    <form method="post" action="">
    <div class="beast-fields">
        <input type="checkbox" name="bc_disable_admin_bar" <?php if($admin_bar=='on'){ echo 'checked="checked"';}?> />
        <label>Disable Admin Bar</label>
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
        $disble_admin_bar=$_POST['bc_disable_admin_bar'];
        update_option('bc_disable_admin_bar', $disble_admin_bar);
        ?>
        <div id="message" class="success">Settings saved</div>  
        <?php
    }
}
if(get_option('bc_disable_admin_bar'))
{
    add_filter('show_admin_bar','__return_false');
}
?>
