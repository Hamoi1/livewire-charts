<?php

namespace Hamoi1\LivewireCharts\Charts;

use Hamoi1\LivewireCharts\Models\TreeMapChartModel;
use Livewire\Component;

/**
 * Class LivewireTreeMapChart
 * @package Hamoi1\LivewireCharts\Charts
 */
class LivewireTreeMapChart extends Component
{
    public $treeMapChartModel;

    public function mount(TreeMapChartModel $treeMapChartModel)
    {
        $this->treeMapChartModel = $treeMapChartModel->toArray();
    }

    public function onBlockClick($block)
    {
        $onBlockClickEventName = data_get($this->treeMapChartModel, 'onBlockClickEventName');

        if ($onBlockClickEventName === null) {
            return;
        }

        $this->dispatch($onBlockClickEventName, $block);
    }

    public function render()
    {
        return view('livewire-charts::livewire-tree-map-chart');
    }
}
