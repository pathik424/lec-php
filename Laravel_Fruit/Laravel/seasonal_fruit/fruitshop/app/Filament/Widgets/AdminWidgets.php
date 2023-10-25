<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class AdminWidgets extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Users', User::count()),
            Card::make('Users Registered Today', User::whereDate('created_at', today())->count()),
            // Card::make('Tasks Created Today', task::whereDate('created_at', today())->count()),
        ];
    }
}
