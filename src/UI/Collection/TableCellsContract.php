<?php

declare(strict_types=1);

namespace MoonShine\Contracts\UI\Collection;

use Closure;
use Illuminate\Support\Collection;
use Illuminate\Support\Enumerable;
use MoonShine\Contracts\Core\DependencyInjection\FieldsContract;
use MoonShine\Contracts\UI\ComponentContract;

/**
 * @template T of ComponentContract
 * @template-extends Enumerable<array-key, T>
 *
 * @mixin Collection
 */
interface TableCellsContract extends Enumerable
{
    public function pushFields(FieldsContract $fields, ?Closure $builder = null, int $startIndex = 0): self;

    public function pushCell(Closure|string $content, ?int $index = null, ?Closure $builder = null, array $attributes = []): self;

    public function pushWhen(Closure|bool $condition, Closure $value): self;

    public function pushCellWhen(Closure|bool $condition, Closure|string $content, ?int $index = null, ?Closure $builder = null): self;
}
