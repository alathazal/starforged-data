<?php

use Opis\JsonSchema\Schema;
use Opis\JsonSchema\Validator;

describe('JSON Validity', function () {
    it('truths.json parses correctly', function () {
        $data = json_decode(
            file_get_contents(__DIR__ . '/../src/data/truths.json')
        );
        
        expect($data)->not->toBeNull();
    });
});