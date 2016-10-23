<?php

namespace GrandChita\AppBundle\Controller;


class DocumentsController extends AbstractController
{
    public function staffAction()
    {
        $em = $this->getDoctrine()->getManager()->getRepository('GrandChitaEntityBundle:Staff');
        $peoples = $em->findAll();

        return $this->render('GrandChitaAppBundle:Documents:staff.html.twig', array(
            'location' => 'documents',
            'staff' => $peoples
        ));
    }

    public function certificatesAction()
    {
        $em = $this->getDoctrine()->getManager()->getRepository('GrandChitaEntityBundle:Certificates');
        $certificates = $em->findAll();

        return $this->render('GrandChitaAppBundle:Documents:certificates.html.twig', array(
            'location' => 'documents',
            'certificates' => $certificates
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
