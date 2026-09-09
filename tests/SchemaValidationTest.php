<?php

use Opis\JsonSchema\Validator;

describe('Validates data files against their schema', function () {
    foreach (['asset_types', 'assets', 'encounters', 'moves', 'oracles', 'truths'] as $dataFile) {
        it("{$dataFile}.json validates correctly", function () use ($dataFile) {
            $data = json_decode(
                file_get_contents(__DIR__ . "/../src/data/{$dataFile}.json")
            );

            expect($data)->not->toBeNull();

            $schema = json_decode(
                file_get_contents(__DIR__ . "/../src/schema/schema.{$dataFile}.json")
            );

            expect($schema)->not->toBeNull();

            $result = (new Validator())->validate($data, $schema);

            expect($result->isValid())
                ->toBeTrue(
                    json_encode($result->error(), JSON_PRETTY_PRINT)
                );
        });
    }
});