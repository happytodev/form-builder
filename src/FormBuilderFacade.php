<?php

namespace Itanea\FormBuilder;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Itanea\FormBuilder\Skeleton\SkeletonClass
 */
class FormBuilderFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'form-builder';
    }
}
