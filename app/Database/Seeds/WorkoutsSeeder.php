<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class WorkoutsSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {

        $data = [
            'name' => 'general',
            'created_at' => new Time('now'),
            'updated_at' => new Time('now'),
        ];

        $this->db->table('workout_categories')->insert($data);


        $workouts = ['Push Up', 'Sit Up', 'Squat Jump'];

        for ($i = 0; $i < count($workouts); $i++) {
            $data = [
                'name' => $workouts[$i],
                'slug' => url_title($workouts[$i], '-', true),
                'description' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, veritatis!</p>',
                'image' => "",
                'workout_time' => "Morning",
                'iteration' => '5'
            ];

            $this->db->table('workouts')->insert($data);

            $this->db->table('workout_has_categories')->insert([
                'id_workout' => $i + 1,
                'id_workout_category' => 1
            ]);
        }

        $steps = [
            ['Get down on all fours, placing your hands slightly wider than your shoulders', 'Straighten your arms and legs.', 'Lower your body until your chest nearly touches the floor.', 'Pause, then push yourself back up.', 'Repeat.'],
            ['Have your knees bent and the balls of your feet and heels placed flat on the ground.', ' Place your hands on opposing shoulders, so that your arms are crossed over your chest, or behind your head. This allows you a central rising point.', ' Tighten your abdominal muscles gently by drawing in your belly button to your spine.', 'Keeping your heels on the ground and your toes flat to the ground, slowly and gently lift your head first, followed by your shoulder blades. Focus your eyes on your bent knees, all the while gently contracting the abdominal muscles. Pull up from the floor until you are at a ninety-degree angle, or when the elbows are on, or past, the knees.', 'Hold the position for a second. Slowly bring the torso back to the floor but try to keep it slightly elevated off the ground. This means not to place your back flat to the ground but to keep a slight, yet relaxed, arch.', 'Repeat steps 3-5 for the remainder of the exercise. Only do two to three if you are a beginner and slowly build up the amount over time, as your strength increases.'],
            ['Stand with your feet shoulder-width apart.', 'Start by doing a regular squat, engage your core, and jump up explosively.', 'When you land, lower your body back into the squat position to complete one rep. Make sure you land with your entire foot on the ground. Be sure to land as quietly as possible, which requires control.', 'Do two to three sets of 10 reps.']
        ];

        for ($i = 0; $i < count($steps); $i++) {
            for ($j = 0; $j < count($steps[$i]); $j++) {
                $data = [
                    'id_workout' => $i + 1,
                    'name' => "Step " . ($j + 1),
                    'description' => $steps[$i][$j],
                    'image' => "workout/steps/Step" . ($j + 1) . ".jpg",
                ];

                $this->db->table('workout_steps')->insert($data);
            }
        }
    }
}
