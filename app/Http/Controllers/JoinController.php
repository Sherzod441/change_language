<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Product;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinController extends Controller
{
    public function show(){
        return DB::table('companies')
        ->join('products','companies.product_id',  "=",  'products.id')
        ->select('companies.id', 'companies.company_name', 'products.product_name', 'products.product_price', 'products.product_quality')
        ->get('companies.company_name', 'products.product_name', 'products.product_price');
    }

    public function two(Request $request){
        $user = Company::query();
        $users = $user->create($request->all());

        if($users){
            $usr =  Product::query();
            $usr->create($request->all());
            return ' ma\'lumotlar 2 ta tablitsaga ham  qoshildi';
        }
        else{
            return '2 chi tablitsaga qoshilmadi';
        }
    }
}
