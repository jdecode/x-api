<?php

use App\Models\User;

test('email can be verified', function ()
{
    $user = User::factory()->create([
        'email_verified_at' => null,
    ]);

    Event::fake();

    $verificationUrl = URL::temporarySignedRoute(
        'verification.verify',
        now()->addMinutes(60),
        ['id' => $user->id, 'hash' => sha1($user->email)]
    );

    $response = $this->actingAs($user)->get($verificationUrl);

    //Event::assertDispatched(Verified::class);
    //$this->assertTrue($user->fresh()->hasVerifiedEmail());
    $response->assertRedirect(config('app.frontend_url') . '/dashboard');
})->group('email', 'verification');

test('email is not verified with invalid hash', function ()
{
    $user = User::factory()->create([
        'email_verified_at' => null,
    ]);

    $verificationUrl = URL::temporarySignedRoute(
        'verification.verify',
        now()->addMinutes(60),
        ['id' => $user->id, 'hash' => sha1('wrong-email')]
    );

    $this->actingAs($user)->get($verificationUrl);

    $this->assertFalse($user->fresh()->hasVerifiedEmail());
})->group('email', 'verification');
