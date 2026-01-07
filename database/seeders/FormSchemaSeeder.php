<?php

namespace Database\Seeders;

use App\Models\FormSchema;
use Illuminate\Database\Seeder;

class FormSchemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $schemas = [
            [
                'slug' => 'register_property',
                'title' => 'Publicar Propiedad',
                'description' => 'Formulario para registrar una o varias publicaciones. Versión 1',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($schemas as $schema) {
            FormSchema::create($schema);
        }
    }
}
