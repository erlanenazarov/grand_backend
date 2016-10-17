<?php

namespace GrandChita\AppBundle\Controller;


class DocumentsController extends AbstractController
{
    public function staffAction()
    {
        return $this->render('GrandChitaAppBundle:Documents:staff.html.twig', array(
            'location' => 'documents'
        ));
    }

    public function certificatesAction()
    {
        return $this->render('GrandChitaAppBundle:Documents:certificates.html.twig', array(
            'location' => 'documents'
        ));
    }

    public function grandDocumentsAction()
    {
        return $this->render('GrandChitaAppBundle:Documents:grand_documents.html.twig', array(
            'location' => 'documents'
        ));
    }

    public function educationProgrammAction()
    {
        return $this->render('GrandChitaAppBundle:Documents:education_programm.html.twig', array(
            'location' => 'documents'
        ));
    }

}
