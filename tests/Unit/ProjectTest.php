<?php

namespace Tests\Unit;

use App\Models\Project;
use PHPUnit\Framework\TestCase;
use Tests\TestCase as TestsTestCase;

class ProjectTest extends TestsTestCase
{
    /** @test */
    public function it_has_a_path()
    {

    $project=Project::factory()->create();
    $this->assertEquals('projects/'.$project->id,$project->path());

    }
}
