<?php

namespace GrandChita\AppBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ContactsController extends AbstractController
{
    public function buildRequestForm() {
        $form = $this->createFormBuilder()
            ->add('title', 'text', array(
                'attr' => array(
                    'placeholder' => 'Ваше имя'
                )
            ))
            ->add('mail', 'email', array(
                'attr' => array(
                    'placeholder' => 'Ваш E-Mail'
                )
            ))
            ->add('subject', 'text', array(
                'attr' => array(
                    'placeholder' => 'Тема сообщения'
                )
            ))
            ->add('message', 'textarea', array(
                'attr' => array(
                    'placeholder' => 'Сообщение',
                    'rows' => '10',
                    'cols' => '30'
                )
            ))
            ->getForm();

        return $form;
    }

    public function contactsAction()
    {
        return $this->render('GrandChitaAppBundle:Contacts:contacts.html.twig', array(
            'location' => 'contacts',
            'request_form' => $this->buildRequestForm()->createView()
        ));
    }

    public function sendMailAction(Request $request) {
        if($request->getMethod() == 'POST') {
            $form = $this->buildRequestForm();
            $form->submit($request);

            $data = $form->getData();

            $message = "Имя: {$data['title']} <br />"
                        ."Эл. почта: {$data['mail']} <br />"
                        ."Тема сообщения: {$data['subject']} <br />"
                        ."Сообщение: <br />"
                        .$data['message'];

            $result = mail('okay11007@gmail.com', $data['subject'], $message);

            if($result) {
                return new JsonResponse(array(
                    'result' => 'ok'
                ));
            } else {
                return new JsonResponse(array(
                    'result' => 'fail',
                    'reason' => 'Unknown reason'
                ));
            }
        } else {
            return new JsonResponse(array(
                'result' => 'fail',
                'reason' => 'request is not post!'
            ));
        }
    }

}
