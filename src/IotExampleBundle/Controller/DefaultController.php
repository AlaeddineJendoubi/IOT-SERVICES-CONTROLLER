<?php

namespace IotExampleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@IotExample/index.html.twig');
    }

    public function updateBuzzerAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $sensor = $em->find("IotExampleBundle:SensorsAndThreshHolds", 1);
        $sensor->setBuzzerState($request->get("val"));
        $em->flush();
        return new Response("");
    }

    public function updateLedAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $sensor = $em->find("IotExampleBundle:SensorsAndThreshHolds", 1);
        $sensor->setLedState($request->get("val"));
        $em->flush();
        return new Response("");
    }
    public function updateSensorAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $sensor = $em->find("IotExampleBundle:SensorsAndThreshHolds", 1);
        $sensor->{"set".$request->get('who')}($request->get("val"));
        $em->flush();
        return new Response("");
    }



    public function updateTempThreshHoldAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $sensor = $em->find("IotExampleBundle:SensorsAndThreshHolds", 1);
        $sensor->setTempThreashHold($request->get("tempThresh"));
        $em->flush();
        return new Response("");
    }

    public function updateLumThreshHoldAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $sensor = $em->find("IotExampleBundle:SensorsAndThreshHolds", 1);
        $sensor->setLumThreashHold($request->get("lumThresh"));
        $em->flush();
        return new Response("");
    }

    public function getSpecificValueAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $sensor = $em->find("IotExampleBundle:SensorsAndThreshHolds", 1);
        $method="get".$request->get("val");
        return new Response("".$sensor->{$method}());
    }
    public function setMessageAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $sensor = $em->find("IotExampleBundle:SensorsAndThreshHolds", 1);
        $sensor->setMessage($request->get("val"));
        $em->flush();
        return new Response("");
    }
    public function setStAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $sensor = $em->find("IotExampleBundle:SensorsAndThreshHolds", 1);
        $sensor->setTempThreashHold($request->get("val"));
        $em->flush();
        return new Response("");
    }
    public function setSlAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $sensor = $em->find("IotExampleBundle:SensorsAndThreshHolds", 1);
        $sensor->setLumThreashHold($request->get("val"));
        $em->flush();
        return new Response("");
    }
    public function getMessageAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $sensor = $em->find("IotExampleBundle:SensorsAndThreshHolds", 1);
        return new Response($sensor->getMessage());
    }


    /*  public function getAllAlertsActions(Request $request)
      {

      }

      public function addNewAlertAction(Request $request)
      {

      } */
}
