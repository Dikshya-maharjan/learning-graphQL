<?php

namespace App\GraphQL\Mutations;

use App\Models\Student;

final class UpdateStudent
{
    public function __invoke($_, array $args)
    {
        $student = Student::findOrFail($args['id']);

        $student->update([
            'name'  => $args['name'],
            'email' => $args['email'],
        ]);

        return $student;
    }
}