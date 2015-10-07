<?php
namespace Mcustiel\PowerRoute\Matchers;

use Mcustiel\PowerRoute\Common\AbstractArgumentAware;

class EqualsMatcher extends AbstractArgumentAware implements MatcherInterface
{
    public function match($value)
    {
        return $value == $this->argument;
    }
}
