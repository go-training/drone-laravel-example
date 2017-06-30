<?php

namespace Tests\Feature;

use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRedis()
    {
        // Retrieve a piece of data from the session...
        $value = session('key');

        // Specifying a default value...
        $value = session('key', 'default');
        $this->assertEquals('default', session('key', 'default'));

        // Store a piece of data in the session...
        session(['key' => 'value']);
        $this->assertEquals('value', session('key', 'default'));
    }
}
