<?php

namespace App\Http\Controllers\Admin;

use App\Agent;
use App\Category;
use App\Center;
use App\City;
use App\Exceptions\RollBackException;
use App\Http\Controllers\Controller;
use App\Market;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MarketController extends Controller
{
    public function showForm()
    {
        $markets = Market::with('agent', 'user.shipings.city.province', 'center')->get();
        $cities = City::all();
        $cities->load('province');
        $centers = Center::all();
        $agents = Agent::all();
        $agents->load('user');
        return view('Admin.market.market', compact('cities', 'centers', 'agents', 'markets'));
    }
    public function createMarket(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'market_name' => 'required',
            'city_id' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'work_address' => 'required',
            'work_phone' => 'required',
            'phone_number' => 'required|unique:users,phone_number',
            'bank_number' => 'required',
            'shaba_number' => 'required',
            'agent_id' => 'required',
            'slug' => 'required',
            'password' => 'required'


        ]);
        DB::beginTransaction();
        try { // TODO fix this error
            $user = User::create([
                'name' => $request->input('name'),
                'phone_number' => $request->input('phone_number'),
                'password' => Hash::make($request->input('password')),
            ]);
            $user->shipings()->create([
                'address' => $request->input('address'),
                'work_address' => $request->input('work_address'),
                'work_phone' => $request->input('work_phone'),
                'postal_code' => $request->input('postal_code'),
                'city_id' => $request->input('city_id')
            ]); // TODO fix images
            $user->market()->create([
                'market_name' => $request->input('market_name'),
                'slug' => Str::slug($request->input('slug'), '-'),
                'bank_number' => $request->input('bank_number'),
                'shaba_number' => $request->input('shaba_number'),
                'agent_id' => $request->input('agent_id'),
                'center_id' => $request->input('center_id'),
                'instagram' => $request->input('instagram'),
                'type' => $request->input('type'),
            ]);
            $this->createImage($user, $request);
            DB::commit();
            return back()->withSuccess(__('iranturan.success message'));
        } catch (\Exception $e) {
            DB::rollBack();
            throw new RollBackException('something went wrong contact Arman Jafari');
        }
    }
    public function showEditForm(Market $market)
    {
        $markets = Market::with('agent', 'user.shipings.city.province', 'center')->get();
        $cities = City::all();
        $cities->load('province');
        $centers = Center::all();
        $agents = Agent::all();
        $agents->load('user');
        return view('Admin.market.edit', compact('cities', 'centers', 'agents', 'markets', 'market'));
    }
    public function edit(Market $market, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'market_name' => 'required',
            'city_id' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'work_address' => 'required',
            'work_phone' => 'required',
            'phone_number' => 'required',
            'bank_number' => 'required',
            'shaba_number' => 'required',
            'agent_id' => 'required',
            'slug' => 'required',

        ]); // fix password
        DB::beginTransaction();
        try {

            if ($request->has('password')) {
                $market->user()->update([
                    'name' => $request->input('name'),
                    'phone_number' => $request->input('phone_number'),
                    'password' => Hash::make($request->input('password')),
                ]);
            } else {
                $market->user()->update([
                    'name' => $request->input('name'),
                    'phone_number' => $request->input('phone_number'),
                ]);
            }


            $market->update([
                'market_name' => $request->input('market_name'),
                'slug' => Str::slug($request->input('slug'), '-'),
                'bank_number' => $request->input('bank_number'),
                'shaba_number' => $request->input('shaba_number'),
                'agent_id' => $request->input('agent_id'),
                'center_id' => $request->input('center_id'),
                'instagram' => $request->input('instagram'),
                'type' => $request->input('type'),
            ]);
            $market->user->shipings()->update([
                'address' => $request->input('address'),
                'work_address' => $request->input('work_address'),
                'work_phone' => $request->input('work_phone'),
                'postal_code' => $request->input('postal_code'),
                'city_id' => $request->input('city_id')
            ]);
            if ($request->has('logo')){
            $this->imageDelete($market);
            $this->createImage($market->user , $request);
            }
            DB::commit();
            return back()->withSuccess(__('iranturan.success message'));
        } catch (\Exception $e) {
            DB::rollBack();
            throw new RollBackException('something went wrong contact Arman Jafari');
        }
    }


    public function categoryForm(Market $market)
    {
        $categories = Category::all();
        return view('Admin.market.category', compact('categories', 'market'));
    }
    public function editCategory(Market $market, Request $request)
    {
        $request->validate([
            'categories' => 'required',
        ]);
        $market->categories()->sync($request->input('categories'));
        return back()->withSuccess(__('iranturan.success message'));
    }
    public function delete(Market $market)
    {
        try {
            $market->delete();
            return back()->withSuccess(__('iranturan.success'));
        } catch (\Exception $e) {
            return back()->withError(__('iranturan.error delete market'));
        }
    }
    public function createImage(User $user, Request $request)
    {
        $request->validate([
            'logo' => 'required',
            'market_picture' => 'required',
            'document' => 'required',
        ]);
        // TODO refactor this
        $file = $request->file('logo');
        $destination = '/images/' . now()->year . '/' . now()->month . '/' . now()->day . '/';
        $file->move(public_path($destination), $file->getClientOriginalName());
        $user->market->images()->create([
            'address' => $destination . $file->getClientOriginalName(),
            'type' => 'logo',
        ]);
        $file = $request->file('market_picture');
        $destination = '/images/' . now()->year . '/' . now()->month . '/' . now()->day . '/';
        $file->move(public_path($destination), $file->getClientOriginalName());
        $user->market->images()->create([
            'address' => $destination . $file->getClientOriginalName(),
            'type' => 'market_picture',
        ]);
        $file = $request->file('document');
        $destination = '/images/' . now()->year . '/' . now()->month . '/' . now()->day . '/';
        $file->move(public_path($destination), $file->getClientOriginalName());
        $user->market->images()->create([
            'address' => $destination . $file->getClientOriginalName(),
            'type' => 'document',
        ]);
    }
    public function imageDelete(Market $market)
    {
        foreach ($market->images as $image) {
            $image->delete();
        }
    }
}
