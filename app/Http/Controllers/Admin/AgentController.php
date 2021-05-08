<?php

namespace App\Http\Controllers\Admin;

use App\Agent;
use App\City;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Services\MeliPayamak\MeliPayamak;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AgentController extends Controller
{
    public function showForm()
    {
        // $t = resolve(MeliPayamak::class);
        // $t->send();
        $agents = Agent::all();
        $cities = City::all();
        $cities->load('province');
        $agents->load('user','images');
        return view('Admin.agent.agent' , compact('agents' , 'cities'));
    }
    public function createAgent(Request $request)
    {
        // TODO validation
        $this->validateForm($request);
        DB::beginTransaction();
        try {
        $user = User::create([
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
            'password' => Hash::make(($request->input('password'))),

        ]);
        $user->shipings()->create([
            'address' => $request->input('address'),
            'work_address' => $request->input('work_address'),
            'work_phone' => $request->input('work_phone'),
            'postal_code' => $request->input('postal_code'),
            'city_id' => $request->input('city_id')
        ]);
        $agent = $user->agent()->create([
            'slug' => Str::slug($request->input('slug'),'-'),
            'instagram' => $request->input('instagram'),
        ]);
        $this->addImage($request , $agent);
        DB::commit();
        return redirect()->back()->withSuccess(__('iranturan.success message'));
        }catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withSuccess($e);
        }
    }
    public function showEditForm(Agent $agent)
    {
        $agents = Agent::all();
        $cities = City::all();
        $cities->load('province');
        $agent->load('user', 'images');
        $agents->load('user','images');
        return view('Admin.agent.edit' , compact('agents','agent' , 'cities'));
    }
    public function edit(Agent $agent,Request $request)
    {
        DB::beginTransaction();
        try {
        $agent->load('user','images');
        $agent->update([
            'instagram' => $request->input('instagram'),
            'slug' => $request->input('slug'),
        ]);
        $agent->user()->update([
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
        ]);
        $agent->user->shipings()->create([
            'address' => $request->input('address'),
            'work_address' => $request->input('work_address'),
            'work_phone' => $request->input('work_phone'),
            'postal_code' => $request->input('postal_code'),
            'city_id' => $request->input('city_id')
        ]);
        if ($request->has('image'))
        {
            foreach ($agent->images as $image) 
            {
                $image->delete();
            }
            $this->addImage($request , $agent);
        }
        DB::commit();
        return redirect()->route('show.agent.form')->withSuccess(__('iranturan.success message'));
        } catch (\Exception $e){
            DB::rollback();
            return back()->withError($e);
        }
    }
     // TODO delete function for all images in all controllers 
    public function addImage(Request $request , Agent $agent)
    {
        $file = $request->file('image');
        $file2 = $request->file('image2');
        $destination = '/images/' . now()->year . '/' . now()->month . '/' . now()->day . '/';
        $file->move(public_path($destination) , $file->getClientOriginalName());
        $file2->move(public_path($destination) , $file2->getClientOriginalName());
        $agent->images()->create([
            'address' => $destination . $file->getClientOriginalName()
        ]);$agent->images()->create([
            'address' => $destination . $file2->getClientOriginalName()
        ]);
    }
    public function delete(Agent $agent)
    {
        try{
            $agent->delete();
            return back()->withSuccess(__('iranturan.success delete agent'));
        }catch (\Exception $e){
            return back()->withError(__('iranturan.error delete agent'));
        }
    }
    private function validateForm(Request $request)
    {
        return $request->validate([
            'name' => 'required',
            'phone_number' =>  'required',
            'email' =>  'required',
            'password' =>  'required',
            'address' => 'required',
            'work_address' => 'required',
            'work_phone' => 'required',
            'postal_code' => 'required',
            'city_id' =>'required',
            'slug' => 'required',
            'instagram' => 'required',
        ]);
    }
}
