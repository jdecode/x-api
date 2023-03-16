<?php

use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\post;

test('New user can register', function () {
    // Arrange
    $user = createUnverifiedUser();

    // Act
    post(route('register'), $user);

    // Assert
    assertDatabaseHas('users', ['email' => $user['email']]);
})->group('api', 'register');
