<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
		$logo = $faker->image('public/storage/',100,100);
    return [
        'created_at' => now(),
        'updated_at' => now(),
        'name' => $faker->company,
        'email' => $faker->unique()->safeEmail,
        // Need to trim off public/storage when storing to database
				'logo' => substr($logo,16,strlen($logo)),
        'website' => $faker->url,
    ];
});
