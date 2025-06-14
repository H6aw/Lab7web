<?php 
namespace App\Controllers; 
class Page extends BaseController 
{
public function home() 
{ 
echo "Ini halaman Home"; 
}
public function about() 
{ 
return view('about', [ 
'title' => 'Halaman Abot',
'title2' => 'Layout Tambahan 2', 
'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi 
halaman ini.' 
]); 
}
public function artikel() 
{ 
echo "Ini halaman Artikel"; 
}
public function contact() 
{ 
echo "Ini halaman Contact"; 
} 
public function faqs() 
{ 
echo "Ini halaman FAQ"; 
} 
public function tos() 
{ 
echo "ini halaman Term of Services"; 
} 
}