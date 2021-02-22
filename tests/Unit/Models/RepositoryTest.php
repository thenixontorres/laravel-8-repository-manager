<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\User;
use App\Models\Repository;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RepositoryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_belongs_to_user()
    {
        $repository = Repository::factory()->create();

        $this->assertInstanceOf(User::class, $repository->user);
    }
}
