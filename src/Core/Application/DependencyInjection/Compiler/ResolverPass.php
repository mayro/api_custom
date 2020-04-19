<?php
/**
 * Created by PhpStorm.
 * User: mayro
 * Date: 19/04/20
 * Time: 22:59
 */

namespace App\Core\Application\DependencyInjection\Compiler;

use App\Core\Domain\Resolver\ObjectResolver;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class ResolverPass implements CompilerPassInterface
{

    public function process(ContainerBuilder $container)
    {
        $resolver = $container->getDefinition(ObjectResolver::class);

        foreach ($container->findTaggedServiceIds('app.data_formatter') as $id => $tags) {

            $resolver->addMethodCall('addFormatter', [new Reference($id)]);
        }
    }
}
