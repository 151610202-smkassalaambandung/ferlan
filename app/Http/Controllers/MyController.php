<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //passing data basic
    public function percobaan()
    {
    	$a= "Ferlan";
    	return "Nama Saya Adalah ".$a;
    }
    //passing data view
    public function percobaan2()
    {  
        return view('about');
    }
    //passing data variable to view
    public function percobaan3()
    {
    	$a = "Ferlansyah";
    	return view('latihan.saya',compact('a'));
    }
    public function percobaan4()
        {
        	$a = "Ferlansyah";
        	$b = "Xi RPL 3";
        	$c = "SMK Assalaam";
        	return view('latihan.nama',compact('a','b','c'));  
        }
    public function percobaan5()
    {
    	$a = 1;
    	$b = 2;
    	$c = 3;
    	return view('seleksi',compact('a','b','c'));
    }

    public function percobaan6()
    {
    	$buah = ['Mangga','Jeruk','Apel','Anggur'];
    	return view('buah',compact('buah'));
    }
     public function percobaan7()
    {
    	$buah = ['Mangga','Jeruk','Apel','Anggur'];
        $makhluk = ['ikan','harimau','kucing','semut'];
        $komputer = ['keyboard','monitor','mouse','CPU'];
    	return view('array',compact('buah','makhluk','komputer'));
    }

    public function parameter($data)
    {
    	$all= [ 'buah'=>['Mangga'=>'bali'],
                         'Jeruk'=>'bali'],
                         'Apel'=>'malang']];
                'makhluk'=>['ikan'=>'gabus'],
                            'kucing'=>,'anggora'],
                            
                'komputer'=>['keyboard','monitor','mouse','CPU']];
        $jenis=$all[$data];
      return view('param',compact('data','jenis'));
    }
}