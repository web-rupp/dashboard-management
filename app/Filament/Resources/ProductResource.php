<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';
    protected static ?string $navigationGroup = 'Inventory';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('supplier_id')
                    ->relationship('supplier', 'company_name')
                    ->required()
                    ->searchable(),
                Forms\Components\Textarea::make('description')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('unit_price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\TextInput::make('quantity_per_unit')
                    ->maxLength(255),
                Forms\Components\TextInput::make('units_in_stock')
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('units_on_order')
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('reorder_level')
                    ->numeric()
                    ->default(0),
                Forms\Components\Toggle::make('is_discontinued')
                    ->required()
                    ->default(false),
                Forms\Components\CheckboxList::make('categories')
                    ->relationship('categories', 'name')
                    ->columns(2)
                    ->helperText('Select the categories this product belongs to'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('supplier.company_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('unit_price')
                    ->money('USD')
                    ->sortable(),
                Tables\Columns\TextColumn::make('units_in_stock')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('units_on_order')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_discontinued')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_discontinued'),
                Tables\Filters\SelectFilter::make('supplier_id')
                    ->relationship('supplier', 'company_name')
                    ->label('Supplier'),
                Tables\Filters\SelectFilter::make('categories')
                    ->relationship('categories', 'name')
                    ->multiple(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
