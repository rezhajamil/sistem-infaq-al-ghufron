<?php

namespace App\Http\Controllers;

use App\Models\Kas;
use App\Models\Transaction;
use Illuminate\Http\Request;

class KasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis' => 'required',
            'jumlah' => 'required|numeric',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
        ]);

        $transaction = Kas::create([
            'jenis' => $request->jenis,
            'jumlah' => $request->jumlah,
            'deskripsi' => ucwords($request->deskripsi),
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('dashboard.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Kas $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Kas $transaction)
    {
        $transaction = Kas::find($transaction->id);
        return view('transaction.edit', compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kas $transaction)
    {
        $request->validate([
            'jenis' => 'required',
            'jumlah' => 'required|numeric',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
        ]);

        $transaction->deskripsi = ucwords($request->deskripsi);
        $transaction->jumlah = $request->jumlah;
        $transaction->jenis = $request->jenis;
        $transaction->tanggal = $request->tanggal;
        $transaction->save();

        return redirect()->route('dashboard.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kas $transaction)
    {
        Kas::destroy($transaction->id);
        return back();
    }

    public function print()
    {
        $thisMonth = date('m');
        $transactions = Kas::orderBy("tanggal", "desc")->orderBy("created_at", "desc")->get();
        $trxOut = Kas::where('jenis', "Pengeluaran")->get();
        $trxIn = Kas::where('jenis', "Pemasukan")->get();

        $totalOut = 0;
        $totalIn = 0;
        $saldo = 0;

        // foreach ($transactions as $key => $data) {
        //     if ($key == 0) {
        //         if ($data->jenis == 1) {
        //             $saldo = $data->jumlah;
        //             $data->saldo = $saldo;
        //         } else {
        //             $saldo = 0 - $data->jumlah;
        //             $data->saldo = $saldo;
        //         }
        //     } else {
        //         if ($data->jenis == 1) {
        //             $saldo = $saldo + $data->jumlah;
        //             $data->saldo = $saldo;
        //         } else {
        //             $saldo = $saldo - $data->jumlah;
        //             $data->saldo = $saldo;
        //         }
        //     }
        // }

        for ($i = count($transactions) - 1; $i >= 0; $i--) {
            if ($i == count($transactions) - 1) {
                if ($transactions[$i]->jenis == 'Pemasukan') {
                    $saldo = $transactions[$i]->jumlah;
                    $transactions[$i]->saldo = $saldo;
                } else {
                    $saldo = 0 - $transactions[$i]->jumlah;
                    $transactions[$i]->saldo = $saldo;
                }
            } else {
                if ($transactions[$i]->jenis == 'Pemasukan') {
                    $saldo = $saldo + $transactions[$i]->jumlah;
                    $transactions[$i]->saldo = $saldo;
                } else {
                    $saldo = $saldo - $transactions[$i]->jumlah;
                    $transactions[$i]->saldo = $saldo;
                }
            }
        }

        foreach ($trxOut as $trx) {
            if (date('m', strtotime($trx->tanggal)) == $thisMonth) {
                $totalOut += $trx->jumlah;
            }
        }

        foreach ($trxIn as $trx) {
            if (date('m', strtotime($trx->tanggal)) == $thisMonth) {
                $totalIn += $trx->jumlah;
            }
        }


        return view('transaction.print', compact('transactions', 'totalOut', 'totalIn'));
    }
}
