<?php
// wcf imports
require_once(WCF_DIR.'lib/page/MultipleLinkPage.class.php');

/**
 * Prints an xml sitemap.
 *
 * @author	Sebastian Oettl
 * @copyright	2009-2012 WCF Solutions <http://www.wcfsolutions.com/>
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package	com.wcfsolutions.wcf.xmlSitemap
 * @subpackage	page
 * @category	Community Framework
 */
abstract class AbstractXMLSitemapPage extends MultipleLinkPage {
	// system
	public $itemsPerPage = 100;

	/**
	 * list of sitemap items
	 *
	 * @var	array
	 */
	public $sitemapItems = array();

	/**
	 * @see Page::assignVariables()
	 */
	public function assignVariables() {
		parent::assignVariables();

		WCF::getTPL()->assign('sitemapItems', $this->sitemapItems);
	}

	/**
	 * @see Page::show()
	 */
	public function show() {
		parent::show();

		// send content
		WCF::getTPL()->display('xmlSitemap', false);
	}
}
?>