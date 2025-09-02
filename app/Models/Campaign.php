<?php

namespace App\Models;

use App\Models\CampaignMail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campaign extends Model
{
    /** @use HasFactory<\Database\Factories\CampaignFactory> */
    use HasFactory;
    use SoftDeletes;

    protected function casts()
    {
        return [
            'send_at' => 'datetime'
        ];
    }

    public function emailList()
    {
        return $this->belongsTo(EmailList::class);
    }

    public function mails()
    {
        return $this->hasMany(CampaignMail::class);
    }
}
