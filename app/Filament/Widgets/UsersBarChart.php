<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\User;
use Illuminate\Support\Carbon;

class UsersBarChart extends ChartWidget
{
    protected static ?string $heading = 'Users Growth';
    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $months = collect(range(1, 12))->map(fn($month) => Carbon::create()->month($month)->format('F'));

        $userCounts = collect(range(1, 12))->map(fn($month) => User::whereMonth('created_at', $month)->count());

        \Log::info('Months:', $months->toArray());
        \Log::info('User Counts:', $userCounts->toArray());

        return [
            'labels' => $months,
            'datasets' => [
                [
                    'label' => 'New Users',
                    'data' => $userCounts,
                    'backgroundColor' => '#36A2EB',
                    'borderColor' => '#1E88E5',
                    'borderWidth' => 1,
                    'barThickness' => 20,
                    'maxBarThickness' => 20,
                    'minBarLength' => 2,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getOptions(): array
    {
        return [
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'min' => 0,
                    'max' => max(10, $this->getMaxUserCount()), // Ensure max is at least 10
                ],
            ],
            'plugins' => [
                'legend' => [
                    'display' => true,
                ],
            ],
        ];
    }

    private function getMaxUserCount(): int
    {
        return User::selectRaw('MAX(COUNT(*)) OVER () as max_count')
            ->groupByRaw('MONTH(created_at)')
            ->value('max_count') ?? 10;
    }


}
