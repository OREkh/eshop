<?php /* Smarty version Smarty-3.1.14, created on 2017-05-18 22:23:14
         compiled from "D:\OpenServer\domains\eshop\wa-apps\shop\themes\default\head.html" */ ?>
<?php /*%%SmartyHeaderCode:30934591df4a20b0482-41421016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8c4e7c028aafd2b66d28da9a3ec0ac332236cab' => 
    array (
      0 => 'D:\\OpenServer\\domains\\eshop\\wa-apps\\shop\\themes\\default\\head.html',
      1 => 1461663989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30934591df4a20b0482-41421016',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_active_theme_url' => 0,
    'wa_theme_version' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
    'wa_static_url' => 0,
    'filters' => 0,
    'nofollow' => 0,
    'frontend_head' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_591df4a20e4aa3_40175419',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591df4a20e4aa3_40175419')) {function content_591df4a20e4aa3_40175419($_smarty_tpl) {?><!-- shop app css -->
<link href="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
default.shop.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
jquery.bxslider.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
jquerycountdowntimer/css/jquery.countdownTimer.css" rel="stylesheet" type="text/css">

<!-- js -->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/lazy.load.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
jquery.bxslider.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
jquerycountdowntimer/jquery.countdownTimer.min.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-plugins/jquery.cookie.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
default.shop.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script>
<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->config('enable_2x')){?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-plugins/jquery.retina.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script type="text/javascript">$(window).load(function() {
    $('.promo img').retina({ force_original_dimensions: false });
    $('.product-list img,.product-info img,.cart img').retina();;
    $('.bestsellers img').retina();
});
</script>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['filters']->value)){?>
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/css/jquery-ui/base/jquery.ui.slider.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.core.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.widget.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.mouse.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.slider.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['nofollow']->value)){?>
    <!-- "nofollow" for pages not to be indexed, e.g. customer account -->
    <meta name="robots" content="noindex,nofollow" />
<?php }?>

<!-- plugin hook: 'frontend_head' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_head']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>
<?php }} ?>