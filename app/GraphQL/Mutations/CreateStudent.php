<?php 

namespace App\GraphQL\Mutations;
use App\Models\Student;

final class CreateStudent
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        // TODO implement the resolver
        return Student::create([
            'name'=>$args['name'],
            'email'=>$args['email']
        ]);

    }
}
