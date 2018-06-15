<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'CGB.Relax5order',
            'Activity',
            'Relax5order '
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('relax5order', 'Configuration/TypoScript', 'relax5order');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_relax5order_domain_model_activity', 'EXT:relax5order/Resources/Private/Language/locallang_csh_tx_relax5order_domain_model_activity.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_relax5order_domain_model_activity');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_relax5order_domain_model_item', 'EXT:relax5order/Resources/Private/Language/locallang_csh_tx_relax5order_domain_model_item.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_relax5order_domain_model_item');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_relax5order_domain_model_package', 'EXT:relax5order/Resources/Private/Language/locallang_csh_tx_relax5order_domain_model_package.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_relax5order_domain_model_package');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_relax5order_domain_model_orderheader', 'EXT:relax5order/Resources/Private/Language/locallang_csh_tx_relax5order_domain_model_orderheader.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_relax5order_domain_model_orderheader');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_relax5order_domain_model_orderdetails', 'EXT:relax5order/Resources/Private/Language/locallang_csh_tx_relax5order_domain_model_orderdetails.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_relax5order_domain_model_orderdetails');

    }
);
