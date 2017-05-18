<?php /* Smarty version Smarty-3.1.14, created on 2017-05-18 22:22:45
         compiled from "D:\OpenServer\domains\eshop\wa-apps\shop\templates\actions\backend\BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:13941591df485cc15a6-50511119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a313eb4db8bfc090c93af07ccddf38f995dadbe3' => 
    array (
      0 => 'D:\\OpenServer\\domains\\eshop\\wa-apps\\shop\\templates\\actions\\backend\\BackendLoc.html',
      1 => 1452519801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13941591df485cc15a6-50511119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_591df485d1add7_58579805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591df485d1add7_58579805')) {function content_591df485d1add7_58579805($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>