<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Room;
use App\Models\User;
use Exception;
// use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        try{
            $categoriesGlobal = Category::select('id', 'name', 'slug', 'description')->get();
            $categoriesGlobalSidebar = Category::select('id', 'name', 'slug', 'description')->withCount('room')->get();
        } catch (Exception $exception){

        }
        try{
            $featureNews = Room::where('hot', 1)->get();
            foreach ($featureNews as $post) {
                $post->images = explode('*', $post->images);
                $post->images = array_filter($post->images, function($image) {
                    return $image !== '';
                });
            }
            foreach ($featureNews as $post) {
                $user = User::select("name", "phone")->find($post->auth_id);
                $post->user = $user;
            }
        } catch (Exception $exception){

        }

        try{
            $postnews = Room::where('status', 1)
                ->orderByDesc('id')
                ->paginate(6);
            foreach ($postnews as $post) {
                $post->images = explode('*', $post->images);
                $post->images = array_filter($post->images, function($image) {
                    return $image !== '';
                });
            }
            foreach ($postnews as $post) {
                $user = User::select("name", "phone")->find($post->auth_id);
                $post->user = $user;
            }
        } catch (Exception $exception){

        }
        view()->share('categoriesGlobal', $categoriesGlobal ?? []);
        view()->share('categoriesGlobalSidebar', $categoriesGlobalSidebar ?? []);
        view()->share('featureNew', $featureNews ?? []);
        view()->share('postnews', $postnews ?? []);
    }
}
