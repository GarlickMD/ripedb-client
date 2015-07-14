<?php
// Route6.php

namespace Dormilich\WebService\RIPE\DB\RPSL;

use Dormilich\WebService\RIPE\Object;
use Dormilich\WebService\RIPE\Attribute;

class Route6 extends Object
{
    /**
     * Create a ROUTE6 RIPE object.
     * 
     * @param string $value The IPv6 address prefix of the route.
     *      Forms a combined primary key with the 'origin' attribute.
     * @return self
     */
    public function __construct($value)
    {
        $this->setType('route6');
        $this->setKey('route6');
        $this->init();
        $this->setAttribute('route6', $value);
    }

    /**
     * Defines attributes for the ROUTE6 RIPE object. 
     * 
     * @return void
     */
    protected function init()
    {
        $this->create('route6',       Attribute::REQUIRED, Attribute::SINGLE);
        $this->create('descr',        Attribute::REQUIRED, Attribute::MULTIPLE);
        $this->create('origin',       Attribute::REQUIRED, Attribute::SINGLE);
        $this->create('pingable',     Attribute::OPTIONAL, Attribute::MULTIPLE);
        $this->create('ping-hdl',     Attribute::OPTIONAL, Attribute::MULTIPLE);
        $this->create('holes',        Attribute::OPTIONAL, Attribute::MULTIPLE);
        $this->create('org',          Attribute::OPTIONAL, Attribute::MULTIPLE);
        $this->create('member-of',    Attribute::OPTIONAL, Attribute::MULTIPLE);
        $this->create('inject',       Attribute::OPTIONAL, Attribute::MULTIPLE);
        $this->create('aggr-mtd',     Attribute::OPTIONAL, Attribute::SINGLE);
        $this->create('aggr-bndry',   Attribute::OPTIONAL, Attribute::SINGLE);
        $this->create('export-comps', Attribute::OPTIONAL, Attribute::SINGLE);
        $this->create('components',   Attribute::OPTIONAL, Attribute::SINGLE);
        $this->create('remarks',      Attribute::OPTIONAL, Attribute::MULTIPLE);
        $this->create('notify',       Attribute::OPTIONAL, Attribute::MULTIPLE);
        $this->create('mnt-lower',    Attribute::OPTIONAL, Attribute::MULTIPLE);
        $this->create('mnt-routes',   Attribute::OPTIONAL, Attribute::MULTIPLE);
        $this->create('mnt-by',       Attribute::REQUIRED, Attribute::MULTIPLE);
        $this->create('changed',      Attribute::OPTIONAL, Attribute::MULTIPLE);
        $this->create('source',       Attribute::REQUIRED, Attribute::SINGLE);

        $this->generated('created');
        $this->generated('last-modified');
    }
}
