<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Axe;
use App\Models\Budget;
use App\Models\Chercheur;
use App\Models\FicheTechnique;
use App\Models\Publication;
use App\Models\Reunion;
use App\Models\Rapport;
use App\Models\Site;
use App\Models\Thesard;
use App\Models\These;
use Carbon\Carbon;

class RoutesController extends Controller
{
    public function getReunions()
    {
        $meetings = Reunion::all();

        // Group meetings by year and then by month within each year
        $meetingsByYearMonth = $meetings->sortByDesc('date')->groupBy(function ($meeting) {
            return Carbon::parse($meeting->date)->format('Y-m');
        });
        // Prepare the data for the view
        $meetingData = [];
        foreach ($meetingsByYearMonth as $yearMonth => $meetings) {
            $date = Carbon::parse($yearMonth);
            $year = $date->year;
            $month = $date->month;

            $meetingData[$year][$month] = $meetings;
        }
        return view('management.reunions', compact('meetingData'));
    }

    public function getEquipes($type)
    {
        $data = Chercheur::where('typeChercheur', $type)->get();
        return view('management.equipes', ['type' => $type, 'data' => $data]);
    }


    public function getStagiaires($type)
    {
        return view('management.thesards', ['data' => Thesard::where('type', $type)->get(), 'type'=>$type]);
    }

    public function getBudgets()
    {
        return view('management.budgets', ['data' => Budget::all()]);
    }



    public function methAxemanager($axe)
    {
        $activities = Activity::where('axe', $axe)->get();
        $axe_title = Axe::where('type', 'methodologies')->where('numero_axe', $axe)->first();
        return view('methodologies.axe', ['activities' => $activities, 'axe' => ['axe_title' => $axe_title, 'axe' => $axe]]);
    }

    // 
    public function resAxemanager($axe)
    {
        $rapports = Rapport::where('axe', $axe)
            ->orderBy('date', 'desc')
            ->get()
            ->groupBy(function ($rapport) {
                return Carbon::parse($rapport->date)->format('Y');
            })
            ->map(function ($groupedReportsByYear) {
                return $groupedReportsByYear->groupBy('type_rapport');
            });

        $axe_title = Axe::select('titre_axe', 'numero_axe')->where('type', 'resultats')->where('numero_axe', $axe)->first();
        return view('resultats.axe', ['rapports' => $rapports, 'axe' => ['axe_title' => $axe_title, 'axe' => $axe]]);
    }
    // 

    public function sitemanager($site)
    {
        $map = Site::where('nom_site', $site)->first();
        switch ($site) {
            case 'site1':
                $sitename = "Rasmouka (Tiznit)";
                break;
            case 'site2':
                $sitename = "Tamjeloujt (Chtoka-Ait-Baha)";
                break;
            case 'site3':
                $sitename = "Ezzaouite (Essaouira)";
                break;
            case 'site4':
                $sitename = "Alharith (Essaouira)";
                break;
            case 'site5':
                $sitename = "Belfaa (Chtouka-Ait-Baha)";
                break;
            case 'site6':
                $sitename = "Tioughza (Sidi Ifni)";
                break;
            case 'site7':
                $sitename = "Lqsabi (Guelmim)";
                break;
            case 'site8':
                $sitename = "Imoulass (Taroudant)";
                break;
            default:
                return abort(404);
                break;
        }
        return view('methodologies.site', ['map_embed' => $map, 'sitename' => $sitename, 'site'=>$site]);
    }

    public function getPublications($axe)
    {

        $publications = Publication::where('axe', $axe)->get();
        return view('outputs.publications', ['publications' => $publications, 'axe'=>$axe]);
    }

    public function getTheses($axe)
    {
        $theses = These::where('axe', $axe)->get();
        return view('outputs.theses', ['theses' => $theses, 'axe'=>$axe]);
    }
    public function getFiches($axe)
    {
        $fiches = FicheTechnique::where('axe', $axe)->get();
        return view('outputs.fiches', ['fiches' => $fiches, 'axe'=>$axe]);
    }
}
