<?php

namespace Database\Seeders;

use App\Models\Evaluation;
use App\Models\EvaluationItem;
use App\Models\Office;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offices = Office::all();

        $dates = [
            '2025-01-01',
            '2025-02-01',
            '2025-03-01',
            '2025-04-01',
            '2025-05-01',
            '2025-06-01',
        ];

        foreach($dates as $date) {
            foreach($offices as $office) {
                for($i = 0; $i < 10; $i++) {
                    $eval = Evaluation::factory()->create([
                        'office_id' => $office->id,
                        'created_at' => $date,
                        'updated_at' => $date,
                    ]);

                    for($i=0; $i < 10; $i++) {
                        EvaluationItem::factory()->create([
                            'evaluation_id' => $eval->id,
                            'question_number' => $i,
                            'created_at' => $date,
                            'updated_at' => $date,
                        ]);
                    }
                }
            }
        }

    }
}
