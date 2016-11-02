<?php

namespace GrandChita\AppBundle\Controller;


class ScheduleController extends AbstractController
{
    public function scheduleAction()
    {
        $em = $this->getDoctrine()->getManager()->getRepository('GrandChitaEntityBundle:Schedule');
        $items = $em->findAll();

        $finalSchedule = array();

        foreach($items as $item) {
            if($item->getEnabled()) {
                $finalSchedule[] += $item;
            }
        }

        return $this->render('GrandChitaAppBundle:Schedule:schedule.html.twig', array(
            'location' => 'schedule',
            'list' => $finalSchedule
        ));
    }

}
