<?php namespace BFACP\Player;

use BFACP\Elegant;
use Carbon\Carbon;

class Weapon extends Elegant
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'tbl_weapons_stats';

    /**
     * Table primary key
     * @var string
     */
    protected $primaryKey = 'StatsID';

    /**
     * Fields not allowed to be mass assigned
     * @var array
     */
    protected $guarded = ['*'];

    /**
     * Date fields to convert to carbon instances
     * @var array
     */
    protected $dates = [];

    /**
     * Should model handle timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Append custom attributes to output
     * @var array
     */
    protected $appends = [];

    /**
     * Models to be loaded automaticly
     * @var array
     */
    protected $with = [];

    /**
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function weapon()
    {
        return $this->belongsTo('BFACP\Battlefield\Weapon', 'WeaponID', 'WeaponID');
    }
}
