<?php


class MagicList
{
    private array $parameters;

    public function __set($name, $value)
    {
        $this->parameters[$name] = $value;
    }

    public function __get($name)
    {
        return $this->parameters[$name];
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }

    public function __toString()
    {
        return implode(', ', $this->parameters);
    }
}