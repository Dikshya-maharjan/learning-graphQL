<?php

namespace App\GraphQL\Queries;

use App\Models\Student;

final class StudentById
{
    public function __invoke($_, array $args)
    {
        return Student::find($args['id']);
    }
}