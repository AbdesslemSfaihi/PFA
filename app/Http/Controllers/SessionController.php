<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sessions = Session::all();
        return $sessions;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $session = new Session([
            'name' => $request->input('name'),
        ]);
        $session->save();
        return response()->json($session, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $session = Session::find($id);
        return response()->json($session);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $session = Session::find($id);
        $session->update($request->all());
        return response()->json($session, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $session = Session::find($id);
        $session->delete();
        return response()->json('Session deleted !');
    }
}
