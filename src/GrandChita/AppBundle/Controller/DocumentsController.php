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
        $certificates = $em->findall();

        return $this->render('GrandChitaAppBundle:Documents:certificates.html.twig', array(
            'location' => 'documents',
            'certificates' => $certificates
        ));
    }

    public function grandDocumentsAction()
    {
        $em = $this->getDoctrine()->getManager()->getRepository('GrandChitaEntityBundle:GrandDocuments');
        $documents = $em->findAll();

        return $this->render('GrandChitaAppBundle:Documents:grand_documents.html.twig', array(
            'location' => 'documents',
            'documents' => $documents
        ));
    }

    public function documentGalleryAction($id) {
        $em = $this->getDoctrine()->getManager()->getRepository('GrandChitaEntityBundle:GrandDocuments');
        $document = $em->find($id);

        return $this->render('GrandChitaAppBundle:Documents/documents:document_item.html.twig', array(
            'location' => 'documents',
            'document' => $document
        ));
    }

    public function educationProgrammAction()
    {
        $em = $this->getDoctrine()->getManager()->getRepository('GrandChitaEntityBundle:EducationProgram');
        $educationPrograms = $em->findAll();

        return $this->render('GrandChitaAppBundle:Documents:education_programm.html.twig', array(
            'location' => 'documents',
            'programs' => $educationPrograms
        ));
    }

    public function educationAction($id) {
        $em = $this->getDoctrine()->getManager()->getRepository('GrandChitaEntityBundle:EducationProgram');
        $educationProgram = $em->find($id);

        return $this->render('GrandChitaAppBundle:Documents/programs:education_program.html.twig', array(
            'location' => 'documents',
            'program' => $educationProgram
        ));
    }

}
