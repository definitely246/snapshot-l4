<?php namespace Definitely246\SnapshotL4;

use Illuminate\Support\Facades\Facade;

class Snapshot extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'snapshot-l4'; }
}