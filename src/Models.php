<?php

namespace vFire\ResourceGenerator;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\CODE;
use Laravel\Nova\Fields\DateTime;
use Benjaminhirsch\NovaSlugField\Slug;
use Benjaminhirsch\NovaSlugField\TextWithSlug;

class Models extends Resource
{
    public static $globallySearchable = false;

    /**
     * The model the resource corresponds to.
     *
     * @var  string
     */
    public static $model = 'vFire\ResourceGenerator\Models\Models';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var  string
     */
    public static $title = 'Model Management';

    /**
     * The columns that should be searched.
     *
     * @var  array
     */
    public static $search = [
        'table', 'singular', 'title'
    ];

    /**
     * Get the displayable label of the resource.
     *
     * @return  string
     */
    public static function label()
    {
        return __('Models');
    }

    /**
    * Get the displayable singular label of the resource.
    *
    * @return  string
    */
    public static function singularLabel()
    {
        return __('Model');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make( __('Table'), 'table' )->rules('required')->sortable(),
            TextWithSlug::make(__('Title'), 'title')->slug('Singular')->rules('required')->sortable(),
            Slug::make( __('Singular'), 'singular' )->rules('required')->sortable(),
            //Text::make( __('Title'), 'title' )->rules('required')->sortable(),
            Text::make( __('Search'), 'search' )->rules('required')->sortable(),
            Text::make( __('Create Model?'), 'createModel' )->rules('required')->sortable(),
            Code::make( __('Columns'), 'columns' )->json(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
