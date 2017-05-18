<?php /* Smarty version Smarty-3.1.14, created on 2017-05-18 22:25:10
         compiled from "D:\OpenServer\domains\eshop\wa-apps\shop\themes\default\cart.html" */ ?>
<?php /*%%SmartyHeaderCode:19554591df516f401a8-30558492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd75bf02534bc98415b7a0cde82da819b5be976cc' => 
    array (
      0 => 'D:\\OpenServer\\domains\\eshop\\wa-apps\\shop\\themes\\default\\cart.html',
      1 => 1464881280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19554591df516f401a8-30558492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_theme_url' => 0,
    'cart' => 0,
    'item' => 0,
    'wa' => 0,
    's' => 0,
    'service_id' => 0,
    'variant_id' => 0,
    'v' => 0,
    'theme_settings' => 0,
    '_exclude_ids' => 0,
    'related' => 0,
    'discount' => 0,
    'coupon_code' => 0,
    'coupon_discount' => 0,
    'coupon_free_shipping' => 0,
    'affiliate_bonus' => 0,
    'affiliate_discount' => 0,
    'use_affiliate' => 0,
    'used_affiliate_bonus' => 0,
    'add_affiliate_bonus' => 0,
    'availabe_options' => 0,
    '_cnt' => 0,
    'option' => 0,
    'frontend_cart' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_591df517955648_05800552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591df517955648_05800552')) {function content_591df517955648_05800552($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
cart.js"></script>

<?php if (!$_smarty_tpl->tpl_vars['cart']->value['count']){?>
    
    <div class="cart your-cart-is-empty">
        <h1>Корзина</h1>
        <p>Ваша корзина пуста.</p>
    </div>

<?php }else{ ?>

    <form method="post">
        
        <h1>Корзина</h1>
    
        <!-- sixteen-column cart layout -->
        <div class="cart cart-summary-page">
            
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
?>
            
                <!-- cart item -->
                <div class="row" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">                  
                    <div class="col w1 item-thumb"><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['item']->value['product']);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['product']['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['item']->value['product'],'96x96',array('default'=>((string)$_smarty_tpl->tpl_vars['wa_theme_url']->value)."img/dummy48.png"));?>
</a>&nbsp;</div>
                    <div class="col w9 item-name">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['item']->value['product']);?>
" class="bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['product']['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['sku_name']&&$_smarty_tpl->tpl_vars['item']->value['sku_name']!=$_smarty_tpl->tpl_vars['item']->value['product']['name']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['sku_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
                    </div>
                    <div class="col w2 item-qty align-center nowrap"><span class="gray">&times;</span> <input type="text" name="quantity[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
" class="qty<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['error'])){?> error<?php }?>"></div>
                    <div class="col w1 item-remove"><a class="delete" href="#" title="Удалить из корзины"><i class="icon16 remove"></i></a></div>                        
                    <div class="col w3 align-center item-total nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['item']->value['full_price'],true);?>
</div>

                    <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['services'])){?>
                    <!-- services -->
                    <div class="clear-both">
                        <div class="col w1 item-thumb">&nbsp;</div>
                        <div class="col w15 services">
                            <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_smarty_tpl->tpl_vars['service_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['services']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['service_id']->value = $_smarty_tpl->tpl_vars['s']->key;
?>
                            <!-- one option -->
                            <div <?php if (!empty($_smarty_tpl->tpl_vars['s']->value['id'])){?>data-id="<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"<?php }?>>
                            <label>
                                <input <?php if (!empty($_smarty_tpl->tpl_vars['s']->value['id'])){?>checked<?php }?> type="checkbox" name="services[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
][]" value="<?php echo $_smarty_tpl->tpl_vars['service_id']->value;?>
"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['s']->value['price']&&!isset($_smarty_tpl->tpl_vars['s']->value['variants'])){?>(<span>+<?php echo shop_currency_html($_smarty_tpl->tpl_vars['s']->value['price'],$_smarty_tpl->tpl_vars['s']->value['currency']);?>
</span>)<?php }?>
                            </label>
                            <?php if (isset($_smarty_tpl->tpl_vars['s']->value['variants'])){?>
                            <select name="service_variant[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
][<?php echo $_smarty_tpl->tpl_vars['service_id']->value;?>
]" <?php if (empty($_smarty_tpl->tpl_vars['s']->value['id'])){?>disabled<?php }?>>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['variant_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['s']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['variant_id']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                <option <?php if ($_smarty_tpl->tpl_vars['s']->value['variant_id']==$_smarty_tpl->tpl_vars['variant_id']->value){?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['variant_id']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 (+<?php echo shop_currency($_smarty_tpl->tpl_vars['v']->value['price'],$_smarty_tpl->tpl_vars['s']->value['currency']);?>
)</option>
                                <?php } ?>
                            </select>
                            <?php }else{ ?>
                            <input type="hidden" name="service_variant[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
][<?php echo $_smarty_tpl->tpl_vars['service_id']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['s']->value['variant_id'];?>
">
                            <?php }?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['cart_crossselling']=='many'){?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->index<3){?>
                            <?php $_smarty_tpl->tpl_vars['_exclude_ids'] = new Smarty_variable(array(), null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
?><?php $_smarty_tpl->createLocalArrayVariable('_exclude_ids', null, 0);
$_smarty_tpl->tpl_vars['_exclude_ids']->value[] = $_smarty_tpl->tpl_vars['item']->value['product']['id'];?><?php } ?>
                            <?php $_smarty_tpl->tpl_vars['related'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->crossSelling($_smarty_tpl->tpl_vars['item']->value['product']['id'],5,true,$_smarty_tpl->tpl_vars['_exclude_ids']->value), null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['related']->value){?>
                                <!-- cross-selling -->
                                <div class="clear-both" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                    <div class="col w1 item-thumb">&nbsp;</div>
                                    <div class="col w15 small related">
                                        <h4><strong>Рекомендуем!</strong> <?php echo sprintf('Покупатели, которые приобрели %s, также купили',htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['product']['name'], ENT_QUOTES, 'UTF-8', true));?>
:</h4>
                                        <?php echo $_smarty_tpl->getSubTemplate ("list-thumbs-mini.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['related']->value,'without_form'=>true), 0);?>

                                    </div>
                                </div>
                            <?php }?>
                        <?php }?>
                    <?php }?>
                    
                </div>
                <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['error'])){?><script>alert(<?php echo json_encode($_smarty_tpl->tpl_vars['item']->value['error']);?>
);</script><?php }?>
            <?php } ?>
            
            <!-- discount -->
            <div class="row no-border" <?php if (!shopDiscounts::isEnabled('coupons')&&!$_smarty_tpl->tpl_vars['discount']->value){?>style="display:none"<?php }?> id="discount-row">
                <div class="col w10 cart-coupon no-border">

                    <?php if (shopDiscounts::isEnabled('coupons')){?>
                        <div <?php if (!$_smarty_tpl->tpl_vars['coupon_code']->value){?>style="display: none;"<?php }?> id="apply-coupon-code">
                            Код купона:
                            <input type="text" name="coupon_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['coupon_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"> <input type="submit"  value="Применить" class="gray small">
                            <?php if ($_smarty_tpl->tpl_vars['coupon_code']->value&&empty($_smarty_tpl->tpl_vars['coupon_discount']->value)&&empty($_smarty_tpl->tpl_vars['coupon_free_shipping']->value)){?>
                                <div class="errormsg">Неверный код купона</div>
                            <?php }?>
                        </div>
                    <?php }?>
                    
                </div>
                <div class="col w2 align-center">Скидка</div>
                <div class="col w3 align-center cart-discount nowrap">&minus; <?php echo shop_currency_html($_smarty_tpl->tpl_vars['discount']->value,true);?>
</div>
                <div class="col w1"></div>
            </div>

            <?php if (shopAffiliate::isEnabled()&&$_smarty_tpl->tpl_vars['affiliate_bonus']->value>0){?>
            <!-- affiliate bonus -->
            <div class="row no-border">
                <div class="col w12 no-border">
                    <?php ob_start();?><?php echo shop_currency_html($_smarty_tpl->tpl_vars['affiliate_discount']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo sprintf('Вы можете использовать свой партнерский бонус в %s баллов для получения дополнительной скидки в размере %s',$_smarty_tpl->tpl_vars['affiliate_bonus']->value,"<span class=\"affiliate-discount-available\">".$_tmp1."</span>");?>

                    <?php if ($_smarty_tpl->tpl_vars['use_affiliate']->value){?>
                    <a id="cancel-affiliate" href="#">Не использовать накопленные бонусы</a>
                    <?php }else{ ?>
                    <input type="submit" name="use_affiliate" class="small gray" value="Использовать бонусные баллы">
                    <?php }?>
                </div>
                <div class="col w3 align-center affiliate-discount"<?php if ($_smarty_tpl->tpl_vars['use_affiliate']->value){?> data-use="1"<?php }?>>&minus; <?php if ($_smarty_tpl->tpl_vars['use_affiliate']->value){?><?php echo shop_currency_html(shopAffiliate::convertBonus($_smarty_tpl->tpl_vars['used_affiliate_bonus']->value));?>
<?php }else{ ?>0<?php }?></div>
                <div class="col w1">&nbsp;</div>
            </div>
            <?php }?>
            
            <!-- TOTAL -->
            <div class="row large no-border">
                <div class="col w12 no-border">
                    Итого
                    <?php if (shopDiscounts::isEnabled('coupons')&&!$_smarty_tpl->tpl_vars['coupon_code']->value){?><a href="#" class="small inline-link not-visited" id="use-coupon"><b><i>У меня есть купон</i></b></a><?php }?>
                </div>
                <div class="col w3 cart-total align-center total bold nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['cart']->value['total'],true);?>
</div>
                <div class="col w1">&nbsp;</div>
            </div>
            
            <?php if (shopAffiliate::isEnabled()&&!empty($_smarty_tpl->tpl_vars['add_affiliate_bonus']->value)){?>
            <div class="row no-border">
                <div class="col w16 no-border">
                    <p class="affiliate"><i class="icon16 like"></i> <?php echo sprintf("Этот заказ добавит <strong>+%s бонусных баллов</strong>, которые вы затем сможете использовать для получения дополнительных скидок.",$_smarty_tpl->tpl_vars['add_affiliate_bonus']->value);?>
</p>
                </div>
            </div>
            <?php }?>
            
            <!-- CHECKOUT -->
            <div class="row no-border">
                <div class="col w10 no-border featured-shipping-and-payment">
                    
                    <?php $_smarty_tpl->tpl_vars['availabe_options'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->payment(), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['_cnt'] = new Smarty_variable(0, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['availabe_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['_cnt']->value==8){?><?php break 1?><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['option']->value['logo']){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['option']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
">
                            <?php $_smarty_tpl->tpl_vars['_cnt'] = new Smarty_variable($_smarty_tpl->tpl_vars['_cnt']->value+1, null, 0);?>
                        <?php }?>
                    <?php }
if (!$_smarty_tpl->tpl_vars['option']->_loop) {
?>
                        &nbsp;
                    <?php } ?>
                </div>
                <div class="col w6 align-center bold cart-checkout">
                    <input name="checkout" type="submit" value="Оформить заказ &rarr;" class="button large">
                </div>
            </div>
            
            <?php $_smarty_tpl->tpl_vars['related'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->crossSelling($_smarty_tpl->tpl_vars['cart']->value['items'],'product_id'), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['cart_crossselling']=='common'&&$_smarty_tpl->tpl_vars['related']->value){?>
                <div class="row no-border">
                    <div class="col w16 related">

                        <h4><strong>Рекомендуем!</strong> <?php echo sprintf('Покупатели, которые приобрели %s, также купили',htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['product']['name'], ENT_QUOTES, 'UTF-8', true));?>
:</h4>
                        <?php echo $_smarty_tpl->getSubTemplate ("list-thumbs-mini.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['related']->value,'without_form'=>true), 0);?>

                        <div class="clear-both"></div>
                    </div>
                </div>
            <?php }?>
            
        </div>

        <!-- plugin hook: 'frontend_cart' -->
        
        <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_cart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>                    

    </form>

<?php }?><?php }} ?>