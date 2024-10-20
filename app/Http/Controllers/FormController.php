<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Validation\ValidationException;


class FormController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        try {
            // Validate the request
            $request->validate([
                'card_number' => 'required',
                'name' => 'required',
                'qualified_as' => 'required',
                'id_number' => 'required',
                'issue_date' => 'required|date',
                'expiry_date' => 'required|date',
                'company' => 'required',
                'photo' => 'required', // added image validation
            ]);

            // If validation passes, handle the successful flow.
            return $this->handleValidRequest($request);
        } catch (ValidationException $e) {
            // Handle validation failure
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $e->errors(),
            ], 422);
        }
    }

    private function handleValidRequest($request)
    {
        // Handle file upload
        $path = $request->file('photo')->store('photos', 'public');

        $absolutePath = public_path('storage/' . $path);

        $qr_code_data = 'https://yourwebsite.com/verify-card/TUVR23-6279';

        

        // Generate PDF
        $pdf = PDF::loadView('pdf', [
            'data' => $request->all(),
            'photo_path' => $absolutePath,
            'qr_code_data' => $qr_code_data,
        ]);

        return $pdf->download('form_data.pdf');
    }
}
