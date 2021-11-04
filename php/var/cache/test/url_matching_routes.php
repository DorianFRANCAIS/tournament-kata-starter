<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/participant' => [[['_route' => 'participant', '_controller' => 'App\\Controller\\ParticipantController::index'], null, null, null, false, false, null]],
        '/api/ping' => [[['_route' => 'ping', '_controller' => 'App\\Controller\\PingController::index'], null, null, null, false, false, null]],
        '/api/tournaments' => [[['_route' => 'create_tournament', '_controller' => 'App\\Controller\\TournamentController::addTournament'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/tournaments/([^/]++)(?'
                        .'|(*:38)'
                        .'|/participants(*:58)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:94)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:124)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:160)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'get_tournament', '_controller' => 'App\\Controller\\TournamentController::getTournament'], ['id'], ['GET' => 0], null, false, true, null]],
        58 => [[['_route' => 'add_participant_to_tournament', '_controller' => 'App\\Controller\\TournamentController::addParticipantToTournament'], ['tournamentId'], ['POST' => 0], null, false, false, null]],
        94 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        124 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        160 => [
            [['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
