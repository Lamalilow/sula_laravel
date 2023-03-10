<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\UserInfo;
use App\Models\UserSetting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        User::insert([
            'id' => '1',
            'role' => 'admin',
            'login' => 'admin',
            'password' => Hash::make('123456'),

        ]);
        UserInfo::insert([
            'user_id' => '1',
            'name' => 'Админ',
            'age' => '19',
            'gender' => 'м',
            'city' => 'Челябинск',
            'description' => 'Админ 19 лет. живу в челябинске занимаюсь спортом. До этого работал в такси, но решил уйти на работу в администрацию города.
            Есть девушка, которую очень люблю.
            Люблю смотреть фильмы ужасов, а особенно комедии.
            По характеру я добрый и отзывчивый человек.
            У меня есть брат, который старше меня на 6 лет.
            Он часто приезжает ко мне в гости, мы вместе отдыхаем.
            Я очень люблю играть в компьютерные игры, особенно в ГТА.
            В свободное время я люблю смотреть телевизор.
            Также люблю читать книги.
            Мой любимый писатель - это Стивен Кинг.',
            'photo' => 'dsdsdsd.jpg',
        ]);
        UserSetting::insert([
            'user_id' => '1',
            'search_age_from' => '18',
            'search_age_to' => '20',
            'search_male' => 1,
            'search_female'  => 1,
        ]);
        User::insert([
            'id' => '2',
            'login' => 'user',
            'password' => Hash::make('123456'),

        ]);
        UserInfo::insert([
            'user_id' => '2',
            'name' => 'Иван1',
            'age' => '18',
            'gender' => 'м',
            'city' => 'Челябинск',
            'description' => 'Иван 18 лет. живу в челябинске занимаюсь спортом. До этого работал в такси, но решил уйти на работу в администрацию города.
            Есть девушка, которую очень люблю.
            Люблю смотреть фильмы ужасов, а особенно комедии.
            По характеру я добрый и отзывчивый человек.
            У меня есть брат, который старше меня на 6 лет.
            Он часто приезжает ко мне в гости, мы вместе отдыхаем.
            Я очень люблю играть в компьютерные игры, особенно в ГТА.
            В свободное время я люблю смотреть телевизор.
            Также люблю читать книги.
            Мой любимый писатель - это Стивен Кинг.',
            'photo' => 'qoRIfFG9gyNISJdb3ep5sJ00JxvMtlAhHUYGnggu.jpg',
        ]);
        UserSetting::insert([
            'user_id' => '2',
            'search_age_from' => '18',
            'search_age_to' => '20',
            'search_male' => 0,
            'search_female' => 1,
        ]);
        User::insert([
            'id' => '3',
            'login' => 'user1',
            'password' => Hash::make('123456'),

        ]);
        UserInfo::insert([
            'user_id' => '3',
            'name' => 'София',
            'age' => '18',
            'gender' => 'ж',
            'city' => 'Челябинск',
            'description' => 'София 18 лет. живу в челябинске занимаюсь спортом. До этого работал в такси, но решил уйти на работу в администрацию города.
            Есть девушка, которую очень люблю.
            Люблю смотреть фильмы ужасов, а особенно комедии.
            По характеру я добрый и отзывчивый человек.
            У меня есть брат, который старше меня на 6 лет.
            Он часто приезжает ко мне в гости, мы вместе отдыхаем.
            Я очень люблю играть в компьютерные игры, особенно в ГТА.
            В свободное время я люблю смотреть телевизор.
            Также люблю читать книги.
            Мой любимый писатель - это Стивен Кинг.',
            'photo' => 'D9hu5M5TpVD8KVo2yQ6v4E5vqn2RwpZfoYe8hD5X.jpg',
        ]);
        UserSetting::insert([
            'user_id' => '3',
            'search_age_from' => '18',
            'search_age_to' => '20',
            'search_male' => 1,
            'search_female' => 0,
        ]);
        User::insert([
            'id' => '4',
            'login' => 'user4',
            'password' => Hash::make('123456'),

        ]);
        UserInfo::insert([
            'user_id' => '4',
            'name' => 'Иван2',
            'age' => '24',
            'gender' => 'м',
            'city' => 'Челябинск',
            'description' => 'Иван 19 лет. живу в челябинске занимаюсь спортом. До этого работал в такси, но решил уйти на работу в администрацию города.
            Есть девушка, которую очень люблю.
            Люблю смотреть фильмы ужасов, а особенно комедии.
            По характеру я добрый и отзывчивый человек.
            У меня есть брат, который старше меня на 6 лет.
            Он часто приезжает ко мне в гости, мы вместе отдыхаем.
            Я очень люблю играть в компьютерные игры, особенно в ГТА.
            В свободное время я люблю смотреть телевизор.
            Также люблю читать книги.
            Мой любимый писатель - это Стивен Кинг.',
            'photo' => 'D9hu5M5TpVD8KVo2yQ6v4E5vqn2RwpZfoYe8hD5X.jpg',
        ]);
        UserSetting::insert([
            'user_id' => '4',
            'search_age_from' => '18',
            'search_age_to' => '100',
            'search_male' => 1,
            'search_female'  => 1,
        ]);
        User::insert([
            'id' => '5',
            'login' => 'user5',
            'password' => Hash::make('123456'),

        ]);
        UserInfo::insert([
            'user_id' => '5',
            'name' => 'Иван3',
            'age' => '19',
            'gender' => 'м',
            'city' => 'Челябинск',
            'description' => 'Иван 19 лет. живу в челябинске занимаюсь спортом. До этого работал в такси, но решил уйти на работу в администрацию города.
            Есть девушка, которую очень люблю.
            Люблю смотреть фильмы ужасов, а особенно комедии.
            По характеру я добрый и отзывчивый человек.
            У меня есть брат, который старше меня на 6 лет.
            Он часто приезжает ко мне в гости, мы вместе отдыхаем.
            Я очень люблю играть в компьютерные игры, особенно в ГТА.
            В свободное время я люблю смотреть телевизор.
            Также люблю читать книги.
            Мой любимый писатель - это Стивен Кинг.',
            'photo' => 'D9hu5M5TpVD8KVo2yQ6v4E5vqn2RwpZfoYe8hD5X.jpg',
        ]);
        UserSetting::insert([
            'user_id' => '5',
            'search_age_from' => '18',
            'search_age_to' => '35',
            'search_male' => 1,
            'search_female'  => 0,
        ]);
    }
}
