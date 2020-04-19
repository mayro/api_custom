<?php
/**
 * Created by PhpStorm.
 * User: mayro
 * Date: 19/04/20
 * Time: 19:03
 */

namespace App\Core\Application\Controller;

use App\Core\Domain\Managers\AuthorManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AuthorController extends AbstractController
{
    public $manager;

    public function __construct(AuthorManager $authorManager)
    {
        $this->manager = $authorManager;
    }

    public function getAuthors()
    {
        $authors = $this->manager->getAuthors();

    }

}