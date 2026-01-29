<?php

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:at_chocolux/Configuration/RTE/Default.yaml';

if (empty($GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename']) || $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] == "New TYPO3 Project" || $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] == "New TYPO3 site") {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] = 'Chocolux';
}

if (empty($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['backendLogo'])) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['backendLogo'] = 'EXT:at_chocolux/Resources/Public/Icons/logo.svg';
}

if (empty($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginLogo'])) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginLogo'] = 'EXT:at_chocolux/Resources/Public/Icons/logo.svg';
}
