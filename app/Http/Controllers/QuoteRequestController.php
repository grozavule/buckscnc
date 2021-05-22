<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use App\Events\QuoteRequested;
use \ZipArchive;

class QuoteRequestController extends Controller
{
    public function index()
    {
        return view('quote.index', ['pageIdentifier' => 'quote']);
    }

    public function download(Quote $quote)
    {
        return Storage::download($quote->zip_uri);
    }

    public function store(Request $request)
    {
        //validate form input
        $validInput = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:35'],
            'last_name' => ['required', 'string', 'max:50'],
            'email_address' => ['required', 'email:rfc,dns', 'max:125'],
            'phone_number' => ['required', 'string', 'max:15', 'regex:/^[+]*[0-9]*\s*[(]*[0-9]{3}[)]*[\s\.\-]*[0-9]{3}[\.\-]*[0-9]{4}$/'],
            'quantity' => ['required', 'integer','min:1'],
            'material' => ['required', 'string', 'max:50'],
            'due_date' => ['required', 'after:today'],
            'company_name' => ['required', 'string', 'max:75'],
            'files' => ['required']
        ]);

        if($validInput->fails())
        {
            return Response::json($validInput->errors(), 400);
        }

        //save the quote to the database
        $quote = new Quote;
        $quote->first_name = $request->input('first_name');
        $quote->last_name = $request->input('last_name');
        $quote->email_address = $request->input('email_address');
        $quote->phone_number = $request->input('phone_number');
        $quote->quantity = $request->input('quantity');
        $quote->material = $request->input('material');
        $quote->due_date = $request->input('due_date');
        $quote->company_name = $request->input('company_name');
        //$quote->save();

        $files = [];
        $companyName = str_replace(' ', '_', $quote->company_name);
        foreach ($request->file('files') as $file) {
            $path = $file->storeAs(
                'quote-requests/' . $companyName . '/' . $quote->id,
                $file->getClientOriginalName()
            );
            $files[] = ['path' => storage_path('app/' . $path), 'fileName' => $file->getClientOriginalName()];
        }

        if(count($files) <= 0)
        {
            return Response::json(['files' => 'No files were received. Please try again'], 400);
        }

        $zip = new ZipArchive;
        $path = storage_path('app/public/' . $companyName . '/' . $quote->id);
        $zipFile = $path . '/' . now()->getTimestamp() . '.zip';
        Storage::makeDirectory('public/'. $companyName . '/' . $quote->id);
        $isOpen = $zip->open($zipFile, ZipArchive::CHECKCONS | ZipArchive::CREATE);
        if($isOpen === true)
        {
            $quote->zip_uri = 'public/' . $companyName . '/' . $quote->id . '/' . now()->getTimestamp() . '.zip';
            $quote->save();

            foreach ($files as $file) {
                if (file_exists($file['path'])) {
                    $isAdded = $zip->addFile($file['path'], $file['fileName']);
                    $quote->files()->create([
                        'quote_id' => $quote->id,
                        'file_uri' => $file['path']
                    ]);
                }
            }
            $zip->close();
        } else {
            Response::json(['danger' => 'A problem occurred while processing your files. Please try again.'], 400);
        }
        QuoteRequested::dispatch($quote);

        return Response::json(['success' => 'Thank you. Your request has been received.'], 200);
    }
}
