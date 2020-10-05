<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Cliche\Exec\ProcOpenCommandExecutor;
use Cliche\Command\EchoCommand\EchoCommandPath;
use Cliche\Command\Grep\GrepCommandPath;

$executor = new ProcOpenCommandExecutor();
$echo = new EchoCommandPath();
$grep = new GrepCommandPath();
$stdout = "";
$stderr = "";
try {
  $stdout = $executor->execute(
    $echo . " Hello from CLI" . " | " . $grep . ' -E CLI'
  );
} catch (\Throwable $e) {
  $stderr = $executor->getLastStderr();
}
$exitCode = $executor->getLastExitCode();

echo PHP_EOL;
echo json_encode(
  [
    'stdout' => $stdout,
    'stderr' => $stderr,
    'exitCode' => $exitCode,
  ],
  JSON_PRETTY_PRINT
);
echo PHP_EOL;

echo PHP_EOL;
