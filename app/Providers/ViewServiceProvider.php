<?php
namespace App\Providers;

use App\Models\CourseCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Share course categories with header
        View::composer('partials.header', function ($view) {
            $courseCategories = CourseCategory::with(['courses' => function ($query) {
                $query->where('is_active', true)
                    ->orderBy('title');
            }])->get();

            $view->with('courseCategories', $courseCategories);
        });
    }
}
