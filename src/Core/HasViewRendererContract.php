<?php

declare(strict_types=1);

namespace MoonShine\Contracts\Core;

use Closure;
use Illuminate\Contracts\Support\CanBeEscapedWhenCastToString;
use Illuminate\Contracts\Support\Renderable;
use JsonSerializable;
use Stringable;

interface HasViewRendererContract extends
    HasStructureContract,
    Stringable,
    JsonSerializable,
    CanBeEscapedWhenCastToString
{
    public function getView(): string;

    public function getCustomViewData(): array;

    public function customView(string $view, array $data = []): static;

    public function shouldRender(): bool;

    public function onBeforeRender(Closure $onBeforeRender): static;

    public function render(): Renderable|Closure|string;

    public function flushRenderCache(): static;

    public function toStructure(bool $withStates = true): array;

    public function toArray(): array;
}
