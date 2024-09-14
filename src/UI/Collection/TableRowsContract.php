<?php

declare(strict_types=1);

namespace MoonShine\Contracts\UI\Collection;

use Closure;
use Illuminate\Support\Collection;
use Illuminate\Support\Enumerable;

/**
 * @template-extends Enumerable<array-key, TableCellsContract>
 *
 * @mixin Collection
 */
interface TableRowsContract extends Enumerable
{
    public function pushRow(TableCellsContract $cells, int|string|null $key, ?Closure $builder = null): self;
}
