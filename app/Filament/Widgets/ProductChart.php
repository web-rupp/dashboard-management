<?php
//
//namespace App\Filament\Widgets;
//
//use App\Models\Customer;
//use Carbon\Carbon;
//use Filament\Widgets\ChartWidget;
//use Flowframe\Trend\Trend;
//use Flowframe\Trend\TrendValue;
//
//class ProductChart extends ChartWidget
//{
//    protected static ?string $heading = 'Customers';
//
//    protected static string $color = 'info';
//
//    public ?string $filter = 'today';
//
//    protected static ?string $maxHeight = '300px';
//
//    protected function getOptions(): array
//    {
//        return [
//            'scales' => [
//                'y' => [
//                    'suggestedMin' => 1,
//                    'suggestedMax' => 50,
//                ],
//            ],
//            'plugins' => [
//                'legend' => [
//                    'display' => false,
//                ],
//            ],
//        ];
//    }
//
//
//    protected function getData(): array
//    {
//        $data = Trend::model(Customer::class)
//            ->between(
//                start: Carbon::create(2019, 1, 1)->startOfYear(),
//                end: Carbon::create(2026, 12, 31)->endOfYear(),
//            )
//            ->perMonth()
//            ->count('id');
//
//        return [
//            'datasets' => [
//                [
//                    'label' => 'New Customers',
//                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
//                    'backgroundColor' => '#36A2EB',
//                    'borderColor' => '#9BD0F5',
//                ],
//            ],
//            'labels' => $data->map(fn (TrendValue $value) => Carbon::parse($value->date)->format('m')),
//        ];
//    }
//
//    protected function getType(): string
//    {
//        $activeFilter = $this->filter;
//
//        return 'line';
//    }
//
//    protected function getFilters(): ?array
//    {
//        return [
//            'today' => 'Today',
//            'week' => 'Last week',
//            'month' => 'Last month',
//            'year' => 'This year',
//        ];
//    }
//}


namespace App\Filament\Widgets;

use App\Models\Customer;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class ProductChart extends ChartWidget
{
    protected static ?string $heading = 'Customers';

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
        $data = Trend::model(Customer::class)
            ->between(
                start: Carbon::create(2018, 1, 1)->startOfYear(),
                end: Carbon::create(2026, 1, 1)->endOfYear(),
            )
            ->perYear()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Customers',
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

//    protected function getFilters(): ?array
//    {
//        return [
//            'today' => 'Today',
//            'week' => 'Last week',
//            'month' => 'Last month',
//            'year' => 'This year',
//        ];
//    }
}
