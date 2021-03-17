<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
	    'title' => $faker->randomElement([
		    'موبایل سامسونگ',
		    'لپ تاپ سونی',
		    'لپ تاپ فوجیتسو',
		    'مچبند شیائومی',
		    'اسپیکر هارمن کاردن',
		    'مودم ADSL',
		    'پاور بانک',
		    'دوربین',
		    'کابل صدا',
		    'باتری موبایل',
		    'کتابخوان',
		    'ال جی مانیتور',
		    'تبلت سامسونگ',
	    ]),
	    'description' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه .',

	    'image'  => $faker->randomElement([
			'https://s3.ir-thr-at1.arvanstorage.com/publicbayafile/fdee19f9-68a5-49f6-a6d3-a8e9ce9516ab.jpg',
			'https://s3.ir-thr-at1.arvanstorage.com/publicbayafile/e66356c2-09e5-4ad7-9d79-db5194499a60.jpg',
			'https://s3.ir-thr-at1.arvanstorage.com/product-8/250_250/8e8d3a5b-b248-40b7-a3a0-f4bbad5a887b.jpg',
			'https://s3.ir-thr-at1.arvanstorage.com/publicbayafile/fd1e73d6-9c9c-4471-96ad-0c03a1ec1de4.jpg',]),
	    'price' => $faker->randomElement([
		150000 , 450000 , 252000 , 2521000 , 250000 , 150000 , 850000 , 650000, 450000 , 950000 , 410000 , 320000
	    ]),
	    'stock'=> $faker->randomDigitNotNull,
		'user_id' => 1,
		'category_id' => $faker->randomElement([1,2])

    ];
});