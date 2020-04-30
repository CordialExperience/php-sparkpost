<?php

namespace SparkPost;

class SendingDomains extends Resource
{
    public function __construct(SparkPost $sparkpost)
    {
        parent::__construct($sparkpost, 'sending-domains');
    }
}
