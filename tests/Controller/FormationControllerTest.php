<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Tests fonctionnels sur la page FormationsController
 *
 */
class FormationsControllerTest extends WebTestCase
{
    /**
     * Test l'acces de la page des formations
     */

    public function testAccesPage()
    {
        $client = static::createClient();
        $client->request('GET', '/formations');
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }

    /**
     * Test la fonction sort
     */

    public function testSort()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/formations/tri/title/DESC');
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
        $this->assertSelectorTextContains('h5', 'Une Formation');
        $this->assertCount(737, $crawler->filter('h5'));
    }

    /**
     * Test la fonction findAllContain
     */

    public function testFindAllContaint()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'formations/recherche/id/categories');
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
        $crawler = $client->submitForm('filtrer', [
            'recherche' => 'Java'
        ]);
        $this->assertSelectorTextContains('h5', 'TP Android n°5 : code du controleur et JavaDoc');
        $this->assertCount(7, $crawler->filter('h5'));
    }

    /**
     * Test la fonction showOne
     */

    public function testShowOne()
    {
        //$client = static::createClient();
        //$client->request('GET', '/formations/title');
        //$crawler = $client->submitForm('filtrer', [
        //    'recherche' => 'Java'
        //]);
        //$this->assertSelectorTextContains('h5', 'TP Android n°5 : code du controleur et JavaDoc');
        //$this->assertCount(7, $crawler->filter('h5'));
    }
}
