<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvPdiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Render the blank EV PDI checklist for data entry.
     */
    public function ev_pdi_check_list(Request $request)
    {
        return view('ev_pdi_check_list', [
            'request'  => $request,
            'formdata' => null,
            'sections' => self::sections(),
        ]);
    }

    /**
     * Render a previously saved EV PDI checklist (read of the stored JSON).
     */
    public function ev_pdi_check_list_view(Request $request)
    {
        return view('ev_pdi_check_list', [
            'request'  => $request,
            'formdata' => json_decode($request->formrequest),
            'sections' => self::sections(),
        ]);
    }

    /**
     * The EV PDI checklist content, taken from the "EV：Pre-Delivery Inspection
     * (PDI) checking list" sheet. Defined once so the entry and view screens
     * stay in sync. Each check row gets an "_ok" and "_rp" (repair) field keyed
     * by its stable key; value rows use "_<sub>".
     */
    public static function sections(): array
    {
        return [
            // Two-column layout: A + B on the left, C + D + E on the right.
            'left' => [
                [
                    'code' => 'A', 'title' => 'Work preparation',
                    'rows' => [
                        ['type' => 'check', 'key' => 'a1', 'label' => 'PPE (insulation gloves, shoes and protective glasses are necessary) or check at the insulation working bay'],
                        ['type' => 'check', 'key' => 'a2', 'label' => 'Tyre pressure gauge, diagnostic tool, torque wrench, wheel nut socket, multimeter and other tools if needed'],
                        ['type' => 'check', 'key' => 'a3', 'label' => 'Seat cover, Steering wheel cover, footwell mat, bumper and wing cover, cotton cloth'],
                        ['type' => 'check', 'key' => 'a4', 'label' => 'Install / check accessories'],
                        ['type' => 'check', 'key' => 'a5', 'label' => 'Check safety compliance sticker, VIN, vehicle identification and other important labels'],
                    ],
                ],
                [
                    'code' => 'B', 'title' => 'Visual inspection',
                    'rows' => [
                        ['type' => 'subheader', 'label' => 'Vehicle peripheral inspection'],
                        ['type' => 'check', 'key' => 'b1', 'label' => 'Body painted surface, front and rear Windshield'],
                        ['type' => 'check', 'key' => 'b2', 'label' => 'Should check whether the wheel rims have damage and deformation'],
                        ['type' => 'check', 'key' => 'b3', 'label' => 'Door handles'],
                        ['type' => 'check', 'key' => 'b4', 'label' => 'Mirrors and Four door glasses'],
                        ['type' => 'check', 'key' => 'b5', 'label' => 'Headlight surface, Taillight surface'],
                        ['type' => 'check', 'key' => 'b6', 'label' => 'Hub trim cover plate (If equipped)'],
                        ['type' => 'check', 'key' => 'b7', 'label' => 'Door/glass seal rubber strip (No breakage, damage)'],
                        ['type' => 'check', 'key' => 'b8', 'label' => 'Check if the gap of the engine hood, trunk lid, and four doors is even'],
                        ['type' => 'subheader', 'label' => 'Inspection of body electrical, interior, instrument indication'],
                        ['type' => 'check', 'key' => 'b9',  'label' => 'Check if there are fault lights'],
                        ['type' => 'check', 'key' => 'b10', 'label' => 'Working condition of electrical components'],
                        ['type' => 'check', 'key' => 'b10a', 'indent' => true, 'label' => '· Headlights (high beam & low beam), daytime running light, position lights'],
                        ['type' => 'check', 'key' => 'b10b', 'indent' => true, 'label' => '· Tail lamp, license plate lamp'],
                        ['type' => 'check', 'key' => 'b10c', 'indent' => true, 'label' => '· Brake lamp, Reversing lamp, rear fog light'],
                        ['type' => 'check', 'key' => 'b10d', 'indent' => true, 'label' => '· Turning light lamp, Hazard warning lamp'],
                        ['type' => 'check', 'key' => 'b10e', 'indent' => true, 'label' => '· Windshield wiper, Wiper nozzle, Horn'],
                        ['type' => 'check', 'key' => 'b10f', 'indent' => true, 'label' => '· Defogging function, Cigarette lighter'],
                        ['type' => 'check', 'key' => 'b10g', 'indent' => true, 'label' => '· Clock (Set time)'],
                        ['type' => 'check', 'key' => 'b10h', 'indent' => true, 'label' => '· Sun visor and its mirror and light'],
                        ['type' => 'check', 'key' => 'b10i', 'indent' => true, 'label' => '· Interior light'],
                        ['type' => 'check', 'key' => 'b10j', 'indent' => true, 'label' => '· Car sunroof & sunshade operation'],
                        ['type' => 'check', 'key' => 'b11', 'label' => 'Check the appearance and function of the internal rearview mirrors'],
                        ['type' => 'check', 'key' => 'b12', 'label' => 'Check the steering wheel operation'],
                        ['type' => 'check', 'key' => 'b13', 'label' => 'Check functions of instrumental panel cluster and multi-media system'],
                        ['type' => 'check', 'key' => 'b13a', 'indent' => true, 'label' => '· Instrument panel cluster language, time, indicators and functions'],
                        ['type' => 'check', 'key' => 'b13b', 'indent' => true, 'label' => '· Multimedia time, language settings, phone connection, bluetooth, radio, audio, etc.'],
                        ['type' => 'check', 'key' => 'b14', 'label' => "Check glove box, owner's manuals, cup holders and storage areas"],
                        ['type' => 'check', 'key' => 'b15', 'label' => 'Check the appearance and function of seats and seat belts'],
                        ['type' => 'check', 'key' => 'b16', 'label' => 'Check whether the hood, trunk and charging port cover can be opened normally'],
                        ['type' => 'check', 'key' => 'b17', 'label' => 'Check the function of the window glass lifter'],
                        ['type' => 'check', 'key' => 'b18', 'label' => 'Check the door lock and keyless entry system'],
                        ['type' => 'check', 'key' => 'b19', 'label' => 'Check the child safety lock switch'],
                        ['type' => 'check', 'key' => 'b20', 'label' => 'Check the trunk compartment light'],
                        ['type' => 'check', 'key' => 'b21', 'label' => 'Inspection of trunk compartment trim and panel'],
                        ['type' => 'check', 'key' => 'b22', 'label' => 'Check the spare tire pressure, installation and its appearance'],
                        ['type' => 'check', 'key' => 'b23', 'label' => 'Check the car jack, tool package, warning triangle and tow hook'],
                        ['type' => 'check', 'key' => 'b24', 'label' => 'EPB and AUTO-HOLD'],
                    ],
                ],
            ],
            'right' => [
                [
                    'code' => 'C', 'title' => 'Check the engine compartment (EV)',
                    'rows' => [
                        ['type' => 'check', 'key' => 'c1', 'label' => 'Visual inspection of components in front cabin for fluid level, leakage and damage'],
                        ['type' => 'check', 'key' => 'c1a', 'indent' => true, 'label' => '· Brake Fluid'],
                        ['type' => 'check', 'key' => 'c1b', 'indent' => true, 'label' => '· Wiper cleaning fluid'],
                        ['type' => 'check', 'key' => 'c1c', 'indent' => true, 'label' => '· Check whether the coolant level of the power battery pack is normal'],
                        ['type' => 'check', 'key' => 'c2', 'label' => 'Check the wiring harness and plug (including high voltage wiring harness) in the cabin connection and fixing (No extrusion, loosening)'],
                        ['type' => 'check', 'key' => 'c3', 'label' => 'Check the leakage and interference of the high and low pressure pipes, pressure switches, and charging valves of the air conditioner'],
                    ],
                ],
                [
                    'code' => 'D', 'title' => 'Check for chassis',
                    'rows' => [
                        ['type' => 'check', 'key' => 'd1', 'label' => 'The torque of the tire nut'],
                        ['type' => 'check', 'key' => 'd2', 'label' => 'Adjust the tire pressure'],
                        ['type' => 'check', 'key' => 'd3', 'label' => 'Check the tire damage'],
                        ['type' => 'check', 'key' => 'd4', 'label' => 'Check drive motors, power steering gear, brakes, cooling and heating water pipes, oil pipes, brake hose, wheel speed sensor etc. for leaks or damage'],
                        ['type' => 'check', 'key' => 'd5', 'label' => 'Check the drive shaft and sleeve for leaks or damage'],
                        ['type' => 'check', 'key' => 'd6', 'label' => 'Check the chassis damage and rust'],
                        ['type' => 'check', 'key' => 'd7', 'label' => 'Visually inspect the chassis for visible nuts/bolts missing or visibly loose'],
                        ['type' => 'check', 'key' => 'd8', 'label' => 'Visually check the battery pack for bumps and damages'],
                    ],
                ],
                [
                    'code' => 'E', 'title' => 'Final check & Clean',
                    'rows' => [
                        ['type' => 'check', 'key' => 'e1', 'label' => 'Checking the function of DC or AC charging'],
                        ['type' => 'check', 'key' => 'e2', 'label' => 'Remove the vehicle covers and other things that are not used for the customer'],
                        ['type' => 'check', 'key' => 'e3', 'label' => 'Car cleaning (exterior and interior)'],
                        ['type' => 'check', 'key' => 'e4', 'label' => 'Use diagnostic system to check fault codes and make sure there is no fault with vehicle'],
                        ['type' => 'check', 'key' => 'e5', 'label' => 'Reset service mileage'],
                        ['type' => 'check', 'key' => 'e6', 'label' => 'Update all the software to the latest version'],
                        ['type' => 'check', 'key' => 'e7', 'label' => 'Record and charge the SOC of 12V battery, no less than 65%'],
                        ['type' => 'check', 'key' => 'e8', 'label' => 'Record and charge the power battery SOC, no less than 30%'],
                    ],
                ],
            ],
        ];
    }
}
