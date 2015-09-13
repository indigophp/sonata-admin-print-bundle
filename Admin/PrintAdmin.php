<?php

namespace SonataAdminPrintBundle\Admin;

use Sonata\AdminBundle\Route\RouteCollection;

/**
 * Use this trait in your Admin class
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
trait PrintAdmin
{
    /**
     * {@inheritdoc}
     */
    protected function configureRoutes(RouteCollection $collection)
    {
        $this->configurePrintRoutes($collection);
    }

    /**
     * @param RouteCollection $collection
     */
    protected function configurePrintRoutes(RouteCollection $collection)
    {
        $collection->add('print', $this->getRouterIdParameter().'/print');
    }

    /**
     * {@inheritdoc}
     */
    abstract protected function getRouterIdParameter();
}
