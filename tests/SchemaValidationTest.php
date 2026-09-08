<?php

use Opis\JsonSchema\SchemaLoader;
use Opis\JsonSchema\Validator;

it('validates truths.json against the schema', function () {
    $data = json_decode(
        file_get_contents(__DIR__ . '/../src/data/truths.json')
    );

    expect($data)->not->toBeNull();

    $shared_schema = json_decode(
        file_get_contents(__DIR__ . '/../src/schema/shared.schema.json')
    );

    expect($shared_schema)->not->toBeNull();

    $truths_schema = json_decode(
        file_get_contents(__DIR__ . '/../src/schema/truths.schema.json')
    );

    expect($truths_schema)->not->toBeNull();

    $validator = new Validator();
    $validator->loader()->resolver()->registerRaw($shared_schema, 'schema:///shared.schema.json');

    $result = $validator->validate($data, $truths_schema);

    expect($result->isValid())
        ->toBeTrue(
            json_encode($result->error(), JSON_PRETTY_PRINT)
        );
});