<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {
    /**
     * Extension key
     */
    $extensionKey = 'veridat_site_package';

    /**
     * Add default TypoScript (constants and setup)
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/veridat',
        'veridat.io Site Package'
    );

     /**
     * Add default TypoScript (constants and setup)
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/radmantis',
        'radmantis.com Site Package'
    );

});