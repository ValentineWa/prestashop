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


<div class="footerbottomright-outer links">

	{if isset($cms_footerbottomrightinfos) && $cms_footerbottomrightinfos}
	{$cms_footerbottomrightinfos.text nofilter}
	{else}
	<div id="footerbottomright-text" class="wrapper  footer-cms col-md-3">
	<div class="title">
		 <h3 class="h3">My Account</h3>
		 <span class="pull-xs-right">
           <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
        </span>
	</div>
	<ul  class="footer-toggle">
	<li><a href="#">Your Orders</a></li>
	<li><a href="#">Your Wishlist</a></li>
	<li><a href="#">Payment Methods</a></li>
	<li><a href="#">Newsletter</a></li>
	<li><a href="#">Infomation</a></li>
	</ul>
	</div>
	{/if}


</div>