<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

beforeEach(function () {
    uses(RefreshDatabase::class);
});

it('can access home page', function () {
    $this->get('/')
        ->assertOk();
});
