<?php

/*
 * Copyright (c) 2020 Anton Bagdatyev (Tonix)
 *
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 */

namespace Cliche\Exec;

use Cliche\Oops\CommandFailedException;

/**
 * A CLI command executor interface.
 *
 * @author Anton Bagdatyev (Tonix) <antonytuft@gmail.com>
 */
interface CommandExecutorInterface {
  /**
   * Executes a CLI command.
   *
   * @param string $command The command to execute.
   * @return string the stdout of the executed command. Leading and trailing newline and carriage return characters MUST be removed.
   * @throws CommandFailedException If the command execution fails for some reason.
   */
  public function execute($command);

  /**
   * Gets the stdout of the last executed command.
   *
   * This method MUST throw a {@link CommandNotExecutedException} if a command hasn't been executed yet
   * ({@link CommandExecutorInterface::execute()} hasn't been called).
   *
   * Leading and trailing newline and carriage return characters MUST be removed.
   *
   * @return string Last CLI command's stdout.
   * @throws CommandNotExecutedException If a command hasn't been executed yet.
   */
  public function getLastStdout();

  /**
   * Gets the stderr of the last executed command.
   *
   * This method MUST throw a {@link CommandNotExecutedException} if a command hasn't been executed yet
   * ({@link CommandExecutorInterface::execute()} hasn't been called).
   *
   * Leading and trailing newline and carriage return characters MUST be removed.
   *
   * @return string Last CLI command's stderr.
   * @throws CommandNotExecutedException If a command hasn't been executed yet.
   */
  public function getLastStderr();

  /**
   * Gets the exit code of the last executed command.
   *
   * This method MUST throw a {@link CommandNotExecutedException} if a command hasn't been executed yet
   * ({@link CommandExecutorInterface::execute()} hasn't been called).
   *
   * @return int Last CLI command's exit code.
   * @throws CommandNotExecutedException If a command hasn't been executed yet.
   */
  public function getLastExitCode();
}
