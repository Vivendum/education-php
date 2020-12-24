<?php
  declare(strict_types=1);

  include('../../.key/password-sprinthost.php');

  return [
    'log' => './log/deployment.log',
    'tempDir' => './temp/deployment/',
    'colors' => true,

    'sprinthost' => [
      'remote' => 'ftp://@ftp.learning-php.myspt.ru/domains/learning-php.myspt.ru/public_html/',
      'user' => 'f0497472',
      'password' => $passwordSprinthost,
      'passiveMode' => true,
      'local' => './shared',
      'test' => false,
      'allowDelete' => true,
      'preprocess' => false,
      'deploymentFile' => '.deployment'
    ]
  ];
?>
