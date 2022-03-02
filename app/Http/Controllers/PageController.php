<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Finalist;
use App\Models\Judge;
use App\Models\Talkshow;
use App\Models\Exhibition;
use App\Models\Sponsorship;

class PageController extends Controller
{
    public function history(){
        return view('pages.history');
    }
    public function competition(){
        return view('pages.competition');
    }
    public function art_ex(){
        $exhibitions = Exhibition::orderBy('created_at')->get();
        foreach ($exhibitions as $item) {
            $item->picture = url('upload/exhibition')."/".$item->picture;
        }

        return view('pages.art_ex', [
            'exhibitions' => $exhibitions
        ]);
    }
    public function contact(){
        return view('pages.contact');
    }
    public function sponsorship(){
        $small_sponsorships = Sponsorship::where('type', 'SMALL')->get();
        $medium_sponsorships = Sponsorship::where('type', 'MEDIUM')->get();
        $large_sponsorships = Sponsorship::where('type', 'LARGE')->get();
        foreach ($small_sponsorships as $item) {
            $item->picture = url('upload/sponsorship')."/".$item->picture;
        }
        foreach ($medium_sponsorships as $item) {
            $item->picture = url('upload/sponsorship')."/".$item->picture;
        }
        foreach ($large_sponsorships as $item) {
            $item->picture = url('upload/sponsorship')."/".$item->picture;
        }

        return view('pages.sponsorship', [
            'small_sponsorships' => $small_sponsorships,
            'medium_sponsorships' => $medium_sponsorships,
            'large_sponsorships' => $large_sponsorships
        ]);
    }
    public function remind(){
        $finalists = Finalist::where('competition_id', 1)->get();
        $judges = Judge::where('competition_id', 1)->get();
        $talkshow = Talkshow::where('competition_id', 1)->orderBy('created_at')->first();
        foreach ($judges as $item) {
            $item->picture = url('upload/judge')."/".$item->picture;
        }
        if (!empty($talkshow)) {
            $talkshow->picture = url('upload/talkshow')."/".$talkshow->picture;
        }

        return view('pages.competition.remind', [
            'finalists' => $finalists,
            'judges' => $judges,
            'talkshow' => $talkshow
        ]);
    }
    public function remind_theme(){
        return view('pages.competition.theme.remind_theme');
    }
    public function remind_registration(){
        return view('pages.competition.registration.remind_registration');
    }
    public function remind_faqtrivia(){
        return view('pages.competition.faqtrivia.remind');
    }

    public function ideation(){
        $finalists = Finalist::where('competition_id', 2)->get();
        $judges = Judge::where('competition_id', 2)->get();
        $talkshow = Talkshow::where('competition_id', 2)->orderBy('created_at')->first();
        foreach ($judges as $item) {
            $item->picture = url('upload/judge')."/".$item->picture;
        }
        if (!empty($talkshow)) {
            $talkshow->picture = url('upload/talkshow')."/".$talkshow->picture;
        }

        return view('pages.competition.ideation', [
            'finalists' => $finalists,
            'judges' => $judges,
            'talkshow' => $talkshow
        ]);
    }
    public function ideation_theme(){
        return view('pages.competition.theme.ideation_theme');
    }
    public function ideation_registration(){
        return view('pages.competition.registration.ideation_registration');
    }
    public function ideation_faqtrivia(){
        return view('pages.competition.faqtrivia.ideation');
    }


    public function tav(){
        $finalists = Finalist::where('competition_id', 3)->get();
        $judges = Judge::where('competition_id', 3)->get();
        $talkshow = Talkshow::where('competition_id', 3)->orderBy('created_at')->first();
        foreach ($judges as $item) {
            $item->picture = url('upload/judge')."/".$item->picture;
        }
        if (!empty($talkshow)) {
            $talkshow->picture = url('upload/talkshow')."/".$talkshow->picture;
        }

        return view('pages.competition.tav', [
            'finalists' => $finalists,
            'judges' => $judges,
            'talkshow' => $talkshow
        ]);
    }
    public function tav_theme(){
        return view('pages.competition.theme.tav_theme');
    }
    public function tav_registration(){
        return view('pages.competition.registration.tav_registration');
    }
    public function tav_faqtrivia(){
        return view('pages.competition.faqtrivia.tav');
    }


