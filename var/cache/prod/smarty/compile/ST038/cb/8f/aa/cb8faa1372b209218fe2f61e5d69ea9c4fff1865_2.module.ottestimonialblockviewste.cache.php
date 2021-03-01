<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-21 08:41:53
  from 'module:ottestimonialblockviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60091421119b45_79058377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb8faa1372b209218fe2f61e5d69ea9c4fff1865' => 
    array (
      0 => 'module:ottestimonialblockviewste',
      1 => 1611035176,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60091421119b45_79058377 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '28508019960091421114458_12721306';
?>

<div class="testimonial_outer">
<?php if (isset($_smarty_tpl->tpl_vars['cms_testimonialinfos']->value) && $_smarty_tpl->tpl_vars['cms_testimonialinfos']->value) {
echo $_smarty_tpl->tpl_vars['cms_testimonialinfos']->value['text'];?>

<?php } else { ?>
<div class="testimonial-inner">
<div class="testimonial-outer container">
<div class="row">
<h1 class="main-title title">What Our Clients Say</h1>
<div id="testimonial-slider" class="owl-carousel testimonial-carousel">
<div class="item">
<div class="testminial-data">

<div class="test_desc">
<div class="test_imag">
<div class="test_img_innar"><img class="img-testimonial" src="img/cms/testimonial_img1.jpg" alt="main-banner1" /></div>
</div>
<div class="testimonial-desc">
"Duis aliquam, magna ac fermentum are we finibus, orci viverra risus, into varius telluso tortor sed eros. 
Sedion pharetra ante sit amet suscipit ornare. Integer et auctor diam sit dolor."
</div>
<div class="testmonial-author1">Grem Anderson</div>
<div class="testmonial-author2">Web designer</div>
</div>
</div>
</div>
<div class="item">
<div class="testminial-data">
<div class="test_desc">
<div class="test_imag">
<div class="test_img_innar"><img class="img-testimonial" src="img/cms/testimonial_img2.jpg" alt="main-banner1" /></div>
</div>
<div class="testimonial-desc">
"Duis aliquam, magna ac fermentum are we finibus, orci viverra risus, into varius telluso tortor sed eros. 
Sedion pharetra ante sit amet suscipit ornare. Integer et auctor diam sit dolor."
</div>
<div class="testmonial-author1">Grem Anderson</div>
<div class="testmonial-author2">Web designer</div>
</div>
</div>
</div>
<div class="item">
<div class="testminial-data">

<div class="test_desc">
<div class="test_imag">
<div class="test_img_innar"><img class="img-testimonial" src="img/cms/testimonial_img3.jpg" alt="main-banner1" /></div>
</div>
<div class="testimonial-desc">
"Duis aliquam, magna ac fermentum are we finibus, orci viverra risus, into varius telluso tortor sed eros. 
Sedion pharetra ante sit amet suscipit ornare. Integer et auctor diam sit dolor."
</div>
<div class="testmonial-author1">Grem Anderson</div>
<div class="testmonial-author2">Web designer</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php }?>
 
</div>
</div>
<?php }
}
