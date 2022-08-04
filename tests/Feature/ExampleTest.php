<?php

/**
 * Check if home page is accessible.
 */
it('can access home page', function () {
    $this->get('/')
        ->assertOk();
});
