<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DependencyInjectionClass\DatabaseQuery; 


class DashboardController extends Controller
{
    public function index()
    {

        return view('admin.dashboard'); 
    }
    
    public function wallet(DatabaseQuery $databaseQueryClass)
    {
        return view('admin.wallet')->with(['wallet' => $databaseQueryClass->getWalletContentByUtilisateurId(auth()->user()->id)]);
    }
    
    public function timeline(DatabaseQuery $databaseQueryClass)
    {
        return view('admin.timeline'); 
        
    }
}
