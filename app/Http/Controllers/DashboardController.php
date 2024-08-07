<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Models\MetaMenu;
use App\Models\Banner;

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
                  });
        })
        ->orWhere(function($query) use ($userCompanyId) {
            $query->where('menu_type', 'external')
                  ->where('company_id', $userCompanyId);
        })
        ->where('publish', 1)
        ->orderBy('name', 'asc')
        ->get();




        $banners = Banner::where('company_id',$userCompanyId)
            ->where('publish', 1)
            ->first();
        $menus = MetaMenu::with('menu')->where('user_id', $userId)->get();
        
        
        return view('pages.dashboard.index', compact('dashboard', 'menus','banners'));
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
