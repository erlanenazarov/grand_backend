<?php

namespace GrandChita\AppBundle\Controller;


class IndexController extends AbstractController
{
    public function indexAction()
    {
        return $this->render('GrandChitaAppBundle:Index:index.html.twig', array(
            'location' => 'index',
        ));
    }

}
