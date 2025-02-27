<?php
return [
    '$GLOBALS[\'TYPO3_DB\']' => [
        'restFiles' => [
            'Breaking-80929-TYPO3_DBMovedToExtension.rst',
        ],
    ],
    '$GLOBALS[\'error\']' => [
        'restFiles' => [
            'Breaking-37180-RemovedExtDirectDebugAndGLOBALSerror.rst',
        ],
    ],
    '$GLOBALS[\'PARSETIME_START\']' => [
        'restFiles' => [
            'Breaking-82893-RemoveGlobalVariablePARSETIME_START.rst'
        ],
    ],
    '$GLOBALS[\'TYPO3_REQUEST\']' => [
        'restFiles' => [
            'Deprecation-83736-DeprecatedGlobalsTYPO3_REQUEST.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_LOADED_EXT\']' => [
        'restFiles' => [
            'Deprecation-86404-GLOBALSTYPO3_LOADED_EXT.rst',
            'Breaking-87193-DeprecatedFunctionalityRemoved.rst',
        ],
    ],
    '$GLOBALS[\'TBE_TEMPLATE\']' => [
        'restFiles' => [
            'Breaking-87567-GlobalVariableTBE_TEMPLATERemoved.rst',
        ],
    ],
    '$GLOBALS[\'TYPO3_MISC\']' => [
        'restFiles' => [
            'Breaking-88498-GlobalDataForTimeTrackerStatisticsRemoved.rst',
        ],
    ],
];
