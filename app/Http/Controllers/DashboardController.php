<?php

namespace App\Http\Controllers;

use App\Models\Kas;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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


        return view('dashboard', compact('transactions', 'totalOut', 'totalIn'));
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
}
