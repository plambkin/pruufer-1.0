<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class EnrollmentController extends Controller
{

    public function getEnrolls24($token)
    {
        // Define a unique cache key for each token
        $cacheKey = 'enrolls_' . $token;

        // Get the random number from the cache for the specified token
        $enrolls = Cache::get($cacheKey);

        if ($enrolls === null) {
            // Generate a new random number between 5 and 14
            $enrolls = mt_rand(5, 14);

            // Store the new random number in the cache with a 24-hour expiration
            Cache::put($cacheKey, $enrolls, 24 * 60); // 24 hours

            return response()->json(['enrolls' => $enrolls]);
        }

        return response()->json(['enrolls' => $enrolls]);
    }


    public function getEnrolls24Beta($token)
    {
        // Define a unique cache key for each token
        $cacheKey = 'enrolls_' . $token;

        // Get the random number from the cache for the specified token
        $enrolls = Cache::get($cacheKey);

        if ($enrolls === null) {
            // Generate a new random number between 5 and 14
            $enrolls = mt_rand(5, 14);

            // Store the new random number in the cache with a 24-hour expiration
            Cache::put($cacheKey, $enrolls, 24 * 60); // 24 hours

            return response()->json(['enrolls' => $enrolls,
                'text1' => ' enrolled in a course',
                'text2' => ' in the last 24 hours']);
        }

        return response()->json(['enrolls' => $enrolls,
            'text1' => ' enrolled in a course',
            'text2' => ' in the last 24 hours']);
    }


    public function getEnrolls24Gamma(Request $request)
    {
        //$url = $request->url();

        // Make the URL the same as the one used in the pageUpdates

        $url = "http://www.pruuf-1.0.test/api/updatePage";

        try {
            // Find the authenticated user
            $user = Auth::user();

            if (!$user) {
                return response()->json(['error' => 'User not authenticated.'], 401);
            }

            // Your logic to retrieve the number, text1, and text2 based on the URL and user
            // Replace this with your actual logic

            $number = 42; // Replace with the actual number
            $text1 = 'People have viewed this page'; // Replace with the actual text1
            $text2 = 'in the last 24 hours'; // Replace with the actual text2

            // Retrieve the count for the specified URL and user in the last 24 hours


            $count = Page::where('user_id', $user->id)
                ->where('url', $url)
                ->where('created_at', '>=', Carbon::now()->subDay())
                ->sum('count');

            Log::info('Page count retrieved successfully for user ' . $user->id . ' and URL ' . $url);
            Log::info('count was ' . $count);



            return response()->json(['number' => $count, 'text1' => $text1, 'text2' => $text2]);
        } catch (\Exception $e) {
            Log::error('Exception during page retrieval: ' . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }

    }


}
