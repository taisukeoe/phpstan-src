<?php declare(strict_types = 1);

namespace Bug11014;

class HelloWorld
{
    /** @param string[] $values */
    public function sayHello(array $values): void
    {
        array_map(function ($item): string {
            if (!is_string($item)) {
                throw new \Exception();
            }

            return $item;
        }, $values);

        array_map(fn ($item): string => is_string($item) ? $item : throw new \Exception(), $values);
    }
}
