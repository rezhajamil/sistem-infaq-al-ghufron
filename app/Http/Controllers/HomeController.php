<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Infaq;
use App\Models\JadwalJumat;
use App\Models\Kas;
use App\Models\Kegiatan;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thisMonth = date('m');
        $beforeMonth = sprintf('%02d', $thisMonth - 1);

        $activities = Kegiatan::all();
        $jumat = JadwalJumat::all();
        $infaq = Infaq::all();

        $transactions = Kas::orderBy("tanggal", "desc")->orderBy("created_at", "desc")->whereMonth("tanggal", "=", $thisMonth)->get();
        $last_month = Kas::orderBy("tanggal", "desc")->orderBy("created_at", "desc")->whereMonth("tanggal", "=", $beforeMonth)->get();

        $saldo = 0;
        $lastMonthBalance = 0;


        for ($i = count($last_month) - 1; $i >= 0; $i--) {
            if ($i == count($last_month) - 1) {
                if ($last_month[$i]->jenis == 'Pemasukan') {
                    $lastMonthBalance = $last_month[$i]->jumlah;
                    $last_month[$i]->saldo = $lastMonthBalance;
                } else {
                    $lastMonthBalance = 0 - $last_month[$i]->jumlah;
                    $last_month[$i]->saldo = $lastMonthBalance;
                }
            } else {
                if ($last_month[$i]->jenis == 'Pemasukan') {
                    $lastMonthBalance = $lastMonthBalance + $last_month[$i]->jumlah;
                    $last_month[$i]->saldo = $lastMonthBalance;
                } else {
                    $lastMonthBalance = $lastMonthBalance - $last_month[$i]->jumlah;
                    $last_month[$i]->saldo = $lastMonthBalance;
                }
            }
        }

        for ($i = count($transactions) - 1; $i >= 0; $i--) {
            if ($i == count($transactions) - 1) {
                if ($transactions[$i]->jenis == 'Pemasukan') {
                    $saldo = $lastMonthBalance + $transactions[$i]->jumlah;
                    $transactions[$i]->saldo = $saldo;
                } else {
                    $saldo = $lastMonthBalance - $transactions[$i]->jumlah;
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

        return view('home', compact('transactions', 'lastMonthBalance', 'activities', 'jumat', 'infaq'));
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

    public function contact(Request $request)
    {
        $name = $request->name;
        $message = $request->message;

        $text = "Assalamualaykum\nPerkenalkan saya " . $name . "\n" . $message;

        $link = "https://wa.me/6281269167991?text=" . urlencode($text);

        return redirect($link);
    }
}
