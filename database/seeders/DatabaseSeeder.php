<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Contact;
use App\Models\Email;
use App\Models\Phone;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Contact::factory()->count(5000)->create();

        $contacts = Contact::all();

        foreach ($contacts as $contact) {
            $addressCount = rand(1, 5);
            $contact->addresses()->saveMany(Address::factory()->count($addressCount)->make());

            $emailCount = rand(1, 5);
            $contact->emails()->saveMany(Email::factory()->count($emailCount)->make());

            $phoneCount = rand(1, 5);
            $contact->phones()->saveMany(Phone::factory()->count($phoneCount)->make());
        }
    }
}
