<?php

namespace App\Filament\Resources\Widgets;

use App\Models\Faq;
use App\Models\Client;
use App\Models\OurWork;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ResourceOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // 1. Start with your existing 4 main stats
        $stats = [
            Stat::make('Total Projects', OurWork::count())
                ->description('Uploaded works')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('success'),

            Stat::make('Our Clients', Client::count())
                ->description('Wonderful partners')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('info'),

            Stat::make('Team Size', TeamMember::count())
                ->description('Creative minds')
                ->descriptionIcon('heroicon-m-academic-cap'),

            Stat::make('Client Feedback', Testimonial::count())
                ->description('Total testimonials')
                ->descriptionIcon('heroicon-m-chat-bubble-left-right')
                ->color('warning'),
        ];

        // // 2. Fetch all unique categories and their counts
        // $faqCategories = Faq::query()
        //     ->selectRaw('category, count(*) as count')
        //     ->whereNotNull('category')
        //     ->groupBy('category')
        //     ->get();

        // // 3. Loop through categories and add a new Stat box for each
        // foreach ($faqCategories as $faq) {
        //     $stats[] = Stat::make($faq->category . ' FAQs', $faq->count)
        //         ->description('Question count')
        //         ->descriptionIcon('heroicon-m-question-mark-circle')
        //         ->color('gray');
        // }

        return $stats;
    }
}
