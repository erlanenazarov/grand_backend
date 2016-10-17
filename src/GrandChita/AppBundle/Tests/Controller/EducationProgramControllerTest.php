<?php

namespace GrandChita\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EducationProgramControllerTest extends WebTestCase
{
    public function testBasecourse()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/base-course');
    }

    public function testOprator()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/operator-1c-market-control');
    }

    public function testAccountant()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/accountant');
    }

    public function testInspector()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/stuff-inspector');
    }

    public function testGrandsmeta()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/grand-smeta');
    }

    public function testAdmin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/administration-and-programming-1c');
    }

    public function testDesign()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/design');
    }

    public function testComputercourses()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/computer-courses-for-old-people');
    }

    public function testComputerrepair()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/computer-repair-courses');
    }

    public function testPevm()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/pevm-users');
    }

}
