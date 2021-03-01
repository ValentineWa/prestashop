{*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2017 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="testimonial_outer">
{if isset($cms_testimonialinfos) && $cms_testimonialinfos}
{$cms_testimonialinfos.text nofilter}
{else}
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
{/if}
 
</div>
</div>
