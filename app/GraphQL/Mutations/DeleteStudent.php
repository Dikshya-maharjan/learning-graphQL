<?php

namespace App\GraphQL\Mutations;

use App\Models\Student;

final class DeleteStudent
{
    public function __invoke($_, array $args)
    {
        $student = Student::findOrFail($args['id']);

        $student->delete();

        return $student;
    }
}  