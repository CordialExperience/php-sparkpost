<?php

namespace SparkPost;

class SuppressionList extends Resource
{
    public function __construct(SparkPost $sparkpost)
    {
        parent::__construct($sparkpost, 'suppression-list');
    }
}
