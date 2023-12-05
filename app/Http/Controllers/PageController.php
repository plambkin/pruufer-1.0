<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PageController extends Controller
{
    /**
     * Update the page with the provided token and page URL.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function updatePageOld(Request $request)
    {
        // Validate the request (you can customize this based on your requirements)
        /*        $request->validate([
                    'token' => 'required|string',
                    'pageUrl' => 'required|url',
                ]);*/

        // Log the request data for debugging
        Log::info('Request data:', $request->all());


        // Get the passed-in token from the request headers
        $passedToken = $request->header('Authorization');

        // Log the passed-in token for debugging purposes
        Log::info("Passed-in Token: $passedToken");

        // Authenticate the request using Sanctum middleware
        $this->middleware('auth:sanctum');

        // The user making the request is now available via the $request object
        $user = $request->user();

        Log::info("User is: " . $user);

        return response()->json(['message' => 'Update successful']);


    }


    public function updatePage(Request $request)
    {
            try {

                $url = $request->url();

                // Find the authenticated user
                $user = Auth::user();

                if (!$user) {
                    Log::error('User not authenticated.');
                    return response()->json(['error' => 'User not authenticated.'], 401);
                }

                // Find or create the page based on the URL and the user
                $page = $user->pages()->firstOrCreate(['url' => $url]);

                // Update count and set updated_at timestamp
                $page->increment('count');
                $page->touch(); // Update the updated_at timestamp

                Log::info('Page count updated successfully for user ' . $user->id . ' and URL ' . $url);

                return response()->json(['message' => 'Page count updated successfully']);
            } catch (\Exception $e) {
                Log::error('Exception during page update: ' . $e->getMessage());
                return response()->json(['error' => 'Internal Server Error'], 500);
            }


    }
}
