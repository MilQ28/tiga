<?php

namespace App\Filament\Widgets;

use App\Models\Articles;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ArticleStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Artikel', Articles::count())
                ->description('Semua artikel'),

            Stat::make(
                'Total Published',
                Articles::where('status', 'published')->count()
            )
                ->description('Artikel yang dipublikasikan'),

            Stat::make(
                'Total Views',
                Articles::sum('views')
            )
                ->description('Total seluruh view'),
        ];
    }
}
