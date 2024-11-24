<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourriersEntrant;
use App\Models\CourriersSortant;
use App\Models\Type_courrier;
use DB;
use Carbon\Carbon;
use App\Models\Service_traitant;

class RapportsController extends Controller
{
   
    //courrier entrant
    public function create(){

    $currentYear = Carbon::now()->year;
    
    $currentdata = CourriersSortant::whereYear('date_courrier', $currentYear)
        ->selectRaw('COUNT(*) as count, MONTH(date_courrier) as month')
        ->groupBy('month')
        ->get();
    // Separate months and counts into different arrays
    $Cmonths = [];
    $Ccounts = [];
    

    foreach ($currentdata as $item) {
        $monthName = Carbon::createFromFormat('!m', $item->month)->format('F'); // Convert month number to name
        $Cmonths[] = $monthName;
        $Ccounts[] = optional($item)->count;
    }

    
    // Get the count of all rows in the Courrier table
    $totalCount = CourriersSortant::count();

    // Prepare arrays for type courrier and counts for type courrier
    $data = CourriersSortant::selectRaw('type_courrier_id, COUNT(*) as count')
        ->groupBy('type_courrier_id')
        ->get();
    
    $tcounts = [];
    $typeName = [];
    foreach ($data as $item) {
        $type = Type_courrier::find($item->type_courrier_id);
        $typeName[]= optional($type)->type;// Get the type courrier value
        $tcounts[] = optional($item)->count;      // Get the count for that service
    }

    // Prepare arrays for type courrier and counts for service traitant
    $dataservice = CourriersSortant::selectRaw('service_traitant_id, COUNT(*) as count')
        ->groupBy('service_traitant_id')
        ->get();
    $scounts = [];
    $serviceName = [];
    foreach ($dataservice as $item) {
        $service = Service_traitant::find($item->service_traitant_id);
        $serviceName[]= optional($service)->service;// Get the type courrier value
        $scounts[] = optional($item)->count;      // Get the count for that service
    }
        return view('rapports.entrants.create',["service"=>$serviceName,"scounts"=>$scounts,"type"=>$typeName,"tcounts"=>$tcounts,"months"=>$Cmonths,"counts"=>$Ccounts,"totalCount"=>$totalCount]);

    }
//courrier sortant

public function create2(){

    $currentYear = Carbon::now()->year;
    // $lastYear = $currentYear - 1;

    // Fetch data from the Courrier table for the last year
    // $lastdata = CourriersEntrant::whereYear('date_courrier', $lastYear)
    //     ->selectRaw('COUNT(*) as Lcount, MONTH(date_courrier) as Lmonth')
    //     ->groupBy('Lmonth')
    //     ->get();
    // Fetch data from the Courrier table
    $currentdata = CourriersEntrant::whereYear('date_courrier', $currentYear)
        ->selectRaw('COUNT(*) as count, MONTH(date_courrier) as month')
        ->groupBy('month')
        ->get();
    // Separate months and counts into different arrays
    $Cmonths = [];
    $Ccounts = [];
    // $Lmonths = [];
    // $Lcounts = [];

    foreach ($currentdata as $item) {
        $monthName = Carbon::createFromFormat('!m', $item->month)->format('F'); // Convert month number to name
        $Cmonths[] = $monthName;
        $Ccounts[] = optional($item)->count;
    }
    // foreach ($lastdata as $item) {
    //     $monthName = Carbon::createFromFormat('!m', $item->Lmonth)->format('F'); // Convert month number to name
    //     $Lmonths[] = $monthName;
    //     $Lcounts[] = $item->Lcount;
    // }
    
    // Get the count of all rows in the Courrier table
    $totalCount = CourriersEntrant::count();

    // Prepare arrays for type courrier and counts for type courrier
    $data = CourriersEntrant::selectRaw('type_courrier_id, COUNT(*) as count')
        ->groupBy('type_courrier_id')
        ->get();
    
    $tcounts = [];
    $typeName = [];
    foreach ($data as $item) {
        $type = Type_courrier::find($item->type_courrier_id);
        $typeName[]= optional($type)->type;// Get the type courrier value
        $tcounts[] = optional($item)->count;      // Get the count for that service
    }

    // Prepare arrays for type courrier and counts for service traitant
    $dataservice = CourriersEntrant::selectRaw('service_traitant_id, COUNT(*) as count')
        ->groupBy('service_traitant_id')
        ->get();
    $scounts = [];
    $serviceName = [];
    foreach ($dataservice as $item) {
        $service = Service_traitant::find($item->service_traitant_id);
        $serviceName[]= optional($service)->service;// Get the type courrier value
        $scounts[] = optional($item)->count;      // Get the count for that service
    }
        return view('rapports.sortants.create',["service"=>$serviceName,"scounts"=>$scounts,"type"=>$typeName,"tcounts"=>$tcounts,"months"=>$Cmonths,"counts"=>$Ccounts,"totalCount"=>$totalCount]);

    }

    public function dashboard(){

        $currentYear = Carbon::now()->year;
        // Fetch data from the Courrier table
        $currentdata = CourriersEntrant::whereYear('date_courrier', $currentYear)
            ->selectRaw('COUNT(*) as count, MONTH(date_courrier) as month')
            ->groupBy('month')
            ->get();
        // Separate months and counts into different arrays
        $Cmonths = [];
        $Ccounts = [];
        foreach ($currentdata as $item) {
            $monthName = Carbon::createFromFormat('!m', $item->month)->format('F'); // Convert month number to name
            $Cmonths[] = $monthName;
            $Ccounts[] = optional($item)->count;
        }
        // Get the count of all rows in the Courrier table
        $Entrant_totalCount = CourriersEntrant::count();
        $Sortant_totalCount = CourriersSortant::count();
        $totalCount = $Entrant_totalCount+$Sortant_totalCount;

        //Fetch data from courrier sortant

        $currentdata_sortant = CourriersSortant::whereYear('date_courrier', $currentYear)
            ->selectRaw('COUNT(*) as count, MONTH(date_courrier) as month')
            ->groupBy('month')
            ->get();
        // Separate months and counts into different arrays
        $Smonths = [];
        $Scounts = [];
        foreach ($currentdata_sortant as $item) {
            $monthName_ = Carbon::createFromFormat('!m', $item->month)->format('F'); // Convert month number to name
            $Smonths[] = $monthName_;
            $Scounts[] = optional($item)->count;
        }
        
            return view('dashboard',["months"=>$Cmonths,"counts"=>$Ccounts,
            "totalCount"=>$totalCount,"Entrant_totalCount"=>$Entrant_totalCount,
            "Sortant_totalCount"=>$Sortant_totalCount,"Smonths"=>$Smonths,"Scounts"=>$Scounts
        ]);
    
        }
}