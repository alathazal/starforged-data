<?php

use Opis\JsonSchema\Schema;
use Opis\JsonSchema\Validator;

describe('JSON Validity', function () {
    foreach (['asset_types', 'assets', 'encounters', 'move_categories', 'moves', 'oracles', 'truths'] as $dataFile) {
        it("{$dataFile}.json parses correctly", function () use ($dataFile) {
        
            $data = json_decode(
                file_get_contents(__DIR__ . "/../src/data/{$dataFile}.json")
            );

            expect($data)->not->toBeNull();
        });
    }
});