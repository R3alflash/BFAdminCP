<?php namespace BFACP\Battlefield\Scoreboard;

use BattlefieldHelper;
use BFACP\Elegant;
use Carbon\Carbon;

class Scoreboard extends Elegant
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'tbl_currentplayers';

    /**
     * Table primary key
     * @var string
     */
    protected $primaryKey = 'ServerID';

    /**
     * Fields not allowed to be mass assigned
     * @var array
     */
    protected $guarded = ['*'];

    /**
     * Date fields to convert to carbon instances
     * @var array
     */
    protected $dates = ['PlayerJoined'];

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
    protected $appends = ['player_joined_iso', 'squad', 'kd_ratio', 'hsk_ratio'];

    /**
     * Models to be loaded automaticly
     * @var array
     */
    protected $with = [];

    /**
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function server()
    {
        return $this->belongsTo('BFACP\Battlefield\Server', 'ServerID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function player()
    {
        return $this->belongsTo('BFACP\Battlefield\Player', 'EA_GUID', 'EAGUID');
    }

    public function getPlayerJoinedIsoAttribute()
    {
        return $this->PlayerJoined->toIso8601String();
    }

    public function getSquadAttribute()
    {
        return BattlefieldHelper::squad($this->SquadID);
    }

    public function getKdRatioAttribute()
    {
        return BattlefieldHelper::kd($this->Kills, $this->Deaths);
    }

    public function getHskRatioAttribute()
    {
        return BattlefieldHelper::hsk($this->Headshots, $this->Kills);
    }
}
