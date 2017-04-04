<?php

namespace GrandChita\AppBundle\Controller;


class EducationProgramController extends AbstractController
{
    public function baseCourseAction()
    {
        return $this->render('GrandChitaAppBundle:EducationProgram:base_course.html.twig', array(
            'location' => 'education'
        ));
    }

    public function opratorAction()
    {
        return $this->render('GrandChitaAppBundle:EducationProgram:oprator.html.twig', array(
            'location' => 'education'
        ));
    }

    public function accountantAction()
    {
        return $this->render('GrandChitaAppBundle:EducationProgram:accountant.html.twig', array(
            'location' => 'education'
        ));
    }

    public function inspectorAction()
    {
        return $this->render('GrandChitaAppBundle:EducationProgram:inspector.html.twig', array(
            'location' => 'education'
        ));
    }

    public function grandSmetaAction()
    {
        return $this->render('GrandChitaAppBundle:EducationProgram:grand_smeta.html.twig', array(
            'location' => 'education'
        ));
    }

    public function adminAction()
    {
        return $this->render('GrandChitaAppBundle:EducationProgram:admin.html.twig', array(
            'location' => 'education'
        ));
    }

    public function designAction()
    {
        return $this->render('GrandChitaAppBundle:EducationProgram:design.html.twig', array(
            'location' => 'education'
        ));
    }

    public function computerCoursesAction()
    {
        return $this->render('GrandChitaAppBundle:EducationProgram:computer_courses.html.twig', array(
            'location' => 'education'
        ));
    }

    public function computerRepairAction()
    {
        return $this->render('GrandChitaAppBundle:EducationProgram:computer_repair.html.twig', array(
            'location' => 'education'
        ));
    }

    public function pevmAction()
    {
        return $this->render('GrandChitaAppBundle:EducationProgram:pevm.html.twig', array(
            'location' => 'education'
        ));
    }

    public function statisticAction()
    {
        return $this->render('GrandChitaAppBundle:EducationProgram:statistic.html.twig', array(
            'location' => 'education'
        ));
    }

    public function profstandartAction()
    {
        return $this->render('GrandChitaAppBundle:EducationProgram:profstandart.html.twig', array(
            'location' => 'education'
        ));
    }
}
