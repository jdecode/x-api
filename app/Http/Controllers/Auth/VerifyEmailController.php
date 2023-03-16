<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    public function __construct()
    {
        Auth::loginUsingId(request()->route('id'));
    }
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            Auth::logout();
            return redirect()->intended(
                config('app.frontend_url')
            );
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        Auth::logout();
        return redirect()->intended(
            config('app.frontend_url')
        );
    }
}
