<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;
use App\Models\Establishment;
use App\Http\Resources\EstablishmentResource;
use App\Http\Requests\EstablishmentStoreRequest;
use Exception;

class EstablishmentController extends Controller
{
    /**
     * Récupère et renvoie la liste de tous les établissements.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            $establishments = Establishment::all();
            return response()->json([
                'status' => 'success',
                'message' => 'Établissements récupérés avec succès',
                'data' => EstablishmentResource::collection($establishments)
            ], 200);
        } catch (QueryException $e) {
            Log::error('Error retrieving establishments: ' . $e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'Une erreur est survenue lors de la récupération des établissements.'
            ], 500);
        }
    }

    /**
     * Enregistre un nouvel établissement dans la base de données.
     *
     * @param  \App\Http\Requests\EstablishmentStoreRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(EstablishmentStoreRequest $request)
    {
        try {
            $establishment = new Establishment;
            $establishment->fill($request->all());

            // Enregistrer le logo
            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                $logoPath = $logo->storeAs('public/logos', $logo->getClientOriginalName());
                $establishment->logo = $logoPath;
            }

            $establishment->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Établissement créé avec succès',
                'data' => new EstablishmentResource($establishment)
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Une erreur inattendue s\'est produite'
            ], 500);
        }
    }

    /**
     * Affiche les détails d'un établissement spécifique.
     *
     * @param  string  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(string $id)
    {
        try {
            $establishment = Establishment::findOrFail($id);
            return response()->json([
                'status' => 'success',
                'message' => 'Établissement récupéré avec succès',
                'data' => new EstablishmentResource($establishment)
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Établissement non trouvé.'
            ], 404);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Établissement non trouvé.'
            ], 404);
        }
    }

    /**
     * Met à jour un établissement existant.
     *
     * @param  \App\Http\Requests\EstablishmentStoreRequest  $request
     * @param  string  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(EstablishmentStoreRequest $request, $id)
    {
        try {
            $establishment = Establishment::findOrFail($id);
            $establishment->fill($request->all());

            // Enregistrer le nouveau logo
            if ($request->hasFile('image')) {
                $logo = $request->file('image');
                $logoPath = $logo->storeAs('public/logos', $logo->getClientOriginalName());
                $establishment->logo = $logoPath;
            }

            $establishment->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Établissement mis à jour avec succès',
                'data' => new EstablishmentResource($establishment)
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Établissement non trouvé.'
            ], 404);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Une erreur est survenue lors de la mise à jour de l\'établissement.'
            ], 500);
        }
    }
    /**
     * Supprime un établissement spécifique de la base de données.
     *
     * @param  string  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            $establishment = Establishment::findOrFail($id);
            $establishment->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Établissement supprimé avec succès'
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Établissement non trouvé.'
            ], 404);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Une erreur est survenue lors de la suppression de l\'établissement.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
