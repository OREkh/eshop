<?php /* Smarty version Smarty-3.1.14, created on 2017-05-18 22:41:07
         compiled from "D:\OpenServer\domains\eshop\wa-apps\site\templates\actions\backend\BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:20534591df8d3c54b81-35245248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b481171a35c16c05af97e361a49530415300499b' => 
    array (
      0 => 'D:\\OpenServer\\domains\\eshop\\wa-apps\\site\\templates\\actions\\backend\\BackendLoc.html',
      1 => 1452519803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20534591df8d3c54b81-35245248',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_591df8d3cac098_51583849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591df8d3cac098_51583849')) {function content_591df8d3cac098_51583849($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>