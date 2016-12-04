<?php

$app->get('/', function ($request, $response, $args) {

    $args = [];
    return $this->renderer->render($response, 'index.phtml', $args);

});


$app->get('/status', function ($request, $response, $args) {

    $this->logger->addDebug("Checking App Status");

    return $response->withJson(
        array('status' => 'ok')
    );

});
