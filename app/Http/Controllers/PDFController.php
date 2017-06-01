<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
//require_once('../../../vendor/docraptor/docraptor/autoload.php');


class PDFController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
        
        public function creaPDF(Request $req){
            $div = $req -> div;
            $head = $req ->head;
            $myfile = fopen("pagina.html", "w") or die("Unable to open file!");
            $txt = "<html>";
            $txt .= $head;
            
            fwrite($myfile, $txt);
            
            
            $txt = "<body>";
            $txt .= $div;
            $txt .= "</body></html>";
            fwrite($myfile, $txt);
            fclose($myfile);
            
            //return $div . " " . $head;
            
            
            
            
            
            
            $path="C:\Program Files\wkhtmltopdf\bin"; 
            chdir($path); 
            $salida = shell_exec('wkhtmltopdf --page-size Letter http://localhost:8000/pagina C:\Users\Saul-WM\Desktop\holamundo10.pdf');
            return "<pre>$salida</pre>";
           /* $configuration = DocRaptor\Configuration::getDefaultConfiguration();
            $configuration->setUsername("MZAjkfcYIHgMq6V1zHY");

            $docraptor = new DocRaptor\DocApi();

            $doc = new DocRaptor\Doc();
            $doc->setTest(true);
            $doc->setDocumentUrl("http://webmaps.com.mx"); //
            $doc->setName("docraptor-php.pdf");
            $doc->setDocumentType("pdf");

            $create_response = $docraptor->createDoc($doc);*/
        }

}
