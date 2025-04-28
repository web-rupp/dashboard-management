<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;


class ProductChart extends ChartWidget
{
    protected static ?string $heading = 'Orders Growth';

    protected static string $color = 'info';

    public ?string $filter = 'year';

    public static ?int $sort = 4;

    protected static ?string $maxHeight = '300px';

    protected function getOptions(): array
    {
        return [
            'scales' => [
                'y' => [
                    'beginAtZero' => false,
                    'suggestedMin' => 1,
                    'suggestedMax' => 25, // Adjust based on data dynamically if needed
                ],
            ],
            'plugins' => [
                'legend' => [
                    'display' => true,
                ],
            ],
        ];
    }

    protected function getData(): array
    {
        $data = Trend::model(Order::class)
            ->between(
                start: Carbon::create(2018, 1, 1)->startOfYear(),
                end: Carbon::create(2026, 1, 1)->endOfYear(),
            )
            ->perYear()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Orders Table',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
