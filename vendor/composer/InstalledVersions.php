<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.0+no-version-set',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'laravel/laravel',
  ),
  'versions' => 
  array (
    'cordoval/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'davedevelopment/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'dnoegel/php-xdg-base-dir' => 
    array (
      'pretty_version' => 'v0.1.1',
      'version' => '0.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => '1.4.4',
      'version' => '1.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '4bd5c1cdfcd00e9e2d8c484f79150f67e5d355d9',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.4.1',
      'version' => '1.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '10dcfce151b967d20fde1b34ae6640712c3891bc',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c268e882d4dbdd85e36e4ad69e02dc284f89d229',
    ),
    'dragonmantank/cron-expression' => 
    array (
      'pretty_version' => 'v2.3.1',
      'version' => '2.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '65b2d8ee1f10915efb3b55597da3404f096acba2',
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f88dcf4b14af14a98ad96b14b2b317969eab6715',
    ),
    'erusev/parsedown' => 
    array (
      'pretty_version' => '1.7.4',
      'version' => '1.7.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cb17b6477dfff935958ba01325f2e8a2bfa6dab3',
    ),
    'fideloper/proxy' => 
    array (
      'pretty_version' => '4.4.2',
      'version' => '4.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a751f2bc86dd8e6cfef12dc0cbdada82f5a18750',
    ),
    'filp/whoops' => 
    array (
      'pretty_version' => '2.14.6',
      'version' => '2.14.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f7948baaa0330277c729714910336383286305da',
    ),
    'fzaninotto/faker' => 
    array (
      'pretty_version' => 'v1.9.2',
      'version' => '1.9.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '848d8125239d7dbf8ab25cb7f054f1a630e68c2e',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '2.4.3',
      'version' => '2.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '67c26b443f348a51926030c83481b85718457d3d',
    ),
    'hamcrest/hamcrest-php' => 
    array (
      'pretty_version' => 'v2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
    ),
    'illuminate/auth' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/broadcasting' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/bus' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/cache' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/config' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/console' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/container' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/contracts' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/cookie' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/database' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/encryption' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/events' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/filesystem' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/hashing' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/http' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/log' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/mail' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/notifications' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/pagination' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/pipeline' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/queue' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/redis' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/routing' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/session' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/support' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/translation' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/validation' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'illuminate/view' => 
    array (
      'replaced' => 
      array (
        0 => 'v5.6.40',
      ),
    ),
    'intervention/image' => 
    array (
      'pretty_version' => '2.7.2',
      'version' => '2.7.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '04be355f8d6734c826045d02a1079ad658322dad',
    ),
    'jakub-onderka/php-console-color' => 
    array (
      'pretty_version' => 'v0.2',
      'version' => '0.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd5deaecff52a0d61ccb613bb3804088da0307191',
    ),
    'jakub-onderka/php-console-highlighter' => 
    array (
      'pretty_version' => 'v0.4',
      'version' => '0.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9f7a229a69d52506914b4bc61bfdb199d90c5547',
    ),
    'kodova/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'kylekatarnls/update-helper' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '429be50660ed8a196e0798e5939760f168ec8ce9',
    ),
    'laravel/framework' => 
    array (
      'pretty_version' => 'v5.6.40',
      'version' => '5.6.40.0',
      'aliases' => 
      array (
      ),
      'reference' => '5ceadf91f13be89a3338c3d4166a4676272a23bf',
    ),
    'laravel/laravel' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'laravel/tinker' => 
    array (
      'pretty_version' => 'v1.0.10',
      'version' => '1.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ad571aacbac1539c30d480908f9d0c9614eaf1a7',
    ),
    'league/flysystem' => 
    array (
      'pretty_version' => '1.1.10',
      'version' => '1.1.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '3239285c825c152bcc315fe0e87d6b55f5972ed1',
    ),
    'league/mime-type-detection' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
    ),
    'mockery/mockery' => 
    array (
      'pretty_version' => '1.3.6',
      'version' => '1.3.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dc206df4fa314a50bbb81cf72239a305c5bbd5c0',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '1.27.1',
      'version' => '1.27.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '904713c5929655dc9b97288b69cfeedad610c9a1',
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '14daed4296fae74d9e3201d2c4925d1acb7aa614',
    ),
    'nesbot/carbon' => 
    array (
      'pretty_version' => '1.26.6',
      'version' => '1.26.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6820f814496d71da7498d423427e6193d1f57c9',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.15.2',
      'version' => '4.15.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f59bbe44bf7d96f24f3e2b4ddc21cd52c1d2adbc',
    ),
    'nunomaduro/collision' => 
    array (
      'pretty_version' => 'v2.1.1',
      'version' => '2.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b5feb0c0d92978ec7169232ce5d70d6da6b29f63',
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v9.99.100',
      'version' => '9.99.100.0',
      'aliases' => 
      array (
      ),
      'reference' => '996434e5492cb4c3edcb9168db6fbb1359ef965a',
    ),
    'phar-io/manifest' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
    ),
    'phar-io/version' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '45a2ec53a73c70ce41d55cedef9063630abaf1b6',
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '5.3.0',
      'version' => '5.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '622548b623e81ca6d78b721c5e029f4ce664f170',
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '1.6.2',
      'version' => '1.6.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '48f445a408c131e38cab1c235aa6d2bb7a0bb20d',
    ),
    'phpspec/prophecy' => 
    array (
      'pretty_version' => 'v1.16.0',
      'version' => '1.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'be8cac52a0827776ff9ccda8c381ac5b71aeb359',
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '6.1.4',
      'version' => '6.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '807e6013b00af69b6c5d9ceb4282d0393dbb9d8d',
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '2.0.5',
      'version' => '2.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '42c5ba5220e6904cbfe8b1a1bda7c0cfdc8c12f5',
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '2.1.3',
      'version' => '2.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '2454ae1765516d20c4ffe103d85a58a9a3bd5662',
    ),
    'phpunit/php-token-stream' => 
    array (
      'pretty_version' => '3.1.3',
      'version' => '3.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9c1da83261628cb24b6a6df371b6e312b3954768',
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '7.5.20',
      'version' => '7.5.20.0',
      'aliases' => 
      array (
      ),
      'reference' => '9467db479d1b0487c99733bb1e7944d32deded2c',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '513e0666f7216c7459170d56df27dfcefe1689ea',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-factory' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
    ),
    'psr/http-factory-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0.0',
        1 => '1.0|2.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
    ),
    'psy/psysh' => 
    array (
      'pretty_version' => 'v0.9.12',
      'version' => '0.9.12.0',
      'aliases' => 
      array (
      ),
      'reference' => '90da7f37568aee36b116a030c5f99c915267edd4',
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'ramsey/uuid' => 
    array (
      'pretty_version' => '3.9.7',
      'version' => '3.9.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dc75aa439eb4c1b77f5379fd958b3dc0e6014178',
    ),
    'rhumsaa/uuid' => 
    array (
      'replaced' => 
      array (
        0 => '3.9.7',
      ),
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '1de8cd5c010cb153fcd68b8d0f64606f523f7619',
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '3.0.5',
      'version' => '3.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '1dc7ceb4a24aede938c7af2a9ed1de09609ca770',
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '14f72dd46eaf2f2293cbe79c93cc0bc43161a211',
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '4.2.4',
      'version' => '4.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd47bbbad83711771f167c72d4e3f25f7fcc1f8b0',
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '3.1.5',
      'version' => '3.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '73a9676f2833b9a7c36968f9d882589cd75511e6',
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '3.0.4',
      'version' => '3.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
    ),
    'sebastian/object-reflector' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '367dcba38d6e1977be014dc4b22f47a484dac7fb',
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '31d35ca87926450c44eae7e2611d45a7a65ea8b3',
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '99732be0ddb3361e16ad77b68ba41efc8e979019',
    ),
    'swiftmailer/swiftmailer' => 
    array (
      'pretty_version' => 'v6.3.0',
      'version' => '6.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8a5d5072dca8f48460fce2f4131fcc495eec654c',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v4.4.49',
      'version' => '4.4.49.0',
      'aliases' => 
      array (
      ),
      'reference' => '33fa45ffc81fdcc1ca368d4946da859c8cdb58d9',
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v5.4.11',
      'version' => '5.4.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c1681789f059ab756001052164726ae88512ae3d',
    ),
    'symfony/debug' => 
    array (
      'pretty_version' => 'v4.4.44',
      'version' => '4.4.44.0',
      'aliases' => 
      array (
      ),
      'reference' => '1a692492190773c5310bc7877cb590c04c2f05be',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v2.5.2',
      'version' => '2.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e8b495ea28c1d97b5e0c121748d6f9b53d075c66',
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v4.4.44',
      'version' => '4.4.44.0',
      'aliases' => 
      array (
      ),
      'reference' => 'be731658121ef2d8be88f3a1ec938148a9237291',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v4.4.44',
      'version' => '4.4.44.0',
      'aliases' => 
      array (
      ),
      'reference' => '1e866e9e5c1b22168e0ce5f0b467f19bba61266a',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v1.1.13',
      'version' => '1.1.13.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d5cd762abaa6b2a4169d3e77610193a7157129e',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.1',
      ),
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v4.4.44',
      'version' => '4.4.44.0',
      'aliases' => 
      array (
      ),
      'reference' => '66bd787edb5e42ff59d3523f623895af05043e4f',
    ),
    'symfony/http-client-contracts' => 
    array (
      'pretty_version' => 'v2.5.2',
      'version' => '2.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ba6a9f0e8f3edd190520ee3b9a958596b6ca2e70',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v4.4.49',
      'version' => '4.4.49.0',
      'aliases' => 
      array (
      ),
      'reference' => '191413c7b832c015bb38eae963f2e57498c3c173',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v4.4.49',
      'version' => '4.4.49.0',
      'aliases' => 
      array (
      ),
      'reference' => '4e36db8103062c62b3882b1bd297b02de6b021c4',
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v5.4.16',
      'version' => '5.4.16.0',
      'aliases' => 
      array (
      ),
      'reference' => '46eeedb08f0832b1b61a84c612d945fc85ee4734',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5bbc823adecdae860bb64756d639ecfec17b050a',
    ),
    'symfony/polyfill-iconv' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '927013f3aac555983a5059aada98e1907d842695',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '639084e360537a19f9ee352433b84ce831f3d2da',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '19bd1e4fcd5b91116f14d8533c57831ed00571b6',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '869329b1e9894268a8a61dabb69153029b7a8c97',
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9e8ecb5f92152187c4799efd3c96b78ccab18ff9',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v4.4.44',
      'version' => '4.4.44.0',
      'aliases' => 
      array (
      ),
      'reference' => '5cee9cdc4f7805e2699d9fd66991a0e6df8252a2',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v4.4.44',
      'version' => '4.4.44.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f7751fd8b60a07f3f349947a309b5bdfce22d6ae',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v2.5.2',
      'version' => '2.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v4.4.47',
      'version' => '4.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => '45036b1d53accc48fe9bab71ccd86d57eba0dd94',
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v2.5.2',
      'version' => '2.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '136b19dd05cdf0709db6537d058bcab6dd6e2dbe',
    ),
    'symfony/translation-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v4.4.47',
      'version' => '4.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => '1069c7a3fca74578022fab6f81643248d02f8e63',
    ),
    'theseer/tokenizer' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '34a41e998c2183e22995f158c581e7b5e755ab9e',
    ),
    'tijsverkoyen/css-to-inline-styles' => 
    array (
      'pretty_version' => '2.2.5',
      'version' => '2.2.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '4348a3a06651827a27d989ad1d13efec6bb49b19',
    ),
    'vlucas/phpdotenv' => 
    array (
      'pretty_version' => 'v2.6.9',
      'version' => '2.6.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '2e93cc98e2e8e869f8d9cfa61bb3a99ba4fc4141',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}


if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {

foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
