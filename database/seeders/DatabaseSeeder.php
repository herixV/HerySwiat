<?php

namespace Database\Seeders;


use App\Models\AboutUs;
use App\Models\Authors;
use App\Models\Category;
use App\Models\User;
use App\Models\Company;
use App\Models\SocialNetworks;
use App\Models\Dress;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\Review;
use App\Models\Services;
use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PharIo\Manifest\Author;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Company::factory(10)->create();

        Company::factory()->create([
            'name' => 'HerySwiat',
            'logo' => '',
            'main_image' => 'DAbanner.jpg',
            'slogan' => ' Your Gateway to fashion.',
            'description' => 'Welcome to HerySwiat: Where craftsmanship meets style. Discover timeless elegance tailored just for you.',
            'address' => '123 Main St.',
            'phone' => '6648032863',
            'email' => 'heritzaletam@gmail.com',
        ]);

        // CompanySocialNetworks::factory(10)->create();

        SocialNetworks::factory()->createMany([
            [
                'company_id' => 1,
                'platform' => 'Facebook',
                'url' => 'https://facebook.com/HerySwiat',
                'icon' => '<svg class="social" width="16" height="16">
                                <use xlink:href="#facebook"></use>
                            </svg>',
            ],
            [
                'company_id' => 1,
                'platform' => 'Instagram',
                'url' => 'https://instagram.com/HerySwiat',
                'icon' => '<svg class="social" width="16" height="16">
                                <use xlink:href="#instagram"></use>
                            </svg>',
            ],
            [
                'company_id' => 1,
                'platform' => 'Twitter',
                'url' => 'https://twitter.com/HerySwiat',
                'icon' => '<svg class="social" width="16" height="16">
                                <use xlink:href="#twitter"></use>
                            </svg>',
            ],
            [
                'company_id' => 1,
                'platform' => 'youtube',
                'url' => 'https://youtube.com/HerySwiat',
                'icon' => '<svg class="social" width="16" height="16">
                                <use xlink:href="#youtube"></use>
                            </svg>',
            ]
        ]);

        // About::factory(10)->create();
        AboutUs::factory(2)->create();

        // services::factory(10)->create();
        Services::factory(6)->create();

        // Dresses::factory(10)->create();
        Dress::factory(42)->create();

        // Category::factory(10)->create();
        Category::factory(5)->create();

        Tag::factory(4)->create();

        // Gallery::factory(10)->create();
        Gallery::factory(20)->create();

        // Reviews::factory(10)->create();
        Review::factory(20)->create();

        // Faq::factory(4)->create();
        Faq::factory(4)->create();
        
        // Authors::factory(3)->create();
        Authors::factory(3)->create();

        // Crear 10 publicaciones
        $posts = Post::factory()->count(40)->create();

        // Asignar categorías aleatorias a cada publicación
        $categories = Category::all();

        $posts->each(function ($post) use ($categories) {
            $post->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
            );
        });

    }
}
