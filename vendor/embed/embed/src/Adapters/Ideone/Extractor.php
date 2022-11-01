<?php
declare(strict_types = 1);

namespace Embed\Adapters\Ideone;

use Embed\Extractor as Base;

class Extractor extends Base
{
    public function createCustomDetectors(): array
    {
        return [
            'code' => new Detectors\Code($this),
        ];
    }
}
