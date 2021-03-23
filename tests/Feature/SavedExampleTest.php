<?php

namespace Tests\Feature;

use App\Models\Saved;
use App\Models\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SavedExampleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $saved = Saved::factory()->create();

        $saved->description = "Test Description";

        $saved->save();

        $user = User::find(1);

        $user->name = "Nolan";

        $user->save();

        $this->assertEquals("Nolan", $user->name);

        $saved = $user->saveds;
    }
}
