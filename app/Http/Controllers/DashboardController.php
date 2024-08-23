<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Models\MetaMenu;
use App\Models\Banner;
use App\Models\Hcis\Employee;
use Carbon\Carbon;
use GuzzleHttp\Client;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = auth()->user()->id;
        $userCompanyId = auth()->user()->company_id;
        // $dashboard = Dashboard::where('menu_type', 'main')
        //     ->where('company_id',$userCompanyId)
        //     ->get();

        $dashboard = Dashboard::where(function($query) use ($userCompanyId) {
            $query->where('menu_type', 'main')
                  ->where(function($query) use ($userCompanyId) {
                      $query->whereNull('company_id')
                            ->orWhere('company_id', $userCompanyId);
                  })
                  ->where('publish', 1);
        })
        ->orderBy('name', 'asc')
        ->get();
    
    
        

        // return $this->getWhatson();


        $banners = Banner::where('company_id', $userCompanyId)
            ->where('publish', 1)
            ->first();
            

        $menus = MetaMenu::with('menu')
            ->where('user_id', $userId)
            ->get();

        $today = Carbon::now()->format('d/m'); // 'd/m' format

            // Query to get employees who have a birthday today
            $birthdays = Employee::select('name', 'department_name', 'birth_day')
            ->where('company', $userCompanyId)
            ->whereRaw("TO_CHAR(TO_DATE(birth_day, 'DD/MM/YYYY'), 'DD/MM') = ?", [$today])
            ->get();

            
        return view('pages.dashboard.index', compact('dashboard', 'menus', 'banners', 'birthdays'));
        
        
        
    }

    public function getWhatson()
    {
        $apiUrl = env("URL_WHATSON");
        $client = new Client();

        try {
            $response = $client->post(
                $apiUrl . '/antv/blast/blasts',
                [
                    'employee_id' => 5281,
                    'ip' => '0.0.0.0',
                ]
            );

            // Get the response body as an array
            $data = json_decode($response->getBody(), true);

            return $data;
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
