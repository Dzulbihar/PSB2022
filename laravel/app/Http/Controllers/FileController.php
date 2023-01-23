<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{

	public function tamplate(Request $request)
	{
		if(Storage::disk('local')->exists("pdf/$request->file")){
			$path = Storage::disk('local')->path("pdf/$request->file");
			$content = file_get_contents($path);
			return response($content)->withHeaders([
				'Content-Type' => mime_content_type($path)
			]);
		}
		return redirect('/404');
	}

}
