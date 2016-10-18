<?php

namespace GrandChita\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DocumentsControllerTest extends WebTestCase
{
    public function testStaff()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/staff');
    }

    public function testCertificates()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/diplomas-and-certificates');
    }

    public function testGranddocuments()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/grand-documents');
    }

    public function testEducationprogramm()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/educational-programs');
    }

}
