<?php

namespace Database\Factories;

use App\Models\admin;
use App\Models\Roles;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone'=>'0585861855',
            'remember_token' => Str::random(10),
        ];
    }
//     $factory->define(Admin::class, function (Faker $faker) {
//     return [
//         'admin_name' => $faker->name,
//         'admin_email' => $faker->unique()->safeEmail,
//         'admin_phone' => '0932023992',
//         'admin_password' => 'e10adc3949ba59abbe56e057f20f883e', // password
//     ];
// });
// $factory->afterCreating(Admin::class, function($admin,$faker){
//     $roles = Roles::where('name','user')->get();
//     $admin->roles()->sync($roles->pluck('id_roles')->toArray());
// });

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    // public function unverified()
    // {
    //     return $this->state(function (array $attributes) {
    //         return [
    //             'email_verified_at' => null,
    //         ];
    //     });
    // }
}
