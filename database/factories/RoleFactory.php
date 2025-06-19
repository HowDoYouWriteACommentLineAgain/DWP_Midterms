<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function describe($letter)
    {
        switch ($letter) {
            case 'T':
                return 'Teacher';
                break;
            case 'A':
                return 'Admin';
                break;
            default:
            case 'S':
                return 'Student';
                break;                    
        };
    }

    public function definition(): array
    {
        $roleName = fake()->randomElement(['T', 'S', 'A']);
        
        return [
            'role_name' => $roleName,
            'description' => RoleFactory::describe($roleName),
            'timestamps' => fake()->dateTime()

        ];
    }
}
