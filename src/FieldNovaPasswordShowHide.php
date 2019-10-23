<?php

namespace Opanegro\FieldNovaPasswordShowHide;

use Laravel\Nova\Fields\Field;

class FieldNovaPasswordShowHide extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'FieldNovaPasswordShowHide';

    /**
     * Hydrate the given attribute on the model based on the incoming request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @param  string  $requestAttribute
     * @param  object  $model
     * @param  string  $attribute
     * @return mixed
     */
    protected function fillAttributeFromRequest(\Laravel\Nova\Http\Requests\NovaRequest $request, $requestAttribute, $model, $attribute)
    {
        if (!empty($request->{$requestAttribute})) {
            $model->{$attribute} = Hash::make($request[$requestAttribute]);
        }
    }
}
