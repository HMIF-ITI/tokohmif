<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConsumptionResource\Pages;
use App\Filament\Resources\ConsumptionResource\RelationManagers;
use App\Models\Consumption;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ConsumptionResource extends Resource
{
    protected static ?string $model = Consumption::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            Forms\Components\FileUpload::make('image')
                ->image(),
            Forms\Components\TextInput::make('price')
                ->numeric()
                ->required(),
            Forms\Components\RichEditor::make('description')
                ->maxLength(500),
            Forms\Components\Toggle::make('published')
            ->label('Published')
            ->default(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable()->label('No'),
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('price')->sortable(),
                Tables\Columns\BooleanColumn::make('published'),
                Tables\Columns\TextColumn::make('updated_at')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListConsumptions::route('/'),
            'create' => Pages\CreateConsumption::route('/create'),
            'edit' => Pages\EditConsumption::route('/{record}/edit'),
        ];
    }
}
