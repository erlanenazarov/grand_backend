<?php

namespace GrandChita\AppBundle\Controller;

class ContactsController extends AbstractController
{
    public function contactsAction()
    {
        return $this->render('GrandChitaAppBundle:Contacts:contacts.html.twig', array(
            'location' => 'contacts'
        ));
    }

}
