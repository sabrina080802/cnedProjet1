<?php

namespace App\Tests\Validations;

use App\Entity\Formation;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/*
* Test d'intégration qui vérifie que lors de l'ajout ou de la modification d'une formation, la date n'est pas postérieure à aujourd'hui
*
*/

class DateValidationTest extends KernelTestCase
{
    public function getFormation(): Formation
    {
        return (new Formation())
            ->setTitle('New formation');
    }

    public function testValidationDate()
    {
        $formation = $this->getFormation()->setPublishedAt(new DateTime("2025/08/08"));
        $this->assertErrors($formation, 1);
    }

    public function assertErrors(Formation $formation, int $errorCount, string $message = "")
    {
        self::bootKernel();
        $validator = self::getContainer()->get(ValidatorInterface::class);
        $errors = $validator->validate($formation);
        $this->assertCount($errorCount, $errors, $message);
    }
}
