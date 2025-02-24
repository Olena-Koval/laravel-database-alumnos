<?php
protected function authenticated(Request $request, $user)
{
    return redirect()->intended(RouteServiceProvider::HOME);
}
