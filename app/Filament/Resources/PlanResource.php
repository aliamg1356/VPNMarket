<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlanResource\Pages;
use App\Filament\Resources\PlanResource\RelationManagers;
use App\Models\Plan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlanResource extends Resource
{
    protected static ?string $model = Plan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'مدیریت پلن‌ها';

    protected static ?string $navigationLabel = 'پلن‌های سرویس';
    protected static ?string $pluralModelLabel = 'پلن‌های سرویس';
    protected static ?string $modelLabel = 'پلن سرویس';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('نام پلن')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->label('قیمت')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('currency')
                    ->label('واحد پول')
                    ->default('تومان/ماهانه'),
                Forms\Components\Textarea::make('features')
                    ->label('ویژگی‌ها')
                    ->helperText('هر ویژگی را در یک خط جدید بنویسید.'),


                Forms\Components\TextInput::make('volume_gb')
                    ->label('حجم (GB)')
                    ->numeric()
                    ->required()
                    ->default(30)
                    ->helperText('حجم سرویس را به گیگابایت وارد کنید.'),

                Forms\Components\TextInput::make('duration_days')
                    ->label('مدت زمان (روز)')
                    ->numeric()
                    ->required()
                    ->default(30)
                    ->helperText('مدت زمان اعتبار سرویس را به روز وارد کنید.'),
                //========================================================

                Forms\Components\Toggle::make('is_popular')
                    ->label('پلن محبوب است؟')
                    ->helperText('این پلن به صورت ویژه نمایش داده خواهد شد.'),
                Forms\Components\Toggle::make('is_active')
                    ->label('فعال')
                    ->default(true),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('نام پلن'),
                Tables\Columns\TextColumn::make('price')->label('قیمت'),
                Tables\Columns\BooleanColumn::make('is_popular')->label('محبوب'),
                Tables\Columns\BooleanColumn::make('is_active')->label('فعال'),
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
            'index' => Pages\ListPlans::route('/'),
            'create' => Pages\CreatePlan::route('/create'),
            'edit' => Pages\EditPlan::route('/{record}/edit'),
        ];
    }
}
