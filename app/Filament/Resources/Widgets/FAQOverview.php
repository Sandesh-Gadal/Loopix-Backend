<?php

namespace App\Filament\Resources\Widgets;

use App\Models\Faq;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Grouping\Group;
use Filament\Widgets\TableWidget as BaseWidget;

class FAQOverview extends BaseWidget
{
    protected static ?int $sort = 3;

    // Makes the widget take up half the screen so you can place another widget next to it
    protected int | string | array $columnSpan = '1';

    public function table(Table $table): Table
    {
        return $table
            ->query(Faq::query())
            ->columns([
                Tables\Columns\TextColumn::make('question')
                    ->wrap()
                    ->description(fn (Faq $record): string => $record->answer, position: 'below')
                    ->limit(50),
            ])
            // This is the magic line that creates categories
            ->groups([
                Group::make('category')
                    ->label('Category')
                    ->collapsible(),
            ])
            ->defaultGroup('category');
    }
}
