<?php

namespace Indigo\SonataAdminPrintBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Use this trait to create your custom CRUD controller
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
trait CRUDPrintController
{
    /**
     * Print action
     *
     * @param integer|string|null $id
     *
     * @return Response
     *
     * @throws NotFoundHttpException If the object does not exist
     * @throws AccessDeniedException If access is not granted
     */
    public function printAction($id = null)
    {
        $id = $this->get('request')->get($this->admin->getIdParameter());
        $object = $this->admin->getObject($id);

        if (!$object) {
            throw new NotFoundHttpException(sprintf('Unable to find the object with id: %s', $id));
        }

        if (false === $this->admin->isGranted('VIEW', $object)) {
            throw new AccessDeniedException();
        }

        /* @var Response $response */
        $response = $this->render($this->admin->getTemplate('print'), [
            'action'   => 'print',
            'object'   => $object,
            'elements' => $this->admin->getShow(),
        ]);

        $response->setContent($this->get('knp_snappy.pdf')->getOutputFromHtml($response->getContent()));
        $response->headers->set('Content-Type', 'application/pdf');

        return $response;
    }
}
