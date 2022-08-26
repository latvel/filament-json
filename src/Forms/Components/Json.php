<?php

namespace Latvel\FilamentJson\Forms\Components;

use Filament\Forms\Components\Field;

class Json extends Field
{
    protected string $view = 'filament-json::json-field';

    protected function setUp(): void
    {
        parent::setUp();

        $this->columnSpan('full');
    }
}