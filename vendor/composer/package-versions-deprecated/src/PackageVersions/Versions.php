<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'deburca/www';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'asm89/stack-cors' => '1.3.0@b9c31def6a83f84b4d4a40d35996d375755f0e08',
  'chi-teck/drupal-code-generator' => '1.32.1@8abba7131ed4c89c1e8fc6dca0d05a4b6d0b2749',
  'composer/installers' => 'v1.9.0@b93bcf0fa1fccb0b7d176b0967d969691cd74cca',
  'composer/semver' => '1.5.1@c6bea70230ef4dd483e6bbcab6005f682ed3a8de',
  'consolidation/annotated-command' => '4.2.1@ef6b7e662ce2d8b0af9004307bdf26350aad4df1',
  'consolidation/config' => '1.2.1@cac1279bae7efb5c7fb2ca4c3ba4b8eb741a96c1',
  'consolidation/filter-via-dot-access-data' => '1.0.0@a53e96c6b9f7f042f5e085bf911f3493cea823c6',
  'consolidation/log' => '2.0.1@ba0bf6af1fbd09ed4dc18fc2f27b12ceff487cbf',
  'consolidation/output-formatters' => '4.1.1@9deeddd6a916d0a756b216a8b40ce1016e17c0b9',
  'consolidation/robo' => '1.4.12@eb45606f498b3426b9a98b7c85e300666a968e51',
  'consolidation/self-update' => '1.2.0@dba6b2c0708f20fa3ba8008a2353b637578849b4',
  'consolidation/site-alias' => '3.0.1@fd40a03f80f8fd4684b10bef8c8c4ec5a9a9bf26',
  'consolidation/site-process' => '4.0.0@ad86475eb3fe73490eb1b6ff2e74ee0f09952e9d',
  'container-interop/container-interop' => '1.2.0@79cbf1341c22ec75643d841642dd5d6acd83bdb8',
  'cweagans/composer-patches' => '1.6.7@2e6f72a2ad8d59cd7e2b729f218bf42adb14f590',
  'defuse/php-encryption' => 'v2.2.1@0f407c43b953d571421e0020ba92082ed5fb7620',
  'dflydev/dot-access-data' => 'v1.1.0@3fbd874921ab2c041e899d044585a2ab9795df8a',
  'dnoegel/php-xdg-base-dir' => 'v0.1.1@8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
  'doctrine/annotations' => '1.10.3@5db60a4969eba0e0c197a19c077780aadbc43c5d',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'drupal/admin_toolbar' => '2.3.0@8.x-2.3',
  'drupal/advagg' => '4.1.0@8.x-4.1',
  'drupal/backup_migrate' => '5.0.0-rc1@5.0.0-rc1',
  'drupal/block_class' => '1.2.0@8.x-1.2',
  'drupal/bootstrap_barrio' => '5.1.2@5.1.2',
  'drupal/bootstrap_layouts' => '5.2.0@8.x-5.2',
  'drupal/bootstrap_library' => '1.14.0@8.x-1.14',
  'drupal/coder' => '8.3.10@e1d71c6bb75b94f9ed00dceb2f4f6cb7e044723d',
  'drupal/core' => '9.0.5@145671b8ac88322c43c8415cf287b76dfe45ad38',
  'drupal/core-composer-scaffold' => '9.0.5@c017751a6bb9b2ffe56f0fab607ba67c21604bfd',
  'drupal/core-recommended' => '9.0.5@b78dd90192e614eeb1d3cd484ca2dd85c7a4cf03',
  'drupal/ctools' => '3.4.0@8.x-3.4',
  'drupal/devel' => '4.0.0@4.0.0',
  'drupal/ds' => '3.9.0@8.x-3.9',
  'drupal/entity_browser' => '2.5.0@8.x-2.5',
  'drupal/entity_reference_revisions' => '1.8.0@8.x-1.8',
  'drupal/eu_cookie_compliance' => '1.9.0@8.x-1.9',
  'drupal/field_formatter_class' => '1.4.0@8.x-1.4',
  'drupal/field_group' => '3.1.0@8.x-3.1',
  'drupal/fontawesome' => '2.17.0@8.x-2.17',
  'drupal/geshifilter' => '2.0.0-beta1@8.x-2.0-beta1',
  'drupal/honeypot' => '2.0.1@2.0.1',
  'drupal/jquery_ui' => '1.4.0@8.x-1.4',
  'drupal/jquery_ui_accordion' => '1.1.0@8.x-1.1',
  'drupal/link_attributes' => '1.11.0@8.x-1.11',
  'drupal/metatag' => '1.14.0@8.x-1.14',
  'drupal/olivero' => '1.0.0-beta1@8.x-1.0-beta1',
  'drupal/pathauto' => '1.8.0@8.x-1.8',
  'drupal/redirect' => '1.6.0@8.x-1.6',
  'drupal/seckit' => '2.0.0@2.0.0',
  'drupal/token' => '1.7.0@8.x-1.7',
  'drupal/views_bootstrap' => '4.3.0@8.x-4.3',
  'drupal/viewsreference' => '2.0.0-beta2@8.x-2.0-beta2',
  'drush/drush' => '10.3.4@802419a6eb0232bdb977788e6a828cd4fa5bdb11',
  'egulias/email-validator' => '2.1.17@ade6887fd9bd74177769645ab5c474824f8a418a',
  'geshi/geshi' => 'v1.0.9.1@fd22ab78481bf90337862b590e6f7517863926b8',
  'grasmash/expander' => '1.0.0@95d6037344a4be1dd5f8e0b0b2571a28c397578f',
  'grasmash/yaml-expander' => '1.4.0@3f0f6001ae707a24f4d9733958d77d92bf9693b1',
  'guzzlehttp/guzzle' => '6.5.4@a4a1b6930528a8f7ee03518e6442ec7a44155d9d',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'kint-php/kint' => '3.3@335ac1bcaf04d87df70d8aa51e8887ba2c6d203b',
  'laminas/laminas-diactoros' => '2.3.0@5ab185dba63ec655a2380c97711b09adc7061f89',
  'laminas/laminas-escaper' => '2.6.1@25f2a053eadfa92ddacb609dcbbc39362610da70',
  'laminas/laminas-feed' => '2.12.2@8a193ac96ebcb3e16b6ee754ac2a889eefacb654',
  'laminas/laminas-stdlib' => '3.2.1@2b18347625a2f06a1a485acfbc870f699dbe51c6',
  'laminas/laminas-zendframework-bridge' => '1.0.4@fcd87520e4943d968557803919523772475e8ea3',
  'league/container' => '2.4.1@43f35abd03a12977a60ffd7095efd6a7808488c0',
  'masterminds/html5' => '2.7.0@104443ad663d15981225f99532ba73c2f1d6b6f2',
  'nikic/php-parser' => 'v4.9.1@88e519766fc58bd46b8265561fb79b54e2e00b28',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'pear/archive_tar' => '1.4.9@c5b00053770e1d72128252c62c2c1a12c26639f0',
  'pear/console_getopt' => 'v1.4.3@a41f8d3e668987609178c7c4a9fe48fecac53fa0',
  'pear/pear-core-minimal' => 'v1.10.10@625a3c429d9b2c1546438679074cac1b089116a7',
  'pear/pear_exception' => 'v1.0.1@dbb42a5a0e45f3adcf99babfb2a1ba77b8ac36a7',
  'phpstan/phpstan' => '0.12.42@7c43b7c2d5ca6554f6231e82e342a710163ac5f4',
  'phpstan/phpstan-strict-rules' => '0.12.5@334898a32217e4605e0f9cfa3d3fc3101bda26be',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psy/psysh' => 'v0.10.4@a8aec1b2981ab66882a01cce36a49b6317dc3560',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'sirbrillig/phpcs-variable-analysis' => 'v2.8.3@00b4fa3130faa26762c929989e3d958086c627f1',
  'squizlabs/php_codesniffer' => '3.5.6@e97627871a7eab2f70e59166072a6b767d5834e0',
  'stack/builder' => 'v1.0.6@a4faaa6f532c6086bc66c29e1bc6c29593e1ca7c',
  'symfony-cmf/routing' => '2.3.2@e073c3b6db0e9a5f4c8d7a7bb8a092cd5e191fba',
  'symfony/console' => 'v4.4.9@326b064d804043005526f5a0494cfb49edb59bb0',
  'symfony/debug' => 'v4.4.9@28f92d08bb6d1fddf8158e02c194ad43870007e6',
  'symfony/dependency-injection' => 'v4.4.9@6a2cecd7011aec38b5fb2270abf0de120e7679b1',
  'symfony/error-handler' => 'v4.4.9@0df9a23c0f9eddbb6682479fee6fd58b88add75b',
  'symfony/event-dispatcher' => 'v4.4.9@a5370aaa7807c7a439b21386661ffccf3dff2866',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/filesystem' => 'v4.4.13@27575bcbc68db1f6d06218891296572c9b845704',
  'symfony/finder' => 'v4.4.13@2a78590b2c7e3de5c429628457c47541c58db9c7',
  'symfony/http-foundation' => 'v4.4.9@3adfbd7098c850b02d107330b7b9deacf2581578',
  'symfony/http-kernel' => 'v4.4.13@2bb7b90ecdc79813c0bf237b7ff20e79062b5188',
  'symfony/mime' => 'v5.1.0@56261f89385f9d13cf843a5101ac72131190bc91',
  'symfony/polyfill-ctype' => 'v1.17.0@e94c8b1bbe2bc77507a1056cdb06451c75b427f9',
  'symfony/polyfill-iconv' => 'v1.17.0@c4de7601eefbf25f9d47190abe07f79fe0a27424',
  'symfony/polyfill-intl-idn' => 'v1.17.0@3bff59ea7047e925be6b7f2059d60af31bb46d6a',
  'symfony/polyfill-mbstring' => 'v1.17.0@fa79b11539418b02fc5e1897267673ba2c19419c',
  'symfony/polyfill-php72' => 'v1.17.0@f048e612a3905f34931127360bdd2def19a5e582',
  'symfony/polyfill-php73' => 'v1.17.0@a760d8964ff79ab9bf057613a5808284ec852ccc',
  'symfony/polyfill-php80' => 'v1.17.0@5e30b2799bc1ad68f7feb62b60a73743589438dd',
  'symfony/process' => 'v4.4.9@c714958428a85c86ab97e3a0c96db4c4f381b7f5',
  'symfony/psr-http-message-bridge' => 'v2.0.0@ce709cd9c90872c08c2427b45739d5f3c781ab4f',
  'symfony/routing' => 'v4.4.9@0f557911dde75c2a9652b8097bd7c9f54507f646',
  'symfony/serializer' => 'v4.4.9@f2d82706d488b87e67050b03a9ae54194b129024',
  'symfony/service-contracts' => 'v2.1.2@66a8f0957a3ca54e4f724e49028ab19d75a8918b',
  'symfony/translation' => 'v4.4.9@79d3ef9096a6a6047dbc69218b68c7b7f63193af',
  'symfony/translation-contracts' => 'v2.1.2@e5ca07c8f817f865f618aa072c2fe8e0e637340e',
  'symfony/validator' => 'v4.4.9@2fae3378102cff29976ce9e35f6964c78fce02b6',
  'symfony/var-dumper' => 'v5.1.0@46a942903059b0b05e601f00eb64179e05578c0f',
  'symfony/yaml' => 'v4.4.9@c2d2cc66e892322cfcc03f8f12f8340dbd7a3f8a',
  'twbs/bootstrap' => 'v4.5.2@5f2480a90ab911babc53039835fe78c6fc12646d',
  'twig/twig' => 'v2.12.5@18772e0190734944277ee97a02a9a6c6555fcd94',
  'typo3/phar-stream-wrapper' => 'v3.1.4@e0c1b495cfac064f4f5c4bcb6bf67bb7f345ed04',
  'webflo/drupal-finder' => '1.2.0@123e248e14ee8dd3fbe89fb5a733a6cf91f5820e',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'webmozart/path-util' => '2.3.0@d939f7edc24c9a1bb9c0dee5cb05d8e859490725',
  'amphp/amp' => 'v2.5.0@f220a51458bf4dd0dedebb171ac3457813c72bbc',
  'amphp/byte-stream' => 'v1.8.0@f0c20cf598a958ba2aa8c6e5a71c697d652c7088',
  'behat/mink' => 'v1.8.1@07c6a9fe3fa98c2de074b25d9ed26c22904e3887',
  'behat/mink-browserkit-driver' => 'v1.3.4@e3b90840022ebcd544c7b394a3c9597ae242cbee',
  'behat/mink-goutte-driver' => 'v1.2.1@8b9ad6d2d95bc70b840d15323365f52fcdaea6ca',
  'behat/mink-selenium2-driver' => 'v1.4.0@312a967dd527f28980cce40850339cd5316da092',
  'composer/ca-bundle' => '1.2.8@8a7ecad675253e4654ea05505233285377405215',
  'composer/composer' => '1.10.10@32966a3b1d48bc01472a8321fd6472b44fad033a',
  'composer/package-versions-deprecated' => '1.11.99@c8c9aa8a14cc3d3bec86d0a8c3fa52ea79936855',
  'composer/spdx-licenses' => '1.5.4@6946f785871e2314c60b4524851f3702ea4f2223',
  'composer/xdebug-handler' => '1.4.3@ebd27a9866ae8254e873866f795491f02418c5a5',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'drupal/core-dev' => '9.0.5@34ab35ef70eb772c38178ad626e99e11267a7022',
  'easyrdf/easyrdf' => '0.9.1@acd09dfe0555fbcfa254291e433c45fdd4652566',
  'edgedesign/phpqa' => 'v1.23.3@a1ecc21a181f0ba6fd830afadb336e55e4f67e9f',
  'fabpot/goutte' => 'v3.3.0@4ab5199e3ec0ffde0ee0b5ecf568a4fb8398dbae',
  'felixfbecker/advanced-json-rpc' => 'v3.1.1@0ed363f8de17d284d479ec813c9ad3f6834b5c40',
  'felixfbecker/language-server-protocol' => 'v1.4.0@378801f6139bb74ac215d81cca1272af61df9a9f',
  'friendsofphp/php-cs-fixer' => 'v2.16.4@1023c3458137ab052f6ff1e09621a721bfdeca13',
  'instaclick/php-webdriver' => '1.4.7@b5f330e900e9b3edfc18024a5ec8c07136075712',
  'justinrainbow/json-schema' => '5.2.10@2ba9c8c862ecd5510ed16c6340aa9f6eadb4f31b',
  'league/climate' => '3.5.2@6b53a28a58ad9f5f63042e291eb870cf0d02a9c9',
  'mglaman/phpstan-drupal' => '0.12.5@f7676482b39184270eaba25cbd5e491144814a93',
  'mikey179/vfsstream' => 'v1.6.8@231c73783ebb7dd9ec77916c10037eff5a2b6efe',
  'myclabs/deep-copy' => '1.10.1@969b211f9a51aa1f6c01d1d2aef56d3bd91598e5',
  'netresearch/jsonmapper' => 'v2.1.0@e0f1e33a71587aca81be5cffbb9746510e1fe04e',
  'nette/finder' => 'v2.5.2@4ad2c298eb8c687dd0e74ae84206a4186eeaed50',
  'nette/utils' => 'v3.1.3@c09937fbb24987b2a41c6022ebe84f4f1b8eec0f',
  'openlss/lib-array2xml' => '1.0.0@a91f18a8dfc69ffabe5f9b068bc39bb202c81d90',
  'pdepend/pdepend' => '2.8.0@c64472f8e76ca858c79ad9a4cf1e2734b3f8cc38',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'php-cs-fixer/diff' => 'v1.3.0@78bb099e9c16361126c86ce82ec4405ebab8e756',
  'php-parallel-lint/php-console-color' => 'v0.3@b6af326b2088f1ad3b264696c9fd590ec395b49e',
  'php-parallel-lint/php-console-highlighter' => 'v0.5@21bf002f077b177f056d8cb455c5ed573adfdbb8',
  'php-parallel-lint/php-parallel-lint' => 'v1.2.0@474f18bc6cc6aca61ca40bfab55139de614e51ca',
  'phpcompatibility/php-compatibility' => '9.3.5@9fb324479acf6f39452e0655d2429cc0d3914243',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.1@d870572532cd70bc3fab58f2e23ad423c8404c44',
  'phpdocumentor/type-resolver' => '1.3.0@e878a14a65245fbe78f8080eba03b47c3b705651',
  'phploc/phploc' => '5.0.0@5b714ccb7cb8ca29ccf9caf6eb1aed0131d3a884',
  'phpmd/phpmd' => '2.9.0@2a346575a45a6f00e631f4d7f3f71b6a05e0d46d',
  'phpmetrics/phpmetrics' => 'v2.7.4@e6a7aee0e0948e363eb78ce9d58573cd5af2cdec',
  'phpspec/prophecy' => '1.11.1@b20034be5efcdab4fb60ca3a29cba2949aead160',
  'phpstan/extension-installer' => '1.0.5@5c2da3846819f951385cb6a25d3277051481c48a',
  'phpstan/phpstan-deprecation-rules' => '0.12.5@bfabc6a1b4617fbcbff43f03a4c04eae9bafae21',
  'phpunit/php-code-coverage' => '7.0.10@f1884187926fbb755a9aaf0b3836ad3165b478bf',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.1.1@995192df77f63a59e47f025390d2d1fdf8f425ff',
  'phpunit/phpunit' => '8.5.8@34c18baa6a44f1d1fbf0338907139e9dce95b997',
  'rskuipers/php-assumptions' => '0.8.0@10f82ca2a268d6624553d2de4659ed6451d9ac60',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
  'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
  'sebastian/environment' => '4.2.3@464c90d7bdf5ad4e8a6aea15c091fec0603d4368',
  'sebastian/exporter' => '3.1.2@68609e1261d215ea5b21b7987539cbfbe156ec3e',
  'sebastian/finder-facade' => '1.2.3@167c45d131f7fc3d159f56f191a0a22228765e16',
  'sebastian/global-state' => '3.0.0@edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4',
  'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5',
  'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be',
  'sebastian/phpcpd' => '4.1.0@0d9afa762f2400de077b2192f4a9d127de0bb78e',
  'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
  'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
  'sebastian/type' => '1.1.3@3aaaa15fa71d27650d62a948be022fe3b48541a3',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'seld/cli-prompt' => '1.0.3@a19a7376a4689d4d94cab66ab4f3c816019ba8dd',
  'seld/jsonlint' => '1.8.2@590cfec960b77fd55e39b7d9246659e95dd6d337',
  'seld/phar-utils' => '1.1.1@8674b1d84ffb47cc59a101f5d5a3b61e87d23796',
  'sensiolabs/security-checker' => 'v6.0.3@a576c01520d9761901f269c4934ba55448be4a54',
  'symfony/browser-kit' => 'v4.4.13@f53310646af9901292488b2ff36e26ea10f545f5',
  'symfony/config' => 'v4.4.13@043bf8652c307ebc23ce44047d215eec889d8850',
  'symfony/css-selector' => 'v4.4.13@bf17dc9f6ce144e41f786c32435feea4d8e11dcc',
  'symfony/deprecation-contracts' => 'v2.1.3@5e20b83385a77593259c9f8beb2c43cd03b2ac14',
  'symfony/dom-crawler' => 'v4.4.13@6dd1e7adef4b7efeeb9691fd619279027d4dcf85',
  'symfony/http-client' => 'v5.1.5@21c4372e9cd2305313f4d4792d7b9fa7c25ade53',
  'symfony/http-client-contracts' => 'v2.1.3@cd88921e9add61f2064c9c6b30de4f589db42962',
  'symfony/lock' => 'v4.4.13@8eac1a52d1a3882d0cb5f990e0f907d5457e616f',
  'symfony/options-resolver' => 'v5.1.5@9ff59517938f88d90b6e65311fef08faa640f681',
  'symfony/phpunit-bridge' => 'v4.4.13@bba78ce46a13a8d761f6330c718924dc6ca7d3b0',
  'symfony/polyfill-php70' => 'v1.18.1@0dd93f2c578bdc9c72697eaa5f1dd25644e618d3',
  'symfony/stopwatch' => 'v5.1.5@0f7c58cf81dbb5dd67d423a89d577524a2ec0323',
  'theseer/fdomdocument' => '1.6.6@6e8203e40a32a9c770bcb62fe37e68b948da6dca',
  'theseer/tokenizer' => '1.2.0@75a63c33a8577608444246075ea0af0d052e452a',
  'vimeo/psalm' => '3.15@de6e7f324f44dde540ebe7ebd4eb481b97c86f30',
  'vlucas/phpdotenv' => 'v2.6.6@e1d57f62db3db00d9139078cbedf262280701479',
  'webmozart/glob' => '4.1.0@3cbf63d4973cf9d780b93d2da8eec7e4a9e63bbe',
  'zaporylie/composer-drupal-optimizations' => '1.1.1@fb231d92adc862a2c9276bccbc90f684816dc75d',
  'deburca/www' => 'dev-master@0de426673c291ff2e9201f7b620f5928378b9f29',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
