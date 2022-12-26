<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use App\Models\User;
use Database\Factories\UserFactory;
use Database\Factories\CategoryFactory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryControllerTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function it_stores_data()
    {
        $user = User::factory()->create();

        //Acting as berfungsi sebagai autentikasi, jika kita menghilangkannya maka akan error.
        $response = $this->actingAs($user)
            ->post(route('category.store'), [
                'name' => $this->faker->word(8, true),
                'slug' => $this->faker->slug,
            ]);
        //Tuntutan status 302, yang berarti redirect status code.
        $response->assertStatus(302);

        //Tuntutan bahwa abis melakukan POST URL akan dialihkan ke URL product atau routenya adalah product.index
        $response->assertRedirect(route('categories'));
    }

    /** @test */
    public function it_destroy_data()
    {
        $user = User::factory()->create();
        $category = CategoryFactory::new()->create();

        //Acting as berfungsi sebagai autentikasi, jika kita menghilangkannya maka akan error.
        $response = $this->actingAs($user)
            ->delete(route('category.destroy', $category->id));
        //Tuntutan status 302, yang berarti redirect status code.
        $response->assertStatus(302);

        //Tuntutan bahwa abis melakukan DELETE URL akan dialihkan ke URL product atau routenya adalah product.index
        $response->assertRedirect(route('categories'));
    }
}
