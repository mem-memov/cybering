<?php

$app->get('/', function ($request, $response, $args) {
    return $response->withStatus(200)->write('Hello World!');
});

$app->post('/authors', function ($request, $response, $args) {
    $cybe = cybe();
    $author = $cybe->createAuthor();
    return $response->withStatus(200)->withJson([
        'id' => $author->id()
    ]);
});

$app->post('/utterings', function ($request, $response, $args) {
    $cybe = cybe();
    $author = $cybe->readAuthor();
    return $response->withStatus(200)->withJson([
        'id' => $author->id()
    ]);
});
