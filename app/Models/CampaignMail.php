<?php

namespace App\Models;

use App\Models\Campaign;
use App\Models\Subscriber;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CampaignMail extends Model
{
    /** @use HasFactory<\Database\Factories\CampaignMailFactory> */
    use HasFactory;

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function subscriber()
    {
        return $this->belongsTo(Subscriber::class);
    }
}
