<?php

namespace Modules\Nicehome\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NicehomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $title = "999+ mẫu thiết kế nhà đẹp hiện đại, mới nhất 2022";
        return view('nicehome::clients.index',compact('title'));
    }
    public function design()
    {
        $title = "100+ ý tưởng trang trí phòng đẹp, hiện đại nhất 2022";
      
        return view('nicehome::clients.design',compact('title'));
    }
    public function detail()
    {
        $title = "Chi tiết";
       
        return view('nicehome::clients.detail',compact('title'));
    }
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('nicehome::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('nicehome::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('nicehome::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
