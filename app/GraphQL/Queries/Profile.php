<?php

namespace App\GraphQL\Queries;

final class Profile
{
    public function __invoke($_, array $args)
    {
        return [
            'phone' => '9800000000',
            'address' => 'Kathmandu',
        ];
    }
}