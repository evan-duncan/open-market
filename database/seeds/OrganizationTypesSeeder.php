<?php

use Illuminate\Database\Seeder;

class OrganizationTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = new \DateTime('now', new \DateTimeZone('UTC'));
        $legalID = DB::table('organization_types')->insertGetId([
            'type' => 'legal',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        $informalID = DB::table('organization_types')->insertGetID([
            'type' => 'informal',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        DB::table('organization_types')->insert([
            [
                'type' => 'corporation',
                'parent_id' => $legalID,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'type' => 'government',
                'parent_id' => $legalID,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'type' => 'cooperative',
                'parent_id' => $legalID,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'type' => 'team',
                'parent_id' => $informalID,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'type' => 'family',
                'parent_id' => $informalID,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'type' => 'other',
                'parent_id' => $informalID,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
