<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Models\MetaMenu;
use App\Models\Banner;
use App\Models\Hcis\Employee;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

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

        $dashboard = Dashboard::where(function ($query) use ($userCompanyId) {
            $query->where('menu_type', 'main')
                ->where(function ($query) use ($userCompanyId) {
                    $query->whereNull('company_id')
                        ->orWhere('company_id', $userCompanyId);
                })
                ->where('publish', 1);
        })
            ->orderBy('name', 'asc')
            ->get();




        $banners = Banner::where('company_id', $userCompanyId)
            ->where('publish', 1)
            ->first();


        $menus = MetaMenu::with('menu')
            ->where('user_id', $userId)
            ->get();

        $today = Carbon::now()->format('d/m'); 

        $birthdays = Employee::select('name', 'department_name', 'birth_day')
            ->where('company', $userCompanyId)
            ->whereRaw("TO_CHAR(TO_DATE(birth_day, 'DD/MM/YYYY'), 'DD/MM') = ?", [$today])
            ->get();

        $data = $this->getWhatson();
        $whatsons = array_slice($data['detail'], 0, 8);

        return view('pages.dashboard.index', compact('dashboard', 'menus', 'banners', 'birthdays', 'whatsons'));
    }

    public function getWhatson()
    {
        $apiUrl = env("URL_WHATSON");

        try {
            $response = Http::attach('employee_id', '5281')
                ->attach('ip', '0.0.0.0')
                ->withHeaders([
                    'Accept' => '*/*',
                ])
                ->post($apiUrl);

            $data = $response->json();
            return $data['data'];
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
