<?php
/**
 * Created by PhpStorm.
 * User: mayro
 * Date: 19/04/20
 * Time: 22:35
 */

namespace App\Core\Domain\Resolver;


use App\Core\Domain\Formatter\FormatterInterface;

class ObjectResolver implements ResolverInterface
{

    protected $formatters;

    public function inputResolver($data)
    {
        // TODO: Implement inputResolver() method.
    }

    /**
     * @param $data
     * @param $alias
     * @return mixed
     */
    public function outputResolver($data, $alias)
    {
        $formatter = $this->getFormatter($alias);

        return $formatter->format($data);
    }

    /**
     * @param $alias
     * @return FormatterInterface
     */
    public function getFormatter($alias): FormatterInterface
    {
        return $this->formatters[$alias];
    }

    /**
     * @param FormatterInterface $formatter
     */
    public function addFormatter(FormatterInterface $formatter): void
    {
        $this->formatters [$formatter->getAlias()] = $formatter;
    }
}