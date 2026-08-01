<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * Model-specific PDI checklists for Zeekr vehicles. The generic (Geely / EV)
 * PDI does not fit these, so each Zeekr model gets its own sheet:
 *   - Zeekr X   -> 4-result-column sheet (De acuerdo / No está bien / No aplicable)
 *   - Zeekr 7X  -> "classification" sheet (Check results / Level / Categorization)
 *   - Zeekr 001 -> "classification" sheet (Resultado / Nivel / Solucionar)
 *
 * The checklist content lives in config/zeekr_x.php, zeekr_7x.php, zeekr_001.php
 * so the entry and view screens stay in sync from a single definition.
 */
class ZeekrPdiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /** Which Zeekr sheet applies to this model name, or null if not a Zeekr. */
    public static function detectModel($modelo): ?string
    {
        $m = strtoupper((string) $modelo);
        if (!Str::contains($m, 'ZEEKR')) {
            return null;
        }
        if (Str::contains($m, '001')) return '001';
        if (Str::contains($m, '7X'))  return '7x';
        if (Str::contains($m, 'X'))   return 'x';
        return null;
    }

    /** Render the blank Zeekr PDI for data entry. */
    public function pdi(Request $request)
    {
        return $this->render($request, null, ZeekrPdiController::detectModel($request->modelo));
    }

    /** Render a saved Zeekr PDI (read of the stored JSON). */
    public function pdi_view(Request $request)
    {
        $formdata = json_decode($request->formrequest);
        $model = ZeekrPdiController::detectModel(data_get($formdata, 'modelo', $request->modelo));
        return $this->render($request, $formdata, $model);
    }

    private function render(Request $request, $formdata, ?string $model)
    {
        // Fall back to the generic EV PDI if somehow not a recognised Zeekr.
        if ($model === null) {
            return app(EvPdiController::class)->ev_pdi_check_list($request);
        }

        $config = config("zeekr_{$model}");
        $blade  = $model === 'x' ? 'zeekr_x_pdi' : 'zeekr_class_pdi';

        return view($blade, [
            'request'  => $request,
            'formdata' => $formdata,
            'model'    => $model,
            'cfg'      => $config,
        ]);
    }
}
