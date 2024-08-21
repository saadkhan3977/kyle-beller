<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WeddingPlanningQuestionnaire;
use App\Models\WeddingReception;
use App\Models\WeddingCocktailHourHighlights;
use App\Models\WeddingCeremonyDetails;
use App\Models\WeddingBridalPartyIntroductions;
use App\Models\Event;

class WeddingController extends Controller
{
    public function wedding_event()
    {
        $data['WeddingPlanningQuestionnaire'] = WeddingPlanningQuestionnaire::paginate(10);
        return view('backend.wedding.index',$data);
    }
    
    public function wedding_event_detail($id)
    {
        $data['WeddingPlanningQuestionnaire'] = WeddingPlanningQuestionnaire::find($id);
        $data['WeddingCeremonyDetails'] = WeddingCeremonyDetails::where('wedding_planning_id',$id)->first();
        $data['WeddingCocktailHourHighlights'] = WeddingCocktailHourHighlights::where('wedding_planning_id',$id)->first();
        $data['WeddingReception'] = WeddingReception::where('wedding_planning_id',$id)->first();
        $data['WeddingBridalPartyIntroductions'] = WeddingBridalPartyIntroductions::where('wedding_planning_id',$id)->first();
        return view('backend.wedding.detail',$data);
    }


    public function non_wedding_event()
    {
        $data['events'] = Event::paginate(10);
        return view('backend.nonwedding.index',$data);
    }
}
