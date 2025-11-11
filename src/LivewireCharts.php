<?php

namespace Hamoi1\LivewireCharts;

use Hamoi1\LivewireCharts\Models\AreaChartModel;
use Hamoi1\LivewireCharts\Models\ColumnChartModel;
use Hamoi1\LivewireCharts\Models\LineChartModel;
use Hamoi1\LivewireCharts\Models\PieChartModel;
use Hamoi1\LivewireCharts\Models\RadarChartModel;
use Hamoi1\LivewireCharts\Models\TreeMapChartModel;

class LivewireCharts
{
    public function lineChartModel()
    {
        return (new LineChartModel)
            ->singleLine();
    }

    public function multiLineChartModel()
    {
        return (new LineChartModel)
            ->multiLine();
    }

    public function columnChartModel()
    {
        return (new ColumnChartModel)
            ->singleColumn();
    }

    public function multiColumnChartModel()
    {
        return (new ColumnChartModel)
            ->multiColumn();
    }

    public function areaChartModel()
    {
        return new AreaChartModel;
    }

    public function pieChartModel()
    {
        return new PieChartModel;
    }

    public function radarChartModel()
    {
        return new RadarChartModel;
    }

    public function treeMapChartModel()
    {
        return new TreeMapChartModel;
    }
}
