<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'user_type'=>'donator',
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});


$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'user_id'=>App\User::all()->random()->id,
        'name'=>$name=$faker->name,
        'slug'=>str_slug($name),
        'vklink'=>$faker->url,
        'fblink'=>$faker->url,	
        'instlink'=>$faker->url,
        'bio'=>$faker->paragraph(rand(2,10)),
        'logo'=>'avatar.jpg',
        'verify'=>rand(0,2),
        'organisation'=>rand(0,1),
    ];
});

$factory->define(App\Album::class, function (Faker $faker) {
    return [
        'user_id'=>App\User::all()->random()->id,
        'pets_id'=>App\Pets::all()->random()->id,
        'company_id'=>App\Pets::all()->random()->id,
          'image_url'=>'Rl92Nl4f83yYFtCE5yXL.jpeg',
          'image_url_resized'=>'v3qcTI2SPz7AkmFevft3.jpeg',
          
    ];
});

$factory->define(App\Pets::class, function (Faker $faker) {
    return [
        'user_id'=>App\User::all()->random()->id,
        'company_id'=>App\User::all()->random()->id,
        'title'=>$title=$faker->name, 
        'subtitle'=>$faker->paragraph(rand(1,2)),
        'slug'=>str_slug($title),
        'old'=>rand(0,1),
        'inv'=>rand(0,1),
        'hands'=>rand(0,1),
        'auto'=>rand(0,1),
        'piar'=>rand(0,1),
        'perederzka'=>rand(0,1),
        'photo'=>rand(0,1),
        'kurator'=>rand(0,1),
         'donor'=>rand(0,1),
         'gurskogo'=>rand(0,1),
         'naiden'=>rand(0,1),
         'city'=>'minsk',
        'description'=>$faker->paragraph(rand(5,10)),
      'stories_id'=>rand(1,5),
      'transactions_id'=>rand(1,5),
      'category_id'=>rand(1,5),
      'status'=>rand(0,1),
      'amount'=>rand(1,1000),
    ];
});


