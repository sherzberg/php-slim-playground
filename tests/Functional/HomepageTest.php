<?php

namespace Tests\Functional;

class HomepageTest extends BaseTestCase
{

    public function testGetHomepageWithoutName()
    {
        $response = $this->runApp('GET', '/status');

        $this->assertEquals(200, $response->getStatusCode());
    }

}
