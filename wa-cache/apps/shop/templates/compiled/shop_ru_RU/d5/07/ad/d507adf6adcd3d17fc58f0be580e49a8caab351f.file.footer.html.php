<?php /* Smarty version Smarty-3.1.14, created on 2017-05-18 22:23:15
         compiled from "D:\OpenServer\domains\eshop\wa-apps\shop\themes\default\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:16173591df4a3ddffa3-35505091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd507adf6adcd3d17fc58f0be580e49a8caab351f' => 
    array (
      0 => 'D:\\OpenServer\\domains\\eshop\\wa-apps\\shop\\themes\\default\\footer.html',
      1 => 1465288802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16173591df4a3ddffa3-35505091',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currencies' => 0,
    'theme_settings' => 0,
    'wa' => 0,
    'c_code' => 0,
    'currency' => 0,
    'c' => 0,
    'language' => 0,
    'lang_name' => 0,
    'frontend_footer' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_591df4a3e07860_42966405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591df4a3e07860_42966405')) {function content_591df4a3e07860_42966405($_smarty_tpl) {?>

<?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1||!empty($_smarty_tpl->tpl_vars['theme_settings']->value['language_toggle'])){?>
    <aside class="currency-toggle">
            <?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1){?>
            <select id="currency">
                <?php $_smarty_tpl->tpl_vars['currency'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->currency(), null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['c_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['c_code']->value = $_smarty_tpl->tpl_vars['c']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['c_code']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['c_code']->value==$_smarty_tpl->tpl_vars['currency']->value){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
</option>
                <?php } ?>
            </select>
            <script>
                $("#currency").change(function () {
                    var url = location.href;
                    if (url.indexOf('?') == -1) {
                        url += '?';
                    } else {
                        url += '&';
                    }
                    location.href = url + 'currency=' + $(this).val();
                });
            </script>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['language_toggle'])){?>
            <select id="language">
                <?php  $_smarty_tpl->tpl_vars['lang_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang_name']->_loop = false;
 $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable;
 $_from = waLocale::getAll('name'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang_name']->key => $_smarty_tpl->tpl_vars['lang_name']->value){
$_smarty_tpl->tpl_vars['lang_name']->_loop = true;
 $_smarty_tpl->tpl_vars['language']->value = $_smarty_tpl->tpl_vars['lang_name']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['wa']->value->locale()==$_smarty_tpl->tpl_vars['language']->value){?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                <?php } ?>
            </select>
            <script>
                $("#language").change(function () {
                    var url = location.href;
                    if (url.indexOf('?') == -1) {
                        url += '?';
                    } else {
                        url += '&';
                    }
                    location.href = url + 'locale=' + $(this).val();
                });
            </script>
        <?php }?>
    </aside>
<?php }?>

<!-- plugin hook: 'frontend_footer' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_footer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>

<div<?php if (count($_smarty_tpl->tpl_vars['currencies']->value)==1){?> class="poweredby"<?php }?> role="complementary">
    <a href="http://www.shop-script.ru/">Создание интернет-магазина</a> — Shop-Script 7
</div><?php }} ?>