<?php

namespace App\Http\Controllers;

use App\Models\Click;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MetricsController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function click(Request $request): JsonResponse
    {
        $user_agent = $request->header('User-Agent');

        foreach (config('os') as $regex => $value) {
            if (preg_match($regex, $user_agent)) {
                $os = $value;
            }
        }

        Click::create([
            'user_id'      => $request->get('user_id'),
            'ip'           => $request->ip(),
            'browser'      => $user_agent,
            'os'           => $os ?? null,
            'page'         => url()->previous(),
            'button_name'  => $request->get('button_name'),
            'button_group' => $request->get('button_group'),
        ]);

        return response()->json([], 201);
    }
}
