<?php /* Smarty version Smarty-3.1.14, created on 2017-05-18 22:40:53
         compiled from "D:\OpenServer\domains\eshop\wa-apps\site\themes\default\error.html" */ ?>
<?php /*%%SmartyHeaderCode:8801591df8c5b05583-46842095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9be5bf582e9a95742840e271739eee7408bdad89' => 
    array (
      0 => 'D:\\OpenServer\\domains\\eshop\\wa-apps\\site\\themes\\default\\error.html',
      1 => 1452519804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8801591df8c5b05583-46842095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_code' => 0,
    'error_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_591df8c6201645_05228543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591df8c6201645_05228543')) {function content_591df8c6201645_05228543($_smarty_tpl) {?><h1>
	<?php if ($_smarty_tpl->tpl_vars['error_code']->value){?><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
. <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['error_message']->value){?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }else{ ?>Ошибка<?php }?>
</h1>
Запрашиваемый ресурс недоступен.
<?php }} ?>