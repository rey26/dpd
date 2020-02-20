<?php

namespace App\Http\Controllers;

use App\BranchModel;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client();
    	$response = $client->request('GET', 'http://www.dpdparcelshop.cz/api/get-all');
    	$statusCode = $response->getStatusCode();
    	$body = $response->getBody()->getContents();

    	// return $body;
        return view('branches', compact('body'));
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
     * @param  \App\BranchModel  $branchModel
     * @return \Illuminate\Http\Response
     */
    public function show(BranchModel $branchModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BranchModel  $branchModel
     * @return \Illuminate\Http\Response
     */
    public function edit(BranchModel $branchModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BranchModel  $branchModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BranchModel $branchModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BranchModel  $branchModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(BranchModel $branchModel)
    {
        //
    }
}
