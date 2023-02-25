<?php

declare(strict_types=1);

namespace TomasVotruba\PunchCard\ValueObject\Types;

use TomasVotruba\PunchCard\Contracts\TypeInterface;

final class IntegerType implements TypeInterface
{
    public function __construct(
        private readonly bool $isNullable = false
    ) {
    }

    public function renderTypeDoc(): string
    {
        return $this->renderTypeDeclaration();
    }

    public function renderTypeDeclaration(): string
    {
        return ($this->isNullable ? '?' : '') . 'int';
    }

    public function isNullable(): bool
    {
        return $this->isNullable;
    }
}
