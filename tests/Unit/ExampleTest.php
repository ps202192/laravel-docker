<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true()
    {
        $this->assertTrue(false);
        $myfile = fopen("succes.txt", "w") or die("Unable to open file!");
        fclose($myfile);
    }
}