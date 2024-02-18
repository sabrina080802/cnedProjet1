<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Teste l'accès à la page d'accueil
 */

class AccueilControllerTest extends WebTestCase
{
    /**
     * Test de la méthode index
     */

    public function testindex()
    {
        $client = static::createClient();
        $client->request('GET', '/');
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }
}
