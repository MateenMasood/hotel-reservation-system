<?php

namespace App\Http\Controllers\admin\settings\ResortFacilities;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\ResortFaciliy;
use App\Models\ResortFaciliyFile;
use Illuminate\Support\Facades\Auth;
use JavaScript;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;

class ResortFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \View::make('admin.settings.ResortFacilities.resort-facilities-list');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \View::make('admin.settings.ResortFacilities.resort-facility-create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->filesCaption;
        $validatedData = $request->validate([
            'hotelId' => 'required | numeric',
        ]);

        $getResortFacilityImageCaptions = array();
        parse_str($request->filesCaption , $getResortFacilityImageCaptions);

        DB::beginTransaction();

        try {

            $resortFacilityModel = new ResortFaciliy();

            $resortFacilityModel->resort_facility_id = IdGenerator::generate(['table' => 'resort_facilities', 'length' => 13, 'field' => 'resort_facility_id', 'prefix' => 'SI-']);
            $resortFacilityModel->hotel_id = $validatedData['hotelId'];
            $resortFacilityModel->title = Config::get('constants.near_by_places_title');
            $resortFacilityModel->status = '1';
            $resortFacilityModel->created_by = Auth::id();


            $resortFacilityModel->save();



        foreach($request->file as $key=> $file){

            $imageZone = '';
            if($key == '0'){
                $imageZone = 'baseImage';
            }else{
                $imageZone = 'optionalImage';
            }
            $imageName = Str::uuid().'.'.$file->getClientOriginalExtension();
            $imagePath = $file->storeAs('uploads/nearByPlacesImages' , $imageName);



            $resortFacilityFileModel = new ResortFaciliyFile();
            $resortFacilityFileModel->resort_facility_id = $resortFacilityModel->id;
            $resortFacilityFileModel->resort_facility_file_id = IdGenerator::generate(['table' => 'resort_facility_files', 'length' => 13, 'field' => 'resort_facility_file_id', 'prefix' => 'RF-']);
            $resortFacilityFileModel->path = $imagePath;
            $resortFacilityFileModel->file_name = $imageName;
            $resortFacilityFileModel->size = $file->getSize();
            $resortFacilityFileModel->mime_type = $file->getMimeType();
            $resortFacilityFileModel->extension = $file->getClientOriginalExtension();
            $resortFacilityFileModel->zone = $imageZone;
            $resortFacilityFileModel->title = $imageZone;
            $resortFacilityFileModel->status = '1';
            $resortFacilityFileModel->created_by = Auth::id();


            $resortFacilityFileModel->save();
        }
            DB::commit();

            return response()->json("near by places has been added successfully.");
        } catch (Exception $e) {

              DB::rollBack();
              return response()->json([  "error" =>$e->errorInfo[2]  ] ,406);

        }

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

        // **************************** datatable ************************

        public function datatable()
        {
            // return \response()->json(NearByPlace::with('hotel')->get() , 200);
        }
    
    
           // ********************** change status **********************
    
        public function ChangeStatus(Request $request)
        {
            // $changeStatus =  NearByPlace::find($request->id);
            // $changeStatus->status = ( ($request->status == '0') ? '0' : '1');
    
            // if($changeStatus->save()){
            //     return response()->json('You change the status of the record successfully.' , 200);
    
            // }else{
            //     return response()->json(  'error occured please try again' , 200);
    
            // }
    
        }
}
