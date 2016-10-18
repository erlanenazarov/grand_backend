<?php

namespace GrandChita\AppBundle\Controller;


class ScheduleController extends AbstractController
{
    public function scheduleAction()
    {
        $em = $this->getDoctrine()->getManager()->getRepository('GrandChitaEntityBundle:Schedule');
        $items = $em->findAll();

        return $this->render('GrandChitaAppBundle:Schedule:schedule.html.twig', array(
            'location' => 'schedule',
            'list' => $items
        ));
    }

}
