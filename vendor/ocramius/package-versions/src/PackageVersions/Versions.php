<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = 'drupal-composer/drupal-project';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'alchemy/zippy' => '0.4.9@59fbeefb9a249122867ef25e53addfcce31850d7',
  'asm89/stack-cors' => '1.3.0@b9c31def6a83f84b4d4a40d35996d375755f0e08',
  'behat/mink' => 'v1.8.1@07c6a9fe3fa98c2de074b25d9ed26c22904e3887',
  'behat/mink-browserkit-driver' => 'v1.3.4@e3b90840022ebcd544c7b394a3c9597ae242cbee',
  'behat/mink-goutte-driver' => 'v1.2.1@8b9ad6d2d95bc70b840d15323365f52fcdaea6ca',
  'behat/mink-selenium2-driver' => 'v1.4.0@312a967dd527f28980cce40850339cd5316da092',
  'chi-teck/drupal-code-generator' => '1.32.0@0e045f7a7e747af3d8f603156bf4d73be5768246',
  'composer/ca-bundle' => '1.2.7@95c63ab2117a72f48f5a55da9740a3273d45b7fd',
  'composer/composer' => '1.10.7@956608ea4f7de9e58c53dfb019d85ae62b193c39',
  'composer/installers' => 'v1.9.0@b93bcf0fa1fccb0b7d176b0967d969691cd74cca',
  'composer/semver' => '1.5.1@c6bea70230ef4dd483e6bbcab6005f682ed3a8de',
  'composer/spdx-licenses' => '1.5.3@0c3e51e1880ca149682332770e25977c70cf9dae',
  'composer/xdebug-handler' => '1.4.2@fa2aaf99e2087f013a14f7432c1cd2dd7d8f1f51',
  'consolidation/annotated-command' => '2.12.0@512a2e54c98f3af377589de76c43b24652bcb789',
  'consolidation/config' => '1.2.1@cac1279bae7efb5c7fb2ca4c3ba4b8eb741a96c1',
  'consolidation/filter-via-dot-access-data' => '1.0.0@a53e96c6b9f7f042f5e085bf911f3493cea823c6',
  'consolidation/log' => '1.1.1@b2e887325ee90abc96b0a8b7b474cd9e7c896e3a',
  'consolidation/output-formatters' => '3.5.0@99ec998ffb697e0eada5aacf81feebfb13023605',
  'consolidation/robo' => '1.4.12@eb45606f498b3426b9a98b7c85e300666a968e51',
  'consolidation/self-update' => '1.2.0@dba6b2c0708f20fa3ba8008a2353b637578849b4',
  'consolidation/site-alias' => '3.0.1@fd40a03f80f8fd4684b10bef8c8c4ec5a9a9bf26',
  'consolidation/site-process' => '2.1.0@f3211fa4c60671c6f068184221f06f932556e443',
  'container-interop/container-interop' => '1.2.0@79cbf1341c22ec75643d841642dd5d6acd83bdb8',
  'cweagans/composer-patches' => '1.6.7@2e6f72a2ad8d59cd7e2b729f218bf42adb14f590',
  'dflydev/dot-access-configuration' => 'v1.0.3@2e6eb0c8b8830b26bb23defcfc38d4276508fc49',
  'dflydev/dot-access-data' => 'v1.1.0@3fbd874921ab2c041e899d044585a2ab9795df8a',
  'dflydev/placeholder-resolver' => 'v1.0.2@c498d0cae91b1bb36cc7d60906dab8e62bb7c356',
  'dnoegel/php-xdg-base-dir' => 'v0.1.1@8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
  'doctrine/annotations' => '1.10.3@5db60a4969eba0e0c197a19c077780aadbc43c5d',
  'doctrine/cache' => '1.10.1@35a4a70cd94e09e2259dfae7488afc6b474ecbd3',
  'doctrine/collections' => '1.6.5@fc0206348e17e530d09463fef07ba8968406cd6d',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/persistence' => '1.3.7@0af483f91bada1c9ded6c2cfd26ab7d5ab2094e0',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'drupal-composer/drupal-scaffold' => '2.6.1@13c1ffc7dd4925cb03707759128b85c0cd6276f8',
  'drupal/admin_toolbar' => '2.2.0@8.x-2.2',
  'drupal/advagg' => '4.1.0@8.x-4.1',
  'drupal/backup_migrate' => '4.1.0@8.x-4.1',
  'drupal/block_class' => '1.2.0@8.x-1.2',
  'drupal/blogapi' => '1.0.0-beta1@8.x-1.0-beta1',
  'drupal/bootstrap_barrio' => '4.28.0@8.x-4.28',
  'drupal/bootstrap_layouts' => '5.2.0@8.x-5.2',
  'drupal/bootstrap_library' => '1.13.0@8.x-1.13',
  'drupal/bootstrap_paragraphs' => '2.0.0-beta6@8.x-2.0-beta6',
  'drupal/chosen' => '2.9.0@8.x-2.9',
  'drupal/chosen_lib' => '2.9.0@',
  'drupal/coder' => '8.3.9@8.3.9',
  'drupal/console' => '1.9.4@04522b687b2149dc1f808599e716421a20d50a5b',
  'drupal/console-core' => '1.9.4@cc6f50c6ac8199140224347c862df75fd2d2f5ed',
  'drupal/console-en' => '1.9.4@30813a832fdb1244e84cbcc012cd103d5e9d673d',
  'drupal/console-extend-plugin' => '0.9.3@ad8e52df34b2e78bdacfffecc9fe8edf41843342',
  'drupal/core' => '8.9.0@f90882ab0723becda2333e4d33e1a6ab27cb8f0c',
  'drupal/core-dev' => '8.9.0@36370b3f42911c09ffb35f08fc72853d20e6efd7',
  'drupal/ctools' => '3.4.0@8.x-3.4',
  'drupal/devel' => '3.0.0-beta1@8.x-3.0-beta1',
  'drupal/domain' => '1.0.0-alpha16@8.x-1.0-alpha16',
  'drupal/ds' => '3.7.0@8.x-3.7',
  'drupal/entity_browser' => '2.5.0@8.x-2.5',
  'drupal/entity_reference_revisions' => '1.8.0@8.x-1.8',
  'drupal/field_formatter_class' => '1.3.0@8.x-1.3',
  'drupal/field_group' => '3.1.0@8.x-3.1',
  'drupal/geshifilter' => '2.0.0-beta1@8.x-2.0-beta1',
  'drupal/honeypot' => '2.0.0@2.0.0',
  'drupal/libraries' => '3.0.0-alpha1@8.x-3.0-alpha1',
  'drupal/link_attributes' => '1.10.0@8.x-1.10',
  'drupal/login_security' => '1.5.0@8.x-1.5',
  'drupal/paragraphs' => '1.12.0@8.x-1.12',
  'drupal/paragraphs_edit' => '2.0.0-alpha6@8.x-2.0-alpha6',
  'drupal/pathauto' => '1.8.0@8.x-1.8',
  'drupal/redirect' => '1.6.0@8.x-1.6',
  'drupal/seckit' => '2.0.0-rc1@2.0.0-rc1',
  'drupal/token' => '1.7.0@8.x-1.7',
  'drupal/views_bootstrap' => '4.3.0@8.x-4.3',
  'drupal/viewsreference' => '2.0.0-alpha7@8.x-2.0-alpha7',
  'drupal/xmlrpc' => '1.0.0-beta1@8.x-1.0-beta1',
  'drush/drush' => '9.7.2@ab5e345a72c9187a7d770486a09691f6526826aa',
  'easyrdf/easyrdf' => '0.9.1@acd09dfe0555fbcfa254291e433c45fdd4652566',
  'egulias/email-validator' => '2.1.17@ade6887fd9bd74177769645ab5c474824f8a418a',
  'fabpot/goutte' => 'v3.2.3@3f0eaf0a40181359470651f1565b3e07e3dd31b8',
  'geshi/geshi' => 'v1.0.9.1@fd22ab78481bf90337862b590e6f7517863926b8',
  'grasmash/expander' => '1.0.0@95d6037344a4be1dd5f8e0b0b2571a28c397578f',
  'grasmash/yaml-expander' => '1.4.0@3f0f6001ae707a24f4d9733958d77d92bf9693b1',
  'guzzlehttp/guzzle' => '6.5.4@a4a1b6930528a8f7ee03518e6442ec7a44155d9d',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'harvesthq/chosen' => 'v1.8.7@ad86732b668627c131e61ee8f0e6e9ed52e4db8d',
  'instaclick/php-webdriver' => '1.4.7@b5f330e900e9b3edfc18024a5ec8c07136075712',
  'jcalderonzumba/gastonjs' => 'v1.2.0@575a9c18d8b87990c37252e8d9707b29f0a313f3',
  'jcalderonzumba/mink-phantomjs-driver' => 'v0.3.3@008f43670e94acd39273d15add1e7348eb23848d',
  'justinrainbow/json-schema' => '5.2.10@2ba9c8c862ecd5510ed16c6340aa9f6eadb4f31b',
  'laminas/laminas-diactoros' => '1.8.7p2@6991c1af7c8d2c8efee81b22ba97024781824aaa',
  'laminas/laminas-escaper' => '2.6.1@25f2a053eadfa92ddacb609dcbbc39362610da70',
  'laminas/laminas-feed' => '2.12.2@8a193ac96ebcb3e16b6ee754ac2a889eefacb654',
  'laminas/laminas-stdlib' => '3.2.1@2b18347625a2f06a1a485acfbc870f699dbe51c6',
  'laminas/laminas-zendframework-bridge' => '1.0.4@fcd87520e4943d968557803919523772475e8ea3',
  'league/container' => '2.4.1@43f35abd03a12977a60ffd7095efd6a7808488c0',
  'masterminds/html5' => '2.7.0@104443ad663d15981225f99532ba73c2f1d6b6f2',
  'mikey179/vfsstream' => 'v1.6.8@231c73783ebb7dd9ec77916c10037eff5a2b6efe',
  'myclabs/deep-copy' => '1.9.5@b2c28789e80a97badd14145fda39b545d83ca3ef',
  'nikic/php-parser' => 'v4.5.0@53c2753d756f5adb586dca79c2ec0e2654dd9463',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'pear/archive_tar' => '1.4.9@c5b00053770e1d72128252c62c2c1a12c26639f0',
  'pear/console_getopt' => 'v1.4.3@a41f8d3e668987609178c7c4a9fe48fecac53fa0',
  'pear/pear-core-minimal' => 'v1.10.10@625a3c429d9b2c1546438679074cac1b089116a7',
  'pear/pear_exception' => 'v1.0.1@dbb42a5a0e45f3adcf99babfb2a1ba77b8ac36a7',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'phpdocumentor/reflection-common' => '2.1.0@6568f4687e5b41b054365f9ae03fcb1ed5f2069b',
  'phpdocumentor/reflection-docblock' => '5.1.0@cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
  'phpdocumentor/type-resolver' => '1.1.0@7462d5f123dfc080dfdf26897032a6513644fc95',
  'phpspec/prophecy' => 'v1.10.3@451c3cd1418cf640de218914901e51b064abb093',
  'phpstan/phpstan' => '0.12.28@76c0c4ec90b1eed66fa4855b8b4b53fa9054353f',
  'phpstan/phpstan-strict-rules' => '0.12.2@a670a59aff7cf96f75d21b974860ada10e25b2ee',
  'phpunit/php-code-coverage' => '6.1.4@807e6013b00af69b6c5d9ceb4282d0393dbb9d8d',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.1.1@995192df77f63a59e47f025390d2d1fdf8f425ff',
  'phpunit/phpunit' => '7.5.20@9467db479d1b0487c99733bb1e7944d32deded2c',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psy/psysh' => 'v0.10.4@a8aec1b2981ab66882a01cce36a49b6317dc3560',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
  'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
  'sebastian/environment' => '4.2.3@464c90d7bdf5ad4e8a6aea15c091fec0603d4368',
  'sebastian/exporter' => '3.1.2@68609e1261d215ea5b21b7987539cbfbe156ec3e',
  'sebastian/global-state' => '2.0.0@e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
  'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5',
  'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be',
  'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
  'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'seld/jsonlint' => '1.8.0@ff2aa5420bfbc296cf6a0bc785fa5b35736de7c1',
  'seld/phar-utils' => '1.1.0@8800503d56b9867d43d9c303b9cbcc26016e82f0',
  'stack/builder' => 'v1.0.6@a4faaa6f532c6086bc66c29e1bc6c29593e1ca7c',
  'stecman/symfony-console-completion' => '0.11.0@a9502dab59405e275a9f264536c4e1cb61fc3518',
  'symfony-cmf/routing' => '1.4.1@fb1e7f85ff8c6866238b7e73a490a0a0243ae8ac',
  'symfony/browser-kit' => 'v3.4.41@1467e0c7cf0c5c2c08dc9b45ca0300ac3cd3a824',
  'symfony/class-loader' => 'v3.4.41@e4636a4f23f157278a19e5db160c63de0da297d8',
  'symfony/config' => 'v3.4.41@cd61db31cbd19cbe4ba9f6968f13c9076e1372ab',
  'symfony/console' => 'v3.4.41@bfe29ead7e7b1cc9ce74c6a40d06ad1f96fced13',
  'symfony/css-selector' => 'v3.4.41@9ccf6e78077a3fc1596e6c7b5958008965a11518',
  'symfony/debug' => 'v3.4.41@518c6a00d0872da30bd06aee3ea59a0a5cf54d6d',
  'symfony/dependency-injection' => 'v3.4.41@e39380b7104b0ec538a075ae919f00c7e5267bac',
  'symfony/dom-crawler' => 'v3.4.41@c3086a58a66b2a519c0b7ac80539a3727609ea9c',
  'symfony/event-dispatcher' => 'v3.4.41@14d978f8e8555f2de719c00eb65376be7d2e9081',
  'symfony/filesystem' => 'v3.4.41@0f625d0cb1e59c8c4ba61abb170125175218ff10',
  'symfony/finder' => 'v3.4.41@5ec813ccafa8164ef21757e8c725d3a57da59200',
  'symfony/http-foundation' => 'v3.4.41@fbd216d2304b1a3fe38d6392b04729c8dd356359',
  'symfony/http-kernel' => 'v3.4.41@e4e4ed6c008c983645b4eee6b67d8f258cde54df',
  'symfony/lock' => 'v3.4.41@c5374725a61b25cd24ec1615b0707a2aa0cefe5a',
  'symfony/phpunit-bridge' => 'v3.4.41@f926812c6b3d456dfbd13c706293f49e9a10bc2a',
  'symfony/polyfill-ctype' => 'v1.17.0@e94c8b1bbe2bc77507a1056cdb06451c75b427f9',
  'symfony/polyfill-iconv' => 'v1.17.0@c4de7601eefbf25f9d47190abe07f79fe0a27424',
  'symfony/polyfill-intl-idn' => 'v1.17.0@3bff59ea7047e925be6b7f2059d60af31bb46d6a',
  'symfony/polyfill-mbstring' => 'v1.17.0@fa79b11539418b02fc5e1897267673ba2c19419c',
  'symfony/polyfill-php56' => 'v1.17.0@e3c8c138280cdfe4b81488441555583aa1984e23',
  'symfony/polyfill-php70' => 'v1.17.0@82225c2d7d23d7e70515496d249c0152679b468e',
  'symfony/polyfill-php72' => 'v1.17.0@f048e612a3905f34931127360bdd2def19a5e582',
  'symfony/polyfill-php80' => 'v1.17.0@5e30b2799bc1ad68f7feb62b60a73743589438dd',
  'symfony/polyfill-util' => 'v1.17.0@4afb4110fc037752cf0ce9869f9ab8162c4e20d7',
  'symfony/process' => 'v3.4.41@8a895f0c92a7c4b10db95139bcff71bdf66d4d21',
  'symfony/psr-http-message-bridge' => 'v1.2.0@9ab9d71f97d5c7d35a121a7fb69f74fee95cd0ad',
  'symfony/routing' => 'v3.4.41@e0d43b6f9417ad59ecaa8e2f799b79eef417387f',
  'symfony/serializer' => 'v3.4.41@0db90db012b1b0a04fbb2d64ae9160871cad9d4f',
  'symfony/translation' => 'v3.4.41@b0cd62ef0ff7ec31b67d78d7fc818e2bda4e844f',
  'symfony/validator' => 'v3.4.41@5fb88120a11a75e17b602103a893dd8b27804529',
  'symfony/var-dumper' => 'v4.4.9@56b3aa5eab0ac6720dcd559fd1d590ce301594ac',
  'symfony/yaml' => 'v3.4.41@7233ac2bfdde24d672f5305f2b3f6b5d741ef8eb',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'twbs/bootstrap' => 'v4.5.0@7a6da5e3e7ad7c749dde806546a35d4d4259d965',
  'twig/twig' => 'v1.42.5@87b2ea9d8f6fd014d0621ca089bb1b3769ea3f8e',
  'typo3/phar-stream-wrapper' => 'v3.1.4@e0c1b495cfac064f4f5c4bcb6bf67bb7f345ed04',
  'webflo/drupal-finder' => '1.2.0@123e248e14ee8dd3fbe89fb5a733a6cf91f5820e',
  'webmozart/assert' => '1.8.0@ab2cb0b3b559010b75981b1bdce728da3ee90ad6',
  'webmozart/path-util' => '2.3.0@d939f7edc24c9a1bb9c0dee5cb05d8e859490725',
  'amphp/amp' => 'v2.4.4@1e58d53e4af390efc7813e36cd215bd82cba4b06',
  'amphp/byte-stream' => 'v1.7.3@b867505edb79dda8f253ca3c3a2bbadae4b16592',
  'edgedesign/phpqa' => 'v1.23.3@a1ecc21a181f0ba6fd830afadb336e55e4f67e9f',
  'felixfbecker/advanced-json-rpc' => 'v3.1.1@0ed363f8de17d284d479ec813c9ad3f6834b5c40',
  'felixfbecker/language-server-protocol' => 'v1.4.0@378801f6139bb74ac215d81cca1272af61df9a9f',
  'friendsofphp/php-cs-fixer' => 'v2.16.3@83baf823a33a1cbd5416c8626935cf3f843c10b0',
  'league/climate' => '3.5.2@6b53a28a58ad9f5f63042e291eb870cf0d02a9c9',
  'macfja/phpqa-extensions' => '0.1.0@c98e5079c3091209b2d8c568757dc0217897839d',
  'mglaman/phpstan-drupal' => '0.12.4@4a74b797251562081715bb086a49d460c61a8783',
  'netresearch/jsonmapper' => 'v2.1.0@e0f1e33a71587aca81be5cffbb9746510e1fe04e',
  'nette/finder' => 'v2.5.2@4ad2c298eb8c687dd0e74ae84206a4186eeaed50',
  'nette/utils' => 'v3.1.2@488f58378bba71767e7831c83f9e0fa808bf83b9',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'openlss/lib-array2xml' => '1.0.0@a91f18a8dfc69ffabe5f9b068bc39bb202c81d90',
  'pdepend/pdepend' => '2.7.1@daba1cf0a6edaf172fa02a17807ae29f4c1c7471',
  'php-cs-fixer/diff' => 'v1.3.0@78bb099e9c16361126c86ce82ec4405ebab8e756',
  'php-parallel-lint/php-console-color' => 'v0.3@b6af326b2088f1ad3b264696c9fd590ec395b49e',
  'php-parallel-lint/php-console-highlighter' => 'v0.5@21bf002f077b177f056d8cb455c5ed573adfdbb8',
  'php-parallel-lint/php-parallel-lint' => 'v1.2.0@474f18bc6cc6aca61ca40bfab55139de614e51ca',
  'phpcompatibility/php-compatibility' => '9.3.5@9fb324479acf6f39452e0655d2429cc0d3914243',
  'phploc/phploc' => '4.0.1@6a8a9416517b82d6326ac9c2d040ad53c13654eb',
  'phpmd/phpmd' => '2.8.2@714629ed782537f638fe23c4346637659b779a77',
  'phpmetrics/phpmetrics' => 'v2.6.2@67ac2cea23c6f9c5bdfd1c98fc0e55eef16ef59d',
  'phpstan/extension-installer' => '1.0.4@2e041def501d661b806f50000c8a4dccbd4907b4',
  'phpstan/phpstan-deprecation-rules' => '0.12.4@9b4b8851fb5d59fd0eed00fbe9c22cfc328e0187',
  'roave/security-advisories' => 'dev-master@59f3050bcd5dab238c9ac3eada55269cc2fcfaa8',
  'rskuipers/php-assumptions' => '0.8.0@10f82ca2a268d6624553d2de4659ed6451d9ac60',
  'sebastian/finder-facade' => '1.2.3@167c45d131f7fc3d159f56f191a0a22228765e16',
  'sebastian/phpcpd' => '4.1.0@0d9afa762f2400de077b2192f4a9d127de0bb78e',
  'seld/cli-prompt' => '1.0.3@a19a7376a4689d4d94cab66ab4f3c816019ba8dd',
  'sensiolabs/security-checker' => 'v6.0.3@a576c01520d9761901f269c4934ba55448be4a54',
  'squizlabs/php_codesniffer' => '3.5.5@73e2e7f57d958e7228fce50dc0c61f58f017f9f6',
  'symfony/deprecation-contracts' => 'v2.1.2@dd99cb3a0aff6cadd2a8d7d7ed72c2161e218337',
  'symfony/http-client' => 'v5.1.0@63342eabdc6fc6c12e6b18506a207d16687aa33f',
  'symfony/http-client-contracts' => 'v2.1.2@f8bed25edc964d015bcd87f1fec5734963931910',
  'symfony/mime' => 'v5.1.0@56261f89385f9d13cf843a5101ac72131190bc91',
  'symfony/options-resolver' => 'v5.1.0@663f5dd5e14057d1954fe721f9709d35837f2447',
  'symfony/polyfill-php73' => 'v1.17.0@a760d8964ff79ab9bf057613a5808284ec852ccc',
  'symfony/service-contracts' => 'v2.1.2@66a8f0957a3ca54e4f724e49028ab19d75a8918b',
  'symfony/stopwatch' => 'v5.1.0@0f7c58cf81dbb5dd67d423a89d577524a2ec0323',
  'theseer/fdomdocument' => '1.6.6@6e8203e40a32a9c770bcb62fe37e68b948da6dca',
  'vimeo/psalm' => '3.11.5@3c60609c218d4d4b3b257728b8089094e5c6c6c2',
  'vlucas/phpdotenv' => 'v2.6.5@2e977311ffb17b2f82028a9c36824647789c6365',
  'webmozart/glob' => '4.1.0@3cbf63d4973cf9d780b93d2da8eec7e4a9e63bbe',
  'wikimedia/relpath' => '2.1.1@35e701ff16abf461bb8676a9d9177f86fa0b2c94',
  'zaporylie/composer-drupal-optimizations' => '1.1.1@fb231d92adc862a2c9276bccbc90f684816dc75d',
  'drupal-composer/drupal-project' => 'dev-master@679c37665cb45b403494357117082bbc68d4254f',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
