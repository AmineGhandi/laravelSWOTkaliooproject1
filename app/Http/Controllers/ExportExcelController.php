<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;
use App\Posts;


class ExportExcelController extends Controller
{
    function index(){
        $post = DB::table('posts') ->get();
        return view('exportexcel') ->with('posts',$posts);
    }
    function excel(){
        $crudtesting = DB::table('posts')->get()->toArray();
        $crudtesting_array[] = array('Type','Descprion','Anner');
        foreach($crudtesting as $posts){
            $crudtesting_array[] = array(
                'Type' => $posts->title,
                'Descprion' => $posts->body,
                'Anner' => $posts->year,
            );
        }
        Excel::create('SWOTmatrice',function($excel) use ($crudtesting_array){
            $excel-> setTitle('Matrice S.W.O.T');
            $excel -> sheet('Matrice S.W.O.T' , function($sheet) use ($crudtesting_array)
            {
                $sheet->fromArray($crudtesting_array, null, 'A1', false, false);
            });
        })-> download('xlsx');
    }
    function export(Request $request){
    if($request->get('format')=="excel")
    { 
        $posts = DB::table('posts') ->get();
        return view('\exportexcel')->with('posts',$posts);
    } else 
    if($request->get('format')=="pdf1")
    {  $forces = Posts::where('title','Forces')->get();
        $faiblesses = Posts::where('title','Faiblesses')->get();
        $opportunités = Posts::where('title','opportunités')->get();
        $menaces = Posts::where('title','menaces')->get();

        return view('downpdfhtml',array('forces'=>$forces,'faiblesses'=>$faiblesses, 'opportunités'=>$opportunités,'menaces'=>$menaces));
  
    }else
    if($request->get('format')=="pdf2"){
       $forces = Posts::where('title','Forces')->get();
       $faiblesses = Posts::where('title','Faiblesses')->get();
       $opportunités = Posts::where('title','opportunités')->get();
       $menaces = Posts::where('title','menaces')->get();
        return view('pdftable',array('forces'=>$forces,'faiblesses'=>$faiblesses, 'opportunités'=>$opportunités,'menaces'=>$menaces));
    }
}
}
?>