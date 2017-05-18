<?php /* Smarty version Smarty-3.1.14, created on 2017-05-18 22:22:46
         compiled from "D:\OpenServer\domains\eshop\wa-apps\shop\templates\actions\tutorial\TutorialProducts.ru_RU.html" */ ?>
<?php /*%%SmartyHeaderCode:1546591df48647e901-82789322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e689548a36dda18a48efc0d0b135dd219147584' => 
    array (
      0 => 'D:\\OpenServer\\domains\\eshop\\wa-apps\\shop\\templates\\actions\\tutorial\\TutorialProducts.ru_RU.html',
      1 => 1452519801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1546591df48647e901-82789322',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_591df4864c10f4_72697532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591df4864c10f4_72697532')) {function content_591df4864c10f4_72697532($_smarty_tpl) {?><h1>Добавьте товары</h1>

<p>Для добавления товаров воспользуйтесь кнопкой <strong>Товары &rarr; <a href="?action=products#/product/new/edit"><i class="icon16 add" style="margin-top: 0.15em;"></i>Новый товар</a></strong>.</p>

<p><img src="http://www.shop-script.com/wa-data/public/site/shop-script-6-welcome/ss6-addproduct-ru.gif" class="s-screencast"></p>

<p><em>После добавления товара проверьте, как он отображается <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend');?>
">на витрине</a>. Оформите пробный заказ.</em></p>


<h2>Массовый импорт товаров</h2>
<p>Shop-Script поддерживает множество способов быстрой загрузки сразу большого количества товаров.</p>

<ul>
   <li><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=importexport#/images:product/">Массовая загрузка изображений</a>: перетащите несколько фотографий со своего компьютера прямо в Shop-Script и создайте на их основе сразу много товаров.</li>
   <li><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=importexport#/csv:product/">Импорт товаров из CSV-файла</a>: ваш CSV-файл (его можно создать с помощью программ Microsoft Excel, Open Office, iWork, и других подобных) будет автоматически считан, и из его содержимого будут в течение всего нескольких минут добавлены все нужные новые товары и категории.</li>
   <li><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=importexport#/migrate/">Переход на Shop-Script</a>: переносите данные из других систем для создания интернет-магазинов и иных источников в Shop-Script.</li>
</ul>
<?php }} ?>