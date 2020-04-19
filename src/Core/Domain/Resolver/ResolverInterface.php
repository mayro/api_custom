<?php
/**
 * Created by PhpStorm.
 * User: mayro
 * Date: 19/04/20
 * Time: 22:33
 */

namespace App\Core\Domain\Resolver;


interface ResolverInterface
{

    public function outputResolver($data, $alias);

    public function inputResolver($data);
}