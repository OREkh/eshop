<?php /* Smarty version Smarty-3.1.14, created on 2017-05-18 22:23:14
         compiled from "D:\OpenServer\domains\eshop\wa-apps\shop\themes\default\main.html" */ ?>
<?php /*%%SmartyHeaderCode:25156591df4a2cc14c5-39123652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '230b8b84c0805ffd4a13354cb5280a343eb431b3' => 
    array (
      0 => 'D:\\OpenServer\\domains\\eshop\\wa-apps\\shop\\themes\\default\\main.html',
      1 => 1461663989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25156591df4a2cc14c5-39123652',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frontend_header' => 0,
    '_' => 0,
    'action' => 0,
    'breadcrumbs' => 0,
    'wa' => 0,
    'wa_app_url' => 0,
    'breadcrumb' => 0,
    'content' => 0,
    'theme_settings' => 0,
    'in_comparison' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_591df4a2ce9868_95919834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591df4a2ce9868_95919834')) {function content_591df4a2ce9868_95919834($_smarty_tpl) {?><!-- plugin hook: 'frontend_header' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_header']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>

<div class="content" id="page-content" itemscope itemtype="http://schema.org/<?php if ($_smarty_tpl->tpl_vars['action']->value=='default'){?>Store<?php }else{ ?>WebPage<?php }?>">

    <!-- internal navigation breadcrumbs -->
    <?php if (!empty($_smarty_tpl->tpl_vars['breadcrumbs']->value)){?>
        <nav class="breadcrumbs" itemprop="breadcrumb">
            <?php if (!$_smarty_tpl->tpl_vars['wa']->value->globals('isMyAccount')){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('name');?>
</a>  <span class="rarr">&rarr;</span>
            <?php }else{ ?>
                
                <?php $_smarty_tpl->createLocalArrayVariable('breadcrumbs', null, 0);
$_smarty_tpl->tpl_vars['breadcrumbs']->value[0] = null;?>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars['breadcrumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['breadcrumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->key => $_smarty_tpl->tpl_vars['breadcrumb']->value){
$_smarty_tpl->tpl_vars['breadcrumb']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['breadcrumb']->value){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a> <span class="rarr">&rarr;</span>
                <?php }?>
            <?php } ?>
        </nav>
    <?php }?>

    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>


    <div class="clear-both"></div>

</div>


<div class="clear-both"></div>

<div id="dialog" class="dialog">
    <div class="dialog-background"></div>
    <div class="dialog-window">
        <!-- common part -->
        <div class="cart">

        </div>
        <!-- /common part -->

    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['compare_products']){?>
<aside id="compare-leash">
    <?php $_smarty_tpl->tpl_vars['in_comparison'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->inComparison(), null, 0);?>
    <a <?php if (!$_smarty_tpl->tpl_vars['in_comparison']->value){?>style="display:none;"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/compare',array('id'=>implode(',',$_smarty_tpl->tpl_vars['in_comparison']->value)));?>
">Сравнить выбранные товары (<strong><?php echo count($_smarty_tpl->tpl_vars['in_comparison']->value);?>
</strong>)</a>
    <?php if ($_smarty_tpl->tpl_vars['in_comparison']->value){?><style>.appfooter { padding-bottom: 60px; } </style><?php }?>
</aside>
<?php }?>
<?php }} ?>