<?php

declare(strict_types=1);

/**
 * Copyright (c) 2017 Andreas Möller.
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @link https://github.com/localheinz/classy
 */

namespace Localheinz\Classy;

final class Construct
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $fileNames = [];

    private function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns a string representation of the construct.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->name;
    }

    /**
     * Creates a new construct from a construct name.
     *
     * @param string $name
     *
     * @return self
     */
    public static function fromName(string $name): self
    {
        return new self($name);
    }

    /**
     * Returns the name of the construct.
     *
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * Returns an array of file names in which the construct is defined.
     *
     * @return array
     */
    public function fileNames(): array
    {
        return $this->fileNames;
    }

    /**
     * Clones the construct and adds the file name to the list of files the construct is defined in.
     *
     * @param string[] $fileNames
     *
     * @return self
     */
    public function definedIn(string ...$fileNames): self
    {
        $instance = clone $this;

        foreach ($fileNames as $fileName) {
            $instance->fileNames[] = $fileName;
        }

        return $instance;
    }
}
