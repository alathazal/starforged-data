<?php

namespace Alathazal\StarforgedData;

final class StarforgedData {
    public static function getDataPath(DataTypes $dataType): string {
        if (!file_exists(__DIR__ . '/data/' . $dataType->value . '.json'))
            throw new \LogicException("
                The data file for " . $dataType->value . " does not exist yet.  Please check the TODO
                and CHANGELOG files in the repository for more information.
            ");

        return __DIR__ . '/data/' . $dataType->value . '.json';
    }

    public static function getImagePath(string $filename): string {
        return __DIR__ . '/images/' . $filename;
    }
}
