<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostControllerTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    /** @test */

    public function it_stores_data()
    {
        $category = Category::factory(4)->create();
        $user = User::factory()->create();

        //Acting as berfungsi sebagai autentikasi, jika kita menghilangkannya maka akan error.
        $response = $this->actingAs($user)
            ->post(route('post.store'), [
                'title' => $this->faker->sentence(mt_rand(3, 5)),
                'category_id' => $this->faker->numberBetween(1, 4),
                'slug' => $this->faker->slug(),
                'excerpt' => $this->faker->text(mt_rand(100, 200)),
                'body' => $this->faker->paragraphs(mt_rand(3, 10), true),
                // 'published_at' => $this->faker->date('Y-m-d'),
            ]);
        //Tuntutan status 302, yang berarti redirect status code.
        $response->assertStatus(302);
    }

    /** @test */
    public function it_updates_data()
    {
        $category = Category::factory()->create([
            'name' => 'Category 1',
            'slug' => 'category-1',
        ]);
        $user = User::factory()->create();
        $post = Post::factory()->create([
            'title' => 'Title 1',
            'category_id' => $category->id,
            'slug' => 'title-1',
            'excerpt' => 'Excerpt 1',
            'body' => 'Body 1',
            'image' => 'Image 1',
            'published_at' => '2020-01-01',
        ]);

        //Acting as berfungsi sebagai autentikasi, jika kita menghilangkannya maka akan error.
        $response = $this->actingAs($user)
            ->post(route('post.update', $post->slug), [
                'title' => $this->faker->sentence(mt_rand(3, 5)),
                'body' => $this->faker->paragraphs(mt_rand(3, 10), true),
            ]);
        //Tuntutan status 302, yang berarti redirect status code.
        $response->assertStatus(302);
    }

    /** @test */
    public function it_destroys_data()
    {
        $category = Category::factory()->create([
            'name' => 'Category 1',
            'slug' => 'category-1',
        ]);
        $user = User::factory()->create();
        $post = Post::factory()->create([
            'title' => 'Title 1',
            'category_id' => $category->id,
            'slug' => 'title-1',
            'excerpt' => 'Excerpt 1',
            'body' => 'Body 1',
            'image' => 'Image 1',
            'published_at' => '2020-01-01',
        ]);

        $response = $this->actingAs($user)
            ->delete(route('post.destroy', $post->id));

        $response->assertStatus(302);
    }
}
