<?php


class MagicSql
{
    private $sql;

    public function __call($name, $arguments)
    {
        $this->sql .= ' ' . strtoupper($name);
        if (count($arguments)) {
            $this->sql .= ' ' . $arguments[0];
        }
        return $this;
    }

    public function __toString()
    {
        return $this->sql;
    }
}