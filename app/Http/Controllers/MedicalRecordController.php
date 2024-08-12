<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    /**
     * Récupère les informations médicales d'un patient.
     *
     * @param int $patientId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMedicalInformation($patientId)
    {
        try {
            // Récupérer le patient
            $patient = Patient::findOrFail($patientId);

            // Récupérer les informations médicales
            $medicalInfo = $patient->medicalRecord;

            // Vérifier si les informations médicales existent
            if (!$medicalInfo) {
                return response()->json([
                    'message' => 'Aucune information médicale trouvée pour ce patient.'
                ], 404);
            }

            // Retourner les informations médicales
            return response()->json([
                'patient' => $patient->name,
                'medical_information' => $medicalInfo
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Une erreur est survenue lors de la récupération des informations médicales.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

}
