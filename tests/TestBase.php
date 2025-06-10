<?php

/**
 * This file is part of tomkyle/boilerplate-php
 *
 * PHP Package boilerplate
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use PHPUnit\Framework\TestCase;

class TestCaseBase extends TestCase
{
    /**
     * @var string
     */
    protected $fixturePath;

    /**
     * Set up the test case.
     *
     * This method sets the fixture path to the directory where test fixtures are stored.
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->fixturePath = __DIR__.'/fixtures/';
    }

    /**
     * Get the path to the fixtures directory.
     */
    protected function getFixturePath(): string
    {
        return $this->fixturePath;
    }
}
