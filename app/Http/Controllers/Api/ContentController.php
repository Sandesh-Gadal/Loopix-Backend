<?php
namespace App\Http\Controllers\Api;

use App\Models\OurWork;
use App\Models\Faq;
use App\Models\Client;
use App\Models\TeamMember;
use Illuminate\Http\JsonResponse;

class ContentController extends BaseController
{
    public function projects(): JsonResponse
    {
        $projects = OurWork::where('is_visible', true)->latest()->get();
        return $this->success($projects, 'Projects retrieved successfully');
    }

    public function faqs(): JsonResponse
    {
        $faqs = Faq::all();
        return $this->success($faqs, 'FAQs retrieved successfully');
    }

    public function clients(): JsonResponse
    {
        $clients = Client::all();
        return $this->success($clients, 'Clients retrieved successfully');
    }

    public function team(): JsonResponse
    {
        $team = TeamMember::all();
        return $this->success($team, 'Team members retrieved successfully');
    }
}
