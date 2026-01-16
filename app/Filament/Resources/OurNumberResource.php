<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OurNumberResource\Pages;
use App\Filament\Resources\OurNumberResource\RelationManagers;
use App\Models\OurNumber;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OurNumberResource extends Resource
{
    protected static ?string $model = OurNumber::class;

    protected static ?string $navigationIcon = 'heroicon-o-numbered-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('project_completed')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('happy_clients')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('views_generated')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('years_of_experience')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('project_completed')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('happy_clients')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('views_generated')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('years_of_experience')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOurNumbers::route('/'),
            'create' => Pages\CreateOurNumber::route('/create'),
            'edit' => Pages\EditOurNumber::route('/{record}/edit'),
        ];
    }
}
