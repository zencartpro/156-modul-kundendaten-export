<?php
/**
 * export_customerdata.php
 *
 * @package export_customerdata
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: export_customerdata 2019-06-27 17:19:41Z webchills $
 */
define('BOX_TOOLS_EXPORT_CUSTOMERDATA', 'Export customer data');
define('EXPORT_CUSTOMERDATA_HEADING', 'Export customer data as csv - Version 1.4.0');
define('TEXT_EXPORT_CUSTOMERDATA_OVERVIEW', 'This tool generates a csv file with the current customer data.<br/>The following values are exported:<ul><li>Prename</li><li>Name</li><li>Email</li><li>Company</li><li>Street</li><li>Address 2</li><li>Post Code</li><li>City</li><li>Country</li><li>Phone</li></ul>Click the Download Button to generate and download the csv file:<br/>');
define('TEXT_EXPORT_CUSTOMERDATA_INFO', '<b>Note:</b><br/>If you are exceriencing strange behaviour with German Umlauts in Microsoft Excel, try Open Office instead and select as character set utf-8 when opening the file in OpenOffice.<br/>Free download of Open Office at: <br/><a href="http://www.openoffice.org" target="_blank">http://www.openoffice.org</a>');