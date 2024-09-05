<?php

declare(strict_types=1);

namespace MoonShine\Contracts\Core\DependencyInjection;

use MoonShine\Contracts\Core\PagesContract;
use MoonShine\Contracts\Core\ResourcesContract;
use Psr\Container\ContainerInterface;

interface CoreContract
{
    /**
     * @template-covariant T
     * @param class-string<T>|null $id
     * @return T|ContainerInterface
     */
    public function getContainer(?string $id = null, mixed $default = null, ...$parameters): mixed;

    /**
     * @template-covariant I
     * @param class-string<I> $class
     * @return ?I
     */
    public function getInstances(string $class): mixed;

    public function getRenderer(): ViewRendererContract;

    public function getRequest(): RequestContract;

    public function getRouter(): RouterContract;

    public function getConfig(): ConfiguratorContract;

    public function getTranslator(): TranslatorContract;

    public function getFieldsCollection(iterable $items = []): FieldsContract;

    public function resources(array $data, bool $newCollection = false): static;

    public function getResources(): ResourcesContract;

    public function pages(array $data, bool $newCollection = false): static;

    public function getPages(): PagesContract;

    public function flushState(): void;
}
