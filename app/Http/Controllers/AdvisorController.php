<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvisorController extends Controller
{
    public function show(Request $request)
    {
        $age = $request->query('age');  // Required, but we'll validate in middleware
        $interet = $request->query('interet', 'non spécifié');  // Optional, default value

        // Simple logic for personalized message (customize as needed)
        $message = "Bonjour! À {$age} ans, ";
        if ($interet === 'developpement') {
            $message .= "nous vous conseillons de vous spécialiser en Laravel pour booster votre carrière.";
        } elseif ($age > 30) {
            $message .= "considérez une reconversion professionnelle si votre intérêt est {$interet}.";
        } else {
            $message .= "explorez {$interet} pour gagner en expérience.";
        }

        return view('show', compact('message', 'age', 'interet'));
    }
}