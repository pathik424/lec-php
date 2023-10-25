<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SellersResource\Pages;
use App\Filament\Resources\SellersResource\RelationManagers;
use App\Models\Sellers;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use PHPUnit\TextUI\Configuration\File;

class SellersResource extends Resource
{
    protected static ?string $model = Sellers::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('sellers_details')->schema([
                    TextInput::make('sellers_details.first_name')->required(),
                    TextInput::make('sellers_details.last_name'),
                    Textarea::make('sellers_details.address'),
                    TextInput::make('sellers_details.email'),
                    TextInput::make('sellers_details.mobile'),
                    DatePicker::make('sellers_details.dob'),

                ]),
                Section::make('sellers_documents')->schema([

                    TextInput::make('sellers_documents.pan_card_number')->required(),
                    FileUpload::make('sellers_documents.pan_card_image')->required(),
                    TextInput::make('sellers_documents.gst_number')->required(),
                    FileUpload::make('sellers_documents.gst_image')->required(),




                ]),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListSellers::route('/'),
            'create' => Pages\CreateSellers::route('/create'),
            'edit' => Pages\EditSellers::route('/{record}/edit'),
        ];
    }
}
