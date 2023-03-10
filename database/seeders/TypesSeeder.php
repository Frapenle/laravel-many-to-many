<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typesName = ['Frontend', 'Backend', 'Fullstack'];

        foreach ($typesName as $type) {
            $newType = new Type();
            $newType->name = $type;
            $newType->save();
        }
    }
}
