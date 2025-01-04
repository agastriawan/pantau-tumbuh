<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Artikel;

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
    public function boot()
    {
        $artikelTerbaru = Artikel::with('user:id,nama')
            ->latest()
            ->limit(2)
            ->get();

        View::share('artikelTerbaru', $artikelTerbaru);
    }
}
