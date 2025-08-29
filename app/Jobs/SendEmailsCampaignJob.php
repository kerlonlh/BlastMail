<?php

namespace App\Jobs;

use App\Models\Campaign;
use App\Mail\EmailCampaign;
use App\Models\CampaignMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailsCampaignJob implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * 
     * Create a new job instance.
     */
    public function __construct(
        public Campaign $campaign
    ) {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        foreach ($this->campaign->emailList->subscribers as $subscriber) {

            SendEmailCampaignJob::dispatch($this->campaign, $subscriber);
        }
    }
}
