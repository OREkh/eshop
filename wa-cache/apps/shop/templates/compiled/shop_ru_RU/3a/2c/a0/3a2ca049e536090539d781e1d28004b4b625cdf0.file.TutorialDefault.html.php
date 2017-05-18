<?php /* Smarty version Smarty-3.1.14, created on 2017-05-18 22:22:45
         compiled from "D:\OpenServer\domains\eshop\wa-apps\shop\templates\actions\tutorial\TutorialDefault.html" */ ?>
<?php /*%%SmartyHeaderCode:23391591df485357cc0-49054821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a2ca049e536090539d781e1d28004b4b625cdf0' => 
    array (
      0 => 'D:\\OpenServer\\domains\\eshop\\wa-apps\\shop\\templates\\actions\\tutorial\\TutorialDefault.html',
      1 => 1452519801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23391591df485357cc0-49054821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'actions' => 0,
    'a' => 0,
    'backend_tutorial' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_591df4853b6302_87747112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591df4853b6302_87747112')) {function content_591df4853b6302_87747112($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'D:\\OpenServer\\domains\\eshop\\wa-system\\vendors\\smarty3\\plugins\\function.counter.php';
?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/tutorial.js"></script>

<div class="s-tutorial">

    <div class="sidebar right15px">
        <div class="block s-nolevel2-sidebar"></div>
    </div>

    <div class="sidebar left300px">

        <div class="block s-nolevel2-sidebar s-inner-sidebar">

            <div class="block align-center">
                <h2>Добро пожаловать!</h2>
                <p class="hint">Вы практически закончили подготовку интернет-магазина к началу работы!</p>
            </div>

            <div class="block double-padded">
                <ul class="menu-v s-tutorial-checklist tutorial-actions" id="tutorial-actions">

                    <?php echo smarty_function_counter(array('start'=>0,'print'=>false),$_smarty_tpl);?>

                    <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?><li<?php if ($_smarty_tpl->tpl_vars['a']->value['complete']){?> class="complete"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['a']->value['href'];?>
"><?php if ($_smarty_tpl->tpl_vars['a']->value['complete']){?><span class="count"><i class="icon10 yes"></i></span><?php }?><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
. <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php } ?>

                    <li><a href="#/profit/">
                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
. Профит!
                    </a></li>
                </ul>

                <hr>
                <p class="hint align-center">
                    <a href="javascript:void(0)" class="finish-tutorial">Закрыть подсказки по настройке</a>
                </p>

                <!-- plugin hook: 'backend_tutorial.sidebar_block' -->
                
                <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = ifempty($_smarty_tpl->tpl_vars['backend_tutorial']->value,array()); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['sidebar_block']);?>
<?php } ?>

            </div>
        </div>

    </div>

    <div class="content left300px blank s-nolevel2-box right15px">
        <div id="s-content">
            Загрузка... <i class="icon16 loading"></i>
        </div>
        <div class="clear-both"></div>
    </div>

</div>

<script type="text/javascript">$(function() { "use strict";
    $.tutorial.init({
    });
});</script>
<?php }} ?>