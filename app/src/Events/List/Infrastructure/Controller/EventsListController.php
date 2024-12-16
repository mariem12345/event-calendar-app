<?php

namespace App\Events\List\Infrastructure\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class EventsListController
{

    #[Route('/events-list', name: 'events_list', methods: ['GET'])]
    public function __invoke(): JsonResponse
    {
        $response = ($this->EventsList)();
        $jsonData = json_encode($response->orders(), JSON_PRETTY_PRINT);

        return new JsonResponse($jsonData, Response::HTTP_OK, [], true);    }
}