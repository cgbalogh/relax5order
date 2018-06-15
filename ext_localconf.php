<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'CGB.Relax5order',
            'Activity',
            [
                'Activity' => 'list, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Activity' => 'list, new, create, edit, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    activity {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('relax5order') . 'Resources/Public/Icons/user_plugin_activity.svg
                        title = LLL:EXT:relax5order/Resources/Private/Language/locallang_db.xlf:tx_relax5order_domain_model_activity
                        description = LLL:EXT:relax5order/Resources/Private/Language/locallang_db.xlf:tx_relax5order_domain_model_activity.description
                        tt_content_defValues {
                            CType = list
                            list_type = relax5order_activity
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
  'relax5-icon-order',
  \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
  ['source' => 'EXT:relax5order/Resources/Public/Images/relax-icon-order.png']
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    'mod {
        wizards.newContentElement.wizardItems.plugins {
            elements {
                activity >
            }
        }
        wizards.newContentElement.wizardItems.relax5 {
            elements {
                activity {
                    icon >
                    iconIdentifier = relax5-icon-order
                    title = LLL:EXT:relax5order/Resources/Private/Language/locallang_db.xlf:tx_relax5order_domain_model_activity.ce
                    description = LLL:EXT:relax5order/Resources/Private/Language/locallang_db.xlf:tx_relax5order_domain_model_activity.description.ce
                    tt_content_defValues {
                        CType = list
                        list_type = relax5order_activity
                    }
                }
            }
            show = *
        }
   }'
);