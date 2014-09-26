<?php
/**
 * This file is part of OXID eShop Community Edition.
 *
 * OXID eShop Community Edition is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eShop Community Edition is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2014
 * @version   OXID eShop CE
 */

// Do NOT edit this file, create test_config.local.php instead and overwrite these configs.

// eShop base url (if null, tries to get it from config.inc.php file)
$sShopUrl = null; //'http://eshop_url/';
// eShop directory
$sShopPath = realpath('../source/') . '/';
// For PE and EE editions shop serial has to be specified for shop installer to work.
$sShopSerial = '';

// Run tests with varnish on
$blVarnish = false;
// Whether to run subshop tests. Currently only used when running selenium tests.
$blIsSubShop = false;

// Whether to copy services to shop. If services are already in shop directory, this can be set to false.
$blCopyServicesToShop = true;
// Whether to prepare shop database for testing. Shop config.ing.php file must be correct.
$blInstallShop = false;

// Whether to add tests data to shop. Can be used when $blInstallShop is set to false and test data is already added.
$blAddTestData = true;
// Whether to restore shop data after running all tests. If this is set to false, shop will be left with tests data added on it.
$blRestoreShopAfterTestSuite = false;
// Whether to restore shop data after test. If this is set to false, shop will be left
// at a state, at which test was completed (either failed or passed).
$blRestoreShopAfterTest = true;

// Selenium server IP address
$sSeleniumServerIp = "127.0.0.1";
// Folder where to save selenium screen shots. If not specified, screenshots will not be taken.
$sSeleniumScreenShotsPath = null; //$sShopPath . '/selenium_screenshots/';
// Url, where selenium screen shots should be available.
$sSeleniumScreenShotsUrl = null; //$sShopUrl . '/selenium_screenshots/';

// Browser name which will be used for testing.
// Possible values: *iexplore, *iehta, *firefox, *chrome, *piiexplore, *pifirefox, *safari, *opera
// make sure that path to browser executable is known for the system
$sBrowserName = 'firefox';

// Currently exists dbRestore and dbRestore_largeDb. dbRestore_largeDb tends to be faster, but it is not able to work with
// external databases - this is why dbRestore is currently a default one.
$sDataBaseRestore = "dbRestore";
