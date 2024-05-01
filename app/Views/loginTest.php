<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

final class LoginTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    public function testLoginForm(): void
    {
        $result = $this->withURI('login')
            ->controller('Auth')
            ->execute('index');

        $this->assertTrue($result->isOK());

        $this->assertStringContainsString('<form action="/login" method="post">', $result->getBody());
        $this->assertStringContainsString('<input type="text" name="username" placeholder="Username">', $result->getBody());
        $this->assertStringContainsString('<input type="password" name="password" placeholder="Password">', $result->getBody());
        $this->assertStringContainsString('<input type="submit" value="Login">', $result->getBody());
        $this->assertStringContainsString('</form>', $result->getBody());
    }
}