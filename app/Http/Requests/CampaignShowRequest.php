<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CampaignShowRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {

        $what = $this->route('what');

        abort_unless(in_array($what, [null, 'statistics', 'clicked', 'open']), 404);

        return true;
    }
}
