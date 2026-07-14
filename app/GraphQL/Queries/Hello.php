<?php

namespace App\GraphQL\Queries;

final class Hello
{
    public function __invoke($_, array $args)
    {
        return "Hello GraphQL!";
    }
}