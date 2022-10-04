<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use FFMpeg\Format\Video\X264;
use Illuminate\Http\Request;
use Inertia\Inertia;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return Inertia::render('Admin/Dashboard');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addPost(Request $request)
    {
        if ($request->isMethod('POST')) {

            foreach ($request->movies as $key => $mov) {
                $folder = uniqid();
                $name = uniqid();
                $path = $mov->store('/movies/must-delete', 'public_uploads');

                $media = FFMpeg::fromDisk('public_uploads')->open(($path));
                $durationInSeconds = $media->getDurationInSeconds();
                $frameSecond = (int)($durationInSeconds * 0.60);

                $midBitrate = (new X264)->setKiloBitrate(500);

                FFMpeg::fromDisk('public_uploads')
                    ->open(($path))
                    ->getFrameFromSeconds($frameSecond)
                    ->export()
                    ->toDisk('public_uploads')
                    ->save('movies/' . $folder . '/thumbnails/' . $name . '.png')
                    ->exportForHLS()
                    ->setSegmentLength(30) // optional
                    ->addFormat($midBitrate)
                    ->toDisk('public_uploads')
                    ->save('movies/' . $folder . '/playlist/' . $name . '.m3u8');

                Movie::create([
                    'uuid' => str()->uuid()->toString(),
                    'duration' => $durationInSeconds,
                    'thumbnail' => asset(getStorePath('movies/' . $folder . '/thumbnails/' . $name . '.png')),
                    'playlist' => asset(getStorePath('movies/' . $folder . '/playlist/' . $name . '.m3u8')),
                    'path' => asset(getStorePath($path))
                ]);
            }

            dd($durationInSeconds, $frameSecond, $folder, $name);
            // dd($request->movies, $path);
        }
        return Inertia::render('Admin/VideoPostAdd');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function PostList()
    {
        return Inertia::render('Admin/VideoPostList');
    }
}
