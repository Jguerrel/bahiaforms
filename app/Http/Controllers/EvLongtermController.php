<?php

namespace App\Http\Controllers;

class EvLongtermController extends Controller
{
    /**
     * The EV "Long-term Stored Vehicle Check Sheet" content. Inbound check plus
     * regular checks every 2 months up to 12 months, per the EV sheet. Each row
     * is either a check (Check + Repair boxes + Remark) or a value row (text
     * inputs, e.g. SOC / tyre pressure), keyed by a stable prefix per schedule.
     */
    public static function sections(): array
    {
        return [
            [
                'code' => 'Inbound Check', 'key' => 'in', 'schedule' => 'Inspection date',
                'rows' => [
                    ['type' => 'tyres', 'key' => 'in_tp', 'label' => '1. Tire pressure check'],
                    ['type' => 'value', 'key' => 'in_12v', 'label' => '2. 12V Battery Inspection (SOC ≥ 65%)', 'unit' => 'SOC:'],
                    ['type' => 'value', 'key' => 'in_hv',  'label' => '3. HV power battery SOC (30% ≤ SOC ≤ 70%)', 'unit' => 'SOC:'],
                    ['type' => 'check', 'key' => 'in_4', 'label' => '4. Brake fluid and coolant level check'],
                    ['type' => 'check', 'key' => 'in_5', 'label' => '5. Close all lamps, doors and windows'],
                    ['type' => 'check', 'key' => 'in_6', 'label' => '6. Wiper blade remove and secure it and place it in the trunk'],
                    ['type' => 'check', 'key' => 'in_7', 'label' => '7. Remote key store'],
                ],
            ],
            self::regular('2 months stored vehicle', 'm2'),
            self::regular('4 months stored vehicle', 'm4'),
            self::regular('6 months stored vehicle', 'm6'),
            self::regular('8 months stored vehicle', 'm8'),
            self::regular('10 months stored vehicle', 'm10'),
            [
                'code' => '12 months stored vehicle', 'key' => 'm12', 'schedule' => 'Inspection date',
                'rows' => [
                    ['type' => 'value', 'key' => 'm12_12v', 'label' => '1. 12V Battery Inspection (SOC ≥ 65%)', 'unit' => 'SOC:'],
                    ['type' => 'value', 'key' => 'm12_hv',  'label' => '2. HV power battery SOC (30% ≤ SOC ≤ 70%)', 'unit' => 'SOC:'],
                    ['type' => 'check', 'key' => 'm12_3',  'label' => '3. Brake fluid and coolant level check'],
                    ['type' => 'check', 'key' => 'm12_4',  'label' => '4. Functional operation inspection'],
                    ['type' => 'check', 'key' => 'm12_5',  'label' => '5. Under vehicle inspection'],
                    ['type' => 'check', 'key' => 'm12_6',  'label' => '6. Exterior inspection'],
                    ['type' => 'check', 'key' => 'm12_7',  'label' => '7. Interior inspection'],
                    ['type' => 'check', 'key' => 'm12_8',  'label' => '8. Road test and remove rust on brake disc'],
                    ['type' => 'check', 'key' => 'm12_9',  'label' => '9. Change tire-ground contact point at least 1/4 circle'],
                    ['type' => 'tyres', 'key' => 'm12_tp', 'label' => '10. Tire pressure check'],
                ],
            ],
        ];
    }

    /**
     * The 7 recurring items shared by the 2/4/6/8/10-month regular checks.
     */
    private static function regular(string $title, string $prefix): array
    {
        return [
            'code' => $title, 'key' => $prefix, 'schedule' => 'Inspection date',
            'rows' => [
                ['type' => 'value', 'key' => "{$prefix}_12v", 'label' => '1. 12V Battery Inspection (SOC ≥ 65%)', 'unit' => 'SOC:'],
                ['type' => 'value', 'key' => "{$prefix}_hv",  'label' => '2. HV power battery SOC (30% ≤ SOC ≤ 70%)', 'unit' => 'SOC:'],
                ['type' => 'check', 'key' => "{$prefix}_3", 'label' => '3. Brake fluid and coolant level check'],
                ['type' => 'check', 'key' => "{$prefix}_4", 'label' => '4. A/C Operation'],
                ['type' => 'check', 'key' => "{$prefix}_5", 'label' => '5. Exterior inspection'],
                ['type' => 'check', 'key' => "{$prefix}_6", 'label' => '6. Move the vehicle to remove rust on brake disc and change tire-ground contact point at least 1/4 circle'],
                ['type' => 'tyres', 'key' => "{$prefix}_tp", 'label' => '7. Tire pressure check'],
            ],
        ];
    }
}