    public function mediation(){
        $finalists = Finalist::where('competition_id', 4)->get();
        $judges = Judge::where('competition_id', 4)->get();
        $talkshow = Talkshow::where('competition_id', 4)->orderBy('created_at')->first();
        foreach ($judges as $item) {
            $item->picture = url('upload/judge')."/".$item->picture;
        }
        if (!empty($talkshow)) {
            $talkshow->picture = url('upload/talkshow')."/".$talkshow->picture;
        }

        return view('pages.competition.mediation', [
            'finalists' => $finalists,
            'judges' => $judges,
            'talkshow' => $talkshow
        ]);
    }
    public function mediation_theme(){
        return view('pages.competition.theme.mediation_theme');
    }
    public function mediation_registration(){
        return view('pages.competition.registration.mediation_registration');
    }
    public function mediation_faqtrivia(){
        return view('pages.competition.faqtrivia.mediation');
    }


    public function liblicious(){
        $finalists = Finalist::where('competition_id', 5)->get();
        $judges = Judge::where('competition_id', 5)->get();
        $talkshow = Talkshow::where('competition_id', 5)->orderBy('created_at')->first();
        foreach ($judges as $item) {
            $item->picture = url('upload/judge')."/".$item->picture;
        }
        if (!empty($talkshow)) {
            $talkshow->picture = url('upload/talkshow')."/".$talkshow->picture;
        }

        return view('pages.competition.liblicious', [
            'finalists' => $finalists,
            'judges' => $judges,
            'talkshow' => $talkshow
        ]);
    }
    public function liblicious_theme(){
        return view('pages.competition.theme.liblicious_theme');
    }
    public function liblicious_registration(){
        return view('pages.competition.registration.liblicious_registration');
    }
    public function liblicious_faqtrivia(){
        return view('pages.competition.faqtrivia.liblicious');
    }


    public function parjur(){
        $finalists = Finalist::where('competition_id', 6)->get();
        $judges = Judge::where('competition_id', 6)->get();
        $talkshow = Talkshow::where('competition_id', 6)->orderBy('created_at')->first();
        foreach ($judges as $item) {
            $item->picture = url('upload/judge')."/".$item->picture;
        }
        if (!empty($talkshow)) {
            $talkshow->picture = url('upload/talkshow')."/".$talkshow->picture;
        }

        return view('pages.competition.parjur', [
            'finalists' => $finalists,
            'judges' => $judges,
            'talkshow' => $talkshow
        ]);
    }
    public function parjur_theme(){
        return view('pages.competition.theme.parjur_theme');
    }
    public function parjur_registration(){
        return view('pages.competition.registration.parjur_registration');
    }
    public function parjur_faqtrivia(){
        return view('pages.competition.faqtrivia.parjur');
    }


    public function pprf(){
        $finalists = Finalist::where('competition_id', 7)->get();
        $judges = Judge::where('competition_id', 7)->get();
        $talkshow = Talkshow::where('competition_id', 7)->orderBy('created_at')->first();
        foreach ($judges as $item) {
            $item->picture = url('upload/judge')."/".$item->picture;
        }
        if (!empty($talkshow)) {
            $talkshow->picture = url('upload/talkshow')."/".$talkshow->picture;
        }

        return view('pages.competition.pprf', [
            'finalists' => $finalists,
            'judges' => $judges,
            'talkshow' => $talkshow
        ]);
    }
    public function pprf_theme(){
        return view('pages.competition.theme.pprf_theme');
    }
    public function pprf_registration(){
        return view('pages.competition.registration.pprf_registration');
    }
    public function pprf_faqtrivia(){
        return view('pages.competition.faqtrivia.pprf');
    }


    public function pre_event(){
        return view('pages.event.pre_event');
    }
    public function main_event(){
        return view('pages.event.main_event');
    }
    public function closing(){
        return view('pages.event.closing');
    }

    public function coming_soon(){
        return view('pages.comingsoon');
    }

}
