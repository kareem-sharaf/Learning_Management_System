<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProgressController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'subject_id' => 'required|exists:subjects,id',
            'video_id' => 'required|exists:videos,id',
        ]);

        $completedVideos = $user->videos + 1;
        $totalVideos = Video::where('subject_id', $request->subject_id)->count();

        $progress = Progress::updateOrCreate(
            [
                'user_id' => $request->user_id,
                'subject_id' => $request->subject_id,
            ],
            [
                'completed_videos' => $completedVideos,
            ]
        );

        return response()->json([
            'message' => 'Progress saved successfully',
            'progress_percentage' => ($totalVideos > 0) ? ($completedVideos / $totalVideos) * 100 : 0,
            'status' => 200,
        ]);
    }

    // Get the progress of a user in a specific subject
    public function getProgress($user_id, $subject_id)
    {
        $totalVideos = Video::where('subject_id', $subject_id)->count();
        $completedVideos = Progress::where('user_id', $user_id)
                                    ->where('subject_id', $subject_id)
                                    ->sum('completed_videos');

        $progressPercentage = ($totalVideos > 0) ? ($completedVideos / $totalVideos) * 100 : 0;

        return response()->json([
            'message' => 'Progress retrieved successfully',
            'progress_percentage' => $progressPercentage,
            'completed_videos' => $completedVideos,
            'total_videos' => $totalVideos,
            'status' => 200,
        ]);
    }

    // Get all progress for a user across all subjects
    public function getAllProgress($user_id)
    {
        $progressData = [];

        $progressRecords = Progress::where('user_id', $user_id)->get();

        foreach ($progressRecords as $progress) {
            $totalVideos = Video::where('subject_id', $progress->subject_id)->count();
            $completedVideos = $progress->completed_videos;
            $progressPercentage = ($totalVideos > 0) ? ($completedVideos / $totalVideos) * 100 : 0;

            $progressData[] = [
                'subject_id' => $progress->subject_id,
                'completed_videos' => $completedVideos,
                'total_videos' => $totalVideos,
                'progress_percentage' => $progressPercentage,
            ];
        }

        return response()->json([
            'message' => 'All progress retrieved successfully',
            'data' => $progressData,
            'status' => 200,
        ]);
    }

    // Delete the progress of a user in a specific subject
    public function deleteProgress($user_id, $subject_id)
    {
        $progress = Progress::where('user_id', $user_id)
                            ->where('subject_id', $subject_id)
                            ->first();

        if ($progress) {
            $progress->delete();
            return response()->json([
                'message' => 'Progress deleted successfully',
                'status' => 200,
            ]);
        } else {
            return response()->json(['error' => 'Progress not found'], 404);
        }
    }
}

