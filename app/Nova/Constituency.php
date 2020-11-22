<?php

namespace App\Nova;

use Illuminate\Http\Request;

use Laravel\Nova\Panel;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Constituency extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Constituency::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Constituencies';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable()->hideFromIndex(),
            Text::make('Name', 'name')->rules('required'),
            BelongsTo::make('Held by', 'winner', 'App\Nova\Party')->sortable()->nullable()->hideFromDetail(),
            Text::make('Ceremonial county', 'county')->sortable()->hideFromIndex(),
            BelongsTo::make('Region')->sortable(),
            Boolean::make('Champion', 'champion'),
            Boolean::make('Resolution', 'resolution')->sortable(),
            BelongsTo::make('Status')->sortable()->hideFromIndex(),
            Date::make('Resolution date', 'resolution_date')->sortable()->hideFromIndex(),

            new Panel('CLP details', $this->clpFields()),
            new Panel('GE2019 Election details', $this->electionFields()),
            new Panel('Map details', $this->mapFields()),
        ];
    }

    public function clpFields(){
        return [
            Text::make('CLP secretary', 'secretary')->hideFromIndex(),
            Text::make('Secretary email', 'secretary_email')->hideFromIndex(),
            Text::make('Facebook', 'facebook')->hideFromIndex(),
            Text::make('Twitter', 'twitter')->hideFromIndex(),
            Text::make('Instagram', 'instagram')->hideFromIndex(),
            Text::make('Website', 'website')->hideFromIndex(),
        ];
    }

    public function electionFields(){
        return [
            Number::make('Electorate (2019)', 'electorate_2019')->sortable(),
            Number::make('Margin (2019)', 'margin_2019')->sortable(),
            BelongsTo::make('Held by', 'winner', 'App\Nova\Party')->sortable()->nullable()->hideFromIndex(),
            BelongsTo::make('Lost', 'nearest', 'App\Nova\Party')->sortable()->nullable()->hideFromIndex(),
            Select::make('Change')->options([
                '1' => 'Gained',
                '2' => 'Held',
                '3' => 'Lost',
                '4' => ' — ',
            ])->displayUsingLabels()->sortable()->hideFromIndex(),
        ];
    }

    public function mapFields(){
        return [
            Text::make('Map title', 'map_title')->hideFromIndex(),
            Textarea::make('Map Shape', 'shape')->hideFromIndex(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
