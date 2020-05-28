<?php

namespace Itanea\FormBuilder\Tests;

use Orchestra\Testbench\TestCase;
use Itanea\FormBuilder\FormBuilderServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [FormBuilderServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
