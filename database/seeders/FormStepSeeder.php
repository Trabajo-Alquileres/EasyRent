<?php

namespace Database\Seeders;

use App\Models\FormSchema;
use Illuminate\Database\Seeder;
use App\Models\FormStep;

class FormStepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $steps = [
            [
                'form_schema_id' => FormSchema::where('slug', 'register_property')->first()->id, // Relación con el esquema
                'title' => '¿Cuántas publicaciones querés realizar?',
                'slug' => 'publication_count',
                'order' => 1,
                'description' => null,
                'icon' => null,
                'is_optional' => false,
                'is_active' => true,
            ],
            [
                'form_schema_id' => FormSchema::where('slug', 'register_property')->first()->id,
                'title' => 'Seleccione el tipo de propiedad',
                'slug' => 'type',
                'order' => 2,
                'description' => null,
                'icon' => null,
                'is_optional' => false,
                'is_active' => true,
            ],
            [
                'form_schema_id' => FormSchema::where('slug', 'register_property')->first()->id,
                'title' => 'Seleccione el subtipo de propiedad',
                'slug' => 'sub_type',
                'order' => 3,
                'description' => null,
                'icon' => null,
                'is_optional' => false,
                'is_active' => true,
            ],
            [
                'form_schema_id' => FormSchema::where('slug', 'register_property')->first()->id,
                'title' => '¿Alguna de las publicaciones que está cargando comparten características iguales entre sí?',
                'slug' => 'same_characteristics',
                'order' => 4,
                'description' => null,
                'icon' => null,
                'is_optional' => false,
                'is_active' => true,
            ],
            [
                'form_schema_id' => FormSchema::where('slug', 'register_property')->first()->id,
                'title' => 'Ubicación',
                'slug' => 'location',
                'order' => 5,
                'description' => null,
                'icon' => null,
                'is_optional' => false,
                'is_active' => true,
            ],
            [
                'form_schema_id' => FormSchema::where('slug', 'register_property')->first()->id,
                'title' => 'Características generales',
                'slug' => 'general_caracteritics',
                'order' => 6,
                'description' => null,
                'icon' => null,
                'is_optional' => false,
                'is_active' => true,
            ],
            [
                'form_schema_id' => FormSchema::where('slug', 'register_property')->first()->id,
                'title' => 'Comodidades Compartidas / Específicas',
                'slug' => 'amenitis',
                'order' => 7,
                'description' => null,
                'icon' => null,
                'is_optional' => false,
                'is_active' => true,
            ],
            [
                'form_schema_id' => FormSchema::where('slug', 'register_property')->first()->id,
                'title' => 'Tipo de Inquilino',
                'slug' => 'tenant_type',
                'order' => 8,
                'description' => null,
                'icon' => null,
                'is_optional' => false,
                'is_active' => true,
            ],
            [
                'form_schema_id' => FormSchema::where('slug', 'register_property')->first()->id,
                'title' => 'Cargar Encabezado de la Publicación',
                'slug' => 'front_page',
                'order' => 9,
                'description' => null,
                'icon' => null,
                'is_optional' => false,
                'is_active' => true,
            ],
        ];

        foreach ($steps as $step) {
            FormStep::create($step);
        }
    }
}
