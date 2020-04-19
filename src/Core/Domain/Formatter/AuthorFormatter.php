<?php
/**
 * Created by PhpStorm.
 * User: mayro
 * Date: 19/04/20
 * Time: 20:08
 */

namespace App\Core\Domain\Formatter;


use App\Core\Domain\Exception\LogicException;
use App\Core\Domain\Models\Author;

class AuthorFormatter implements FormatterInterface
{

    public function supports($data)
    {
        return $data instanceof Author;
    }

    /**
     * @param $data
     * @return array
     */
    public function format($data): array
    {
        if(!$this->supportes($data)) {
            throw new LogicException('This type of data isn\'t supported by this formatter');
        }

        return [
            'id' => $data->getId(),
            'name' => $data->getName(),
            'description' => $data->getDescription(),
            ];
    }

    /**
     * @return string
     */
    public function getAlias(): string
    {
        return Author::class;
    }
}