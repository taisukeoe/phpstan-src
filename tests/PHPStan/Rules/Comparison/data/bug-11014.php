<?php declare(strict_types = 1);

namespace Bug11014;

class HelloWorld
{
    /** @param string[] $values */
    public function sayHello(array $values): void
    {
        foreach ($values as $value) {
            if (!is_string($value)) {
                throw new \Exception();
            }
        }
    }
}
