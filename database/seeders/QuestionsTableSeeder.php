<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questions')->insert([
            [
                'id' => 1,
                'questionaire' => 'SB',
                'factor' => 'membership',
                'question' => 'Siento que pertenezco a la comunidad informática.',
                'options_type' => 'agreement7',
                'deleted_at' => null,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'questionaire' => 'SB',
                'factor' => 'membership',
                'question' => 'Siento una conexión con la comunidad informática.',
                'options_type' => 'agreement7',
                'deleted_at' => null,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'questionaire' => 'SB',
                'factor' => 'acceptance+',
                'question' => 'Me sentí aceptadx.',
                'options_type' => 'agreement7',
                'deleted_at' => null,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 4,
                'questionaire' => 'SB',
                'factor' => 'acceptance+',
                'question' => 'Me sentí respetadx.',
                'options_type' => 'agreement7',
                'deleted_at' => null,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 5,
                'questionaire' => 'SB',
                'factor' => 'acceptance+',
                'question' => 'Me sentí valoradx.',
                'options_type' => 'agreement7',
                'deleted_at' => null,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 6,
                'questionaire' => 'SB',
                'factor' => 'acceptance+',
                'question' => 'Me sentí apreciadx.',
                'options_type' => 'agreement7',
                'deleted_at' => null,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 7,
                'questionaire' => 'SB',
                'factor' => 'acceptance-',
                'question' => 'Nunca me sentí desatentidx.',
                'options_type' => 'agreement7',
                'deleted_at' => null,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 8,
                'questionaire' => 'SB',
                'factor' => 'acceptance-',
                'question' => 'Nadie fue negligente con mi aprendizaje o conmigo.',
                'options_type' => 'agreement7',
                'deleted_at' => null,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 9,
                'questionaire' => 'SB',
                'factor' => 'acceptance-',
                'question' => 'Nunca me sentí excluidx.',
                'options_type' => 'agreement7',
                'deleted_at' => null,
                'created_at' => null,
                'updated_at' => null,
            ],
        [
                'id' => 10,
                'questionaire' => 'SB',
                'factor' => 'acceptance-',
                'question' => 'Nunca me sentí insignificante.',
                'options_type' => 'agreement7',
                'deleted_at' => null,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 11,
                'questionaire' => 'SB',
                'factor' => 'trust',
                'question' => 'Incluso cuando me iba mal, mis instructores tenían fe en mi potencial.',
                'options_type' => 'agreement7',
                'deleted_at' => null,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 12,
                'questionaire' => 'SB',
                'factor' => 'trust',
                'question' => 'Mis instructores se comprometieron a ayudarme a aprender.',
                'options_type' => 'agreement7',
                'deleted_at' => null,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 13,
                'questionaire' => 'SB',
                'factor' => 'trust',
                'question' => 'Sentí que no tenía que ponerme a prueba constantemente.',
                'options_type' => 'agreement7',
                'deleted_at' => null,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 14,
                'questionaire' => 'SB',
                'factor' => 'trust',
                'question' => 'Sentí que los materiales de evaluación eran imparciales.',
                'options_type' => 'agreement7',
                'deleted_at' => null,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 15,
                'questionaire' => 'SB',
                'factor' => 'membership',
                'question' => 'Siento que en este momento ya formo parte de la comunidad informática.',
                'options_type' => 'agreement7',
                'deleted_at' => null,
                'created_at' => null,
                'updated_at' => null,
            ],

        ]);
    }
}
