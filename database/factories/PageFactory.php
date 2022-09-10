<?php

namespace Database\Factories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class PageFactory extends Factory
{
    protected $model = Page::class;

    public function definition(): array
    {
        $title = $this->faker->sentence();
        $summary = $this->faker->paragraph();
        $image = $this->faker->imageUrl();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'summary' => $summary,
            'image' => $image,
            'content' => $this->faker->randomHtml(),
            'meta' => [
                'title' => $title,
                'description' => $summary,
                'image' => $image,
            ],

            'published' => true,
        ];
    }
}
