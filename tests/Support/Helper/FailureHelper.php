<?php

declare(strict_types=1);

namespace Tests\Support\Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

use Codeception\TestInterface;
use Exception;

class FailureHelper extends \Codeception\Module
{
    public function _failed(TestInterface $test, Exception $fail)
    {
//        codecept_debug((array) $test);
        codecept_debug($test->getResultAggregator());
    }
}
