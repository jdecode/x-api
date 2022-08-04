<?php

it('Homepage works!')
    ->get('/')
    ->assertStatus(200);

