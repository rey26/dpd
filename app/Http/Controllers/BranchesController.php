<?php

namespace App\Http\Controllers;

use App\BranchModel;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Response;

class BranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allBranches()
    {
        $client = new Client();
    	$response = $client->request('GET', 'http://www.dpdparcelshop.cz/api/get-all');
        $statusCode = $response->getStatusCode();
    	$body = $response->getBody()->getContents();

        $result = json_decode($body);
        if($result->code != 200){
            return 'External service error';
        }


        $branches = array();
        foreach($result->data->items as $item){
            $branch = new BranchModel($item);
            array_push($branches, $branch->getBranchData());
        }
        return $branches;
    }

    public function branchDetail($id){
        $branches = $this->allBranches();
        foreach($branches as $key => $branch){
            if($branch['internalId'] != $id)
                unset($branches[$key]);
        }
        return Response::json($branches);
    }

    public function getAllBranches(){
        return Response::json($this->allBranches());
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
