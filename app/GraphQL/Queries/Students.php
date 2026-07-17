<?php 

namespace App\GraphQL\Queries;
use App\Models\Student;

final class Students
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        // return Student::all();
                return Student::all();

    }

}
