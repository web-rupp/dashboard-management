<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Order;

class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '10s';

    protected ?string $heading = 'Analytics';

    protected ?string $description = 'An overview of some analytics.';

    protected static ?int $sort = 2;
    protected function getStats(): array
    {
        /*
         * ------------------------------------------------
         *              This month's period
         * */
        $currentPeriodStart = Carbon::now()->startOfMonth();
        $currentPeriodEnd = Carbon::now();

        /*
         * ------------------------------------------------
         *              Last month's period
         * */
        $previousPeriodStart = Carbon::now()->subMonth()->startOfMonth();
        $previousPeriodEnd = Carbon::now()->subMonth()->endOfMonth();

        /*
         * ------------------------------------------------
         *              Total orders
         * */
        $totalOrders = Order::whereBetween('created_at', [$currentPeriodStart, $currentPeriodEnd])->count();
        $previousTotalOrders = Order::whereBetween('created_at', [$previousPeriodStart, $previousPeriodEnd])->count();
        $orderIncrease = $this->calculateIncrease($totalOrders, $previousTotalOrders);
        $totalRevenue = Order::whereBetween('created_at', [$currentPeriodStart, $currentPeriodEnd])->sum('total_amount');
        $previousTotalRevenue = Order::whereBetween('created_at', [$previousPeriodStart, $previousPeriodEnd])->sum('total_amount');
        $averageOrderValue = $totalOrders > 0 ? $totalRevenue / $totalOrders : 0;
        $previousAverageOrderValue = $previousTotalOrders > 0 ? $previousTotalRevenue / $previousTotalOrders : 0;
        $pendingOrder = Order::where('status', 'pending')->count();
        $completedOrder = Order::where('status', 'completed')->count();
        $revenueIncrease = $this->calculateIncrease($totalRevenue, $previousTotalRevenue);
        $averageOrderValueIncrease = $this->calculateIncrease($averageOrderValue, $previousAverageOrderValue);



        return [
            Stat::make('Total Orders', $totalOrders)
                ->description("{$orderIncrease}% increase")
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart($this->getOrderChartData())
                ->color('success'),
            Stat::make('Total Revenue', '$'. number_format($totalRevenue, 2))
                ->description("{$revenueIncrease}% increase")
                ->descriptionIcon($totalRevenue > $previousTotalRevenue ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->color($totalRevenue > $previousTotalRevenue ? 'success' : 'danger'),
            Stat::make('Average Order Value', number_format($averageOrderValue, 2))
                ->description("{$averageOrderValueIncrease}% increase")
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            Stat::make('Pending Orders', $pendingOrder)
                ->description("{$pendingOrder} pending")
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning'),
            ];
    }

    protected function calculateIncrease($current, $previous): float
    {
        if ($previous == 0) {
            return $current > 0 ? 100.0 : 0.0;
        }

        return round((($current - $previous) / $previous) * 100, 2);
    }

    protected function getOrderChartData(): array
    {
        // Get orders for the last 7 days
        $data = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i)->format('Y-m-d');
            $count = Order::whereDate('created_at', $date)->count();
            $data[] = $count;
        }

        return $data;
    }
}
