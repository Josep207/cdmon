<?php

namespace App\Http\Controllers;

use App\Host;
use Illuminate\Http\Request;
use App\Helpers\APIHelpers;

class HostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hosts = Host::all();
        $response = APIHelpers::createAPIResponse(false,200,'',$hosts);
        return response()->json($response, 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $host = new Host();
        $host->nombre = $request->nombre;
        $host->cores = $request->cores;
        $host->memoria = $request->memoria;
        $host->disco = $request->disco;
        $host_save = $host->save();

        if($host_save){
            $response = APIHelpers::createAPIResponse(false,201,'Host Added Successfully',null);
            return response()->json($response, 201);
        }else{
            $response = APIHelpers::createAPIResponse(true,400,'Host Creation Failed',null);
            return response()->json($response, 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Host  $host
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $host = Host::find($id);
        $response = APIHelpers::createAPIResponse(false,200,'',$host);
        return response()->json($response, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Host  $host
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $host = Host::find($id);
        $host->nombre = $request->nombre;
        $host->cores = $request->cores;
        $host->memoria = $request->memoria;
        $host->disco = $request->disco;
        $host_update = $host->save();

        if($host_update){
            $response = APIHelpers::createAPIResponse(false,200,'Host Updated Successfully',null);
            return response()->json($response, 200);
        }else{
            $response = APIHelpers::createAPIResponse(true,400,'Host Update Failed',null);
            return response()->json($response, 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Host  $host
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $host = Host::find($id);
        $host_delete = $host->delete();

        if($host_delete){
            $response = APIHelpers::createAPIResponse(false,200,'Host Deleted Successfully',null);
            return response()->json($response, 200);
        }else{
            $response = APIHelpers::createAPIResponse(true,400,'Host Delete Failed',null);
            return response()->json($response, 400);
        }
    }
}
