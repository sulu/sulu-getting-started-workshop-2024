<?php

declare(strict_types=1);

namespace App\Controller\Website;

use App\Service\ScheduleService;
use Sulu\Bundle\WebsiteBundle\Controller\WebsiteController;
use Sulu\Component\Content\Compat\StructureInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ScheduleController extends WebsiteController
{
    public function __construct(private ScheduleService $scheduleService)
    {
    }

    public function indexAction(StructureInterface $structure, $preview = false, $partial = false): Response
    {
        return $this->renderStructure(
            $structure,
            [
                // here you can add some custom data for your template
                'schedule' => $this->scheduleService->getSchedule(),
            ],
            $preview,
            $partial
        );
    }
}
