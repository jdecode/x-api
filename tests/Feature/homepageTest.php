<?php

it('can see the homepage', function () {
    $this->get(route('home'))
        ->assertOk();
});
