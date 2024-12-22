<?php

namespace Usman\LaravelMakeHelper;

use Illuminate\Console\GeneratorCommand;

class MakeHelper extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:helper {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new helper class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Helper';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub(): string
    {
        return __DIR__ . '/Stubs/helper.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Helpers';
    }

    /**
     * Get the class name from the input.
     *
     * @param string $name
     * @return string
     */
    protected function getClassName(string $name): string
    {
        return class_basename($name);
    }
}
