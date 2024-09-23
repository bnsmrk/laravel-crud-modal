<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::all();
        return view('transaction', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'itemnumber' => 'required|string|max:255',
            'controlnumber' => 'required|string|max:255',
            'partyrepresented' => 'required|string',
            'gender' => 'required|string',
            'casetitle' => 'required|string|max:255',
            'court' => 'required|string',
            'casetype' => 'required|string',
            'casenumber' => 'required|string|max:255',
            'lastactiontaken' => 'required|string|max:255',
            'casestatus' => 'required|string',
            'startdate' => 'required|date',
            'casedate' => 'required|date',
            'causeofaction' => 'required|string',
            'causeoftermination' => 'required|string',
        ]);

        Transaction::create($request->all());

        return redirect()->route('transactions.index')->with('success', 'Transaction added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaction = Transaction::findOrFail($id);
        return response()->json($transaction);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'uitemnumber' => 'required|string|max:255',
            'ucontrolnumber' => 'required|string|max:255',
            'upartyrepresented' => 'required|string',
            'ugender' => 'required|string',
            'ucasetitle' => 'required|string|max:255',
            'ucourt' => 'required|string|max:255',
            'ucasetype' => 'required|string',
            'ucasenumber' => 'required|string|max:255',
            'ulastactiontaken' => 'required|string|max:255',
            'ucasestatus' => 'required|string',
            'ucauseofaction' => 'required|string',
            'ucauseoftermination' => 'required|string',
            'ustartdate' => 'required|date',
            'ucasedate' => 'nullable|date',
        ]);

        $transaction = Transaction::findOrFail($id);

        $transaction->update([
            'itemnumber' => $request->uitemnumber,
            'controlnumber' => $request->ucontrolnumber,
            'partyrepresented' => $request->upartyrepresented,
            'gender' => $request->ugender,
            'casetitle' => $request->ucasetitle,
            'court' => $request->ucourt,
            'casetype' => $request->ucasetype,
            'casenumber' => $request->ucasenumber,
            'lastactiontaken' => $request->ulastactiontaken,
            'casestatus' => $request->ucasestatus,
            'causeofaction' => $request->ucauseofaction,
            'causeoftermination' => $request->ucauseoftermination,
            'startdate' => $request->ustartdate,
            'casedate' => $request->ucasedate,
        ]);

        return redirect()->back()->with('success', 'Transaction updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $transaction = Transaction::findOrFail($id);
            $transaction->delete();
            return response()->json(['message' => 'Transaction deleted successfully!']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error deleting transaction: ' . $e->getMessage()], 500);
        }
    }

}
