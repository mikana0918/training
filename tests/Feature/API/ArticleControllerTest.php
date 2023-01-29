<?php

namespace Tests\Feature\API;

use Tests\TestCase;

class ArticleControllerTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test_index()
    {
        $res = $this->get("/api/articles");

        $res->assertStatus(200);
    }
}
