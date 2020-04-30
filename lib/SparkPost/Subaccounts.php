<?php

namespace SparkPost;

class Subaccounts extends Resource
{
    public function __construct(SparkPost $sparkpost)
    {
        parent::__construct($sparkpost, 'subaccounts');
    }
}
