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


<div id="header-right-text">
 <div class="header-right">
	{if isset($cms_headerrightinfos) && $cms_headerrightinfos}
	{$cms_headerrightinfos.text nofilter}
	{else}
		<div class="header-call">
			<ul class="header-link-inner">
				<li class="phone-icon">
				<a class="call-dial" href="#">+ 91 0123 456 789</a>
				</li>
			</ul>
		</div>
	{/if}
 </div>
</div>
