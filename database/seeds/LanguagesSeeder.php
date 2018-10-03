<?php

use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert(array_map(function ($row) {
            $date = new DateTime('now', new DateTimeZone('UTC'));
            $row['created_at'] = $date;
            $row['updated_at'] = $date;
            return $row;
        }, [
            ["code" => "de", "name" => "Deutsch"],
            ["code" => "en", "name" => "English"],
            ["code" => "es", "name" => "Español"],
            ["code" => "fr", "name" => "Français"],
            ["code" => "it", "name" => "Italiano"],
            ["code" => "ja", "name" => "日本語"],
            ["code" => "nl", "name" => "Nederlands"],
            ["code" => "pl", "name" => "Polski"],
            ["code" => "pt", "name" => "Português"],
            ["code" => "ru", "name" => "Русский"],
        ]));
    }
}
