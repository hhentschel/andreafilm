<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

return [
    // Global settings
    '*' => [
        // Default Week Start Day (0 = Sunday, 1 = Monday...)
        'defaultWeekStartDay' => 1,

        // Whether generated URLs should omit "index.php"
        'omitScriptNameInUrls' => true,

        // Control Panel trigger word
        'cpTrigger' => 'admin',

        // Enable CSRF Protection (recommended)
        'enableCsrfProtection' => true,

        'limitAutoSlugsToAscii' => true,
        'convertFilenamesToAscii' => true,
        'cacheDuration' => '0',
        'allowUpdates' => true,

        //'phpMaxMemoryLimit' => '512M',

        //Make sure the image transforms are generated before pageload
        'generateTransformsBeforePageLoad' => true,

        // The secure key Craft will use for hashing and encrypting data
        'securityKey' => getenv('SECURITY_KEY'),

        // Whether to save the project config out to config/project.yaml
        // (see https://docs.craftcms.com/v3/project-config.html)
        'useProjectConfigFile' => true,
    ],

    // Dev environment settings
    'dev' => [

        'baseUrl' => 'http://andreafilm.local',
        // Dev Mode (see https://craftcms.com/guides/what-dev-mode-does)
        'devMode' => true,
        'aliases' => [
            '@root' => getenv('ROOT'),
            '@andreafilm_url' => 'http://andreafilm.local' // for publications pdf's
        ],
    ],

    // Staging environment settings
    'staging' => [
        // Prevent administrative changes from being made on staging
        'allowAdminChanges' => false,
    ],

    // Production environment settings
    'production' => [
        'baseUrl' => 'http://andreafilm.com',
        // Prevent administrative changes from being made on production
        'allowAdminChanges' => true,
        'devMode' => false,
        'aliases' => [
            '@root' => getenv('ROOT'),
            '@andreafilm_url' => 'http://andreafilm.com' // for publications pdf's
        ],
    ],

];
