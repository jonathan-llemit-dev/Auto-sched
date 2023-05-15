<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoordinatorUpdateRequest;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class CoordinatorProfileController extends Controller
{
    public function edit(Request $request)
    {
        return view('coor.update',[
            'user' => $request->user(),
        ]);

    }

    public function update(CoordinatorUpdateRequest $request)
    {
        $request->user()->fill($request->validated());
        $request->user()->save();
        
        Toast::success('Your Profile Update Successfully.')
        ->success()
        ->rightTop()
        ->backdrop()
        ->autoDismiss(1.5);

        return to_route('coordinator-update-profile');
    }
}
