<?php namespace Definitely246\SnapshotL4\Facades;

use Illuminate\Support\Facades\Facade;

class SnapshotFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'snapshot-l4'; }
}