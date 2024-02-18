<?php

namespace App\Tests;

use App\Entity\Formation;
use DateTime;
use PHPUnit\Framework\TestCase;

/*
* Test unitaires qui contrôle le fonctionnement de la méthode qui retourne la date de parution au format string
*
*/

class DateTest extends TestCase
{

    public function testDate()
    {
        $formation = new Formation();
        $formation->setPublishedAt(new \DateTime("2024-01-01"));
        $this->assertEquals("01/01/2024", $formation->getPublishedAtString());
    }
}
