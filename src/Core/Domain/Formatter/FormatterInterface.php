<?php
/**
 * Created by PhpStorm.
 * User: mayro
 * Date: 19/04/20
 * Time: 21:39
 */

namespace App\Core\Domain\Formatter;


interface FormatterInterface
{
    /**
     * @param $data
     * @return mixed
     */
    public function supports($data);

    /**
     * @param $data
     * @return mixed
     */
    public function format($data);

    public function getAlias();

}