<?php
// wcf imports
require_once(WCF_DIR.'lib/page/AbstractPage.class.php');

/**
 * Prints an xml overview sitemap.
 *
 * @author	Sebastian Oettl
 * @copyright	2009-2012 WCF Solutions <http://www.wcfsolutions.com/>
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package	com.wcfsolutions.wcf.xmlSitemap
 * @subpackage	page
 * @category	Community Framework
 */
abstract class AbstractXMLSitemapOverviewPage extends AbstractPage {
	/**
	 * list of sitemaps
	 *
	 * @var	array
	 */
	public $sitemaps = array();

	/**
	 * @see Page::assignVariables()
	 */
	public function assignVariables() {
		parent::assignVariables();

		WCF::getTPL()->assign('sitemaps', $this->sitemaps);
	}

	/**
	 * @see Page::show()
	 */
	public function show() {
		parent::show();

		// send header
		header('Content-type: text/xml');

		// send content
		WCF::getTPL()->display('xmlSitemapOverview', false);
	}
}
?>