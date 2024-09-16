<?php

declare(strict_types=1);

namespace MoonShine\Contracts\UI;

use Closure;
use MoonShine\Contracts\Core\DependencyInjection\FieldsContract;

/**
 * @template T of FieldsContract
 */
interface HasFieldsContract
{
    /**
     * @param  T|(Closure(T $ctx): T)|iterable  $fields
     *
     * @return static
     */
    public function fields(FieldsContract|Closure|iterable $fields): static;

    public function hasFields(): bool;

    /**
     * @return T
     */
    public function getFields(): FieldsContract;

    /**
     * @return T
     */
    public function getPreparedFields(): FieldsContract;
}
