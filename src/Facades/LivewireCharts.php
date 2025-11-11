<?php

namespace Hamoi1\LivewireCharts\Facades;

use Hamoi1\LivewireCharts\Models\AreaChartModel;
use Hamoi1\LivewireCharts\Models\ColumnChartModel;
use Hamoi1\LivewireCharts\Models\LineChartModel;
use Hamoi1\LivewireCharts\Models\PieChartModel;
use Hamoi1\LivewireCharts\Models\RadarChartModel;
use Hamoi1\LivewireCharts\Models\TreeMapChartModel;
use Illuminate\Support\Facades\Facade;

/**
 * Class LivewireCharts
 * @package Hamoi1\LivewireCharts\Facades
 * @method static LineChartModel lineChartModel()
 * @method static LineChartModel multiLineChartModel()
 * @method static ColumnChartModel columnChartModel()
 * @method static ColumnChartModel multiColumnChartModel()
 * @method static AreaChartModel areaChartModel()
 * @method static PieChartModel pieChartModel()
 * @method static RadarChartModel radarChartModel()
 * @method static TreeMapChartModel treeMapChartModel()
 */
class LivewireCharts extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'livewirecharts';
    }
}
