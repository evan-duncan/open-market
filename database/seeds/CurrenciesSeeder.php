<?php

use Illuminate\Database\Seeder;

class CurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert(array_map(function ($row) {
            $date = new DateTime('now', new DateTimeZone('UTC'));
            $row['created_at'] = $date;
            $row['updated_at'] = $date;
            return $row;
        }, [
            ["code" =>"CAD", "symbol" => "$", "name" => "Canadian Dollar"],
            ["code" =>"EUR", "symbol" => "€", "name" => "Euro"],
            ["code" =>"GBP", "symbol" => "£", "name" => "British Pound"],
            ["code" =>"AUD", "symbol" => "$", "name" => "Australian Dollar"],
            ["code" =>"DKK", "symbol" => "kr", "name" => "Danish Krone"],
            ["code" =>"HKD", "symbol" => "$", "name" => "Hong Kong Dollar"],
            ["code" =>"NZD", "symbol" => "$", "name" => "New Zealand Dollar"],
            ["code" =>"NOK", "symbol" => "kr", "name" => "Norwegian Krone"],
            ["code" =>"SGD", "symbol" => "$", "name" => "Singapore Dollar"],
            ["code" =>"SEK", "symbol" => "kr", "name" => "Swedish Krona"],
            ["code" =>"CHF", "symbol" => "CHF", "name" => "Swiss Franc"],
            ["code" =>"TWD", "symbol" => "NT$", "name" => "Taiwan New Dollar"],
        ]));
    }
}
