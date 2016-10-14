<?php
namespace CE\PermanenceBundle\EventListener;

/**
 * Created by PhpStorm.
 * User: T0138987
 * Date: 12/10/2016
 * Time: 12:47
 */

use ADesigns\CalendarBundle\Event\CalendarEvent;
use ADesigns\CalendarBundle\Entity\EventEntity;
use Doctrine\ORM\EntityManager;

class CalendarEventListener
{
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function loadEvents(CalendarEvent $calendarEvent)
    {
        $startDate = $calendarEvent->getStartDatetime();
        $endDate = $calendarEvent->getEndDatetime();

        // The original request so you can get filters from the calendar
        // Use the filter in your query for example

        $request = $calendarEvent->getRequest();
        $filter = $request->get('filter');

        $permanenceEvents = $this->entityManager->getRepository('CEPermanenceBundle:Permanence')->findAllBetween($startDate, $endDate);

        foreach($permanenceEvents as $permanenceEvent) {

            $libelle = $permanenceEvent->getLibelle()." - ".$permanenceEvent->getUser()->getFirstname();
            // create an event with a start/end time, or an all day event
            if ($permanenceEvent->getAllDay() === false) {
                $eventEntity = new EventEntity($libelle, $permanenceEvent->getStartDate(), $permanenceEvent->getEndDate());
            } else {
                $eventEntity = new EventEntity($libelle, $permanenceEvent->getStartDate(), null, true);
            }

            //optional calendar event settings
            $eventEntity->setAllDay(true); // default is false, set to true if this is an all day event
            $eventEntity->setBgColor('#FF0000'); //set the background color of the event's label
            $eventEntity->setFgColor('#FFFFFF'); //set the foreground color of the event's label
            //TODO : Faire un vrai lien en créant un service ou en injectant le routeur ou en mettant l'adresse en dur comme un gros porc
            //$eventEntity->setUrl($this->get('router')->generate('permanence_management_create',array('id' => $permanenceEvent->getId()))); // url to send user to when event label is clicked
            $eventEntity->setCssClass('my-custom-class'); // a custom class you may want to apply to event labels
            $eventEntity->setId($permanenceEvent->getId());

            //finally, add the event to the CalendarEvent for displaying on the calendar
            $calendarEvent->addEvent($eventEntity);
        }

    }
}