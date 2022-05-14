<?php 
namespace App\DependencyInjectionClass;
use DB; 

class DatabaseQuery {
    
    public function getWalletContentByUtilisateurId($utilisateur_id) {
        if (empty($utilisateur_id)){
            return [];
        }
        return DB::table('wallets')
        ->select('cryptos.code', 'cryptos.nom', 'wallets.valeur')
        ->join('users', 'users.id', 'user_id')
        ->join('cryptos', 'cryptos.id', 'crypto_id')
        ->where(['user_id' => $utilisateur_id])
        ->get()->toArray();

    }

}