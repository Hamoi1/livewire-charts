<?php

namespace Hamoi1\LivewireCharts\Tests;

use Hamoi1\LivewireCharts\Charts\LivewireAreaChart;
use Livewire\Features\SupportTesting\Testable;
use Livewire\Livewire;

class LivewireAreaChartTest extends TestCase
{
    private function buildComponent(): Testable
    {
        return Livewire::test(LivewireAreaChart::class);
    }

    /** @test */
    public function can_build_component()
    {
        // Act
        $component = $this->buildComponent();

        // Assert
        $this->assertNotNull($component);
    }
}
