<?php
/**
 * Created by PhpStorm.
 * User: mayro
 * Date: 19/04/20
 * Time: 19:44
 */

namespace App\Core\Domain\Managers;


use App\Core\Domain\Models\Author;
use Doctrine\Persistence\ManagerRegistry;

class AuthorManager
{
    /**
     * @var \Doctrine\Persistence\ObjectManager
     */
    private $em;

    /**
     * AuthorManager constructor.
     * @param ManagerRegistry $managerRegistry
     */
    public function __construct(ManagerRegistry $managerRegistry)
    {
        $this->em = $managerRegistry->getManager();
    }

    /**
     * @return object[]
     */
    public function getAuthors(): array
    {
        return $this->em->getRepository(Author::class)->findAll();
    }

}