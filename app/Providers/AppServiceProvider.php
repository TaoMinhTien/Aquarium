<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;
use App\Models\Event;
use App\Models\Tickets;
use App\Models\TicketVariant;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Carbon\Carbon;

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
        View::composer('*', function ($view) {

            $randomDataSlider_02 = TicketVariant::inRandomOrder()
                ->join('events', 'ticket_variant.event_id', '=', 'events.id')
                ->join('tickets', 'ticket_variant.ticket_id', '=', 'tickets.id')
                ->select(
                    'events.id as event_id',
                    'tickets.id as ticket_id',
                    DB::raw('SUBSTRING(events.description, 1, 310) AS description'),
                    'tickets.image'
                )
                ->where('events.status', 'Active')
                ->get();
            foreach ($randomDataSlider_02 as $data) {
                // $data->description = preg_replace('/<figure[^>]*>.*<\/figure>/s', '', $data->description);
                $data->description = str_replace('&nbsp;', '', $data->description);
                $data->description = strip_tags($data->description);
                // $data->description = preg_replace('/<p[^>]*>/', '', $data->description);
                // $data->description = preg_replace('/<img[^>]*>/', '', $data->description);
                // $data->description = preg_replace('/<\/?p[^>]*>/', '', $data->description);
                // $data->description = preg_replace('/<\/?strong[^>]*>/', '', $data->description);

            }
            $slider_tickets = Tickets::inRandomOrder()
                ->whereHas('event', function ($query) {
                    $query->where('status', 'active');
                })
                ->limit(2)
                ->get();
            $view->with('dataSlider_02', $randomDataSlider_02);
            $view->with('slider_tickets', $slider_tickets);
        });
    }
}
