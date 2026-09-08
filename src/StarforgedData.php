<?php

namespace Alathazal\StarforgedData;

final class StarforgedData {
    private string $path = __DIR__;

    public function getDataPath(DataTypes $dataType): string {
        if (!file_exists($this->path . '/data/' . $dataType->value))
            throw new \LogicException("
                The data file for " . $dataType->value . " does not exist yet.  Please check the TODO
                and CHANGELOG files in the repository for more information.
            ");

        return $this->path . '/data/' . $dataType->value;
    }

    public function getImagePath(string $filename): string {
        return $this->path . '/images/' . $filename;
    }
}
