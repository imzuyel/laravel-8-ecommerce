<?php

namespace App\Http\Controllers\backend;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class BackupController extends Controller
{

    public function index()
    {
        Gate::authorize('app.backups.index');
        $disk                       = Storage::disk(config('backup.backup.destination.disks')[0]);
        $files                      = $disk->files(config('backup.backup.name'));

        $backups                    = [];
        // Make an array of backup files, with their filesize and data
        foreach ($files as $key => $file) {
            // Only takes zip file
            if (substr($file, -4) == '.zip' && $disk->exists($file)) {
                $file_name = str_replace(config('backup.backup.name') . '/', '', $file);
                $backups[] = [
                    'file_path'     => $file,
                    'file_name'     => $file_name,
                    'file_size'     => $this->bytesToHuman($disk->size($file)),
                    'created_at'    => Carbon::parse($disk->lastModified($file))->diffForHumans(),
                    'download_link' => action([BackupController::class,'download'],[$file_name])
                ];
            }
        }
        $backups = array_reverse($backups);
        return view('backend.backups.index', compact('backups'));
    }
    // Human readable file size and time
    private function bytesToHuman($bytes)
    {
        $units = ['B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB'];

        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 2) . ' ' . $units[$i];
    }



    public function store(Request $request)
    {
        Gate::authorize('app.backups.create');
        Artisan::call('backup:run');
        toastr()->success('Backup created successfully!', 'success');
        return back();
    }


    public function download($file_name)
    {
        Gate::authorize('app.backups.download');

        $file           = config('backup.backup.name') . '/' . $file_name;
        $disk           = Storage::disk(config('backup.backup.destination.disks')[0]);
        if ($disk->exists($file)) {
            $fs         = Storage::disk(config('backup.backup.destination.disks')[0])->getDriver();
            $stream     = $fs->readStream($file);
            return \Response::stream(function () use ($stream) {
                fpassthru($stream);
            }, 200, [
                "Content-Type"        => $fs->getMimetype($file),
                "Content-Length"      => $fs->getSize($file),
                "Content-disposition" => "attachment; filename=\"" . basename($file) . "\"",
            ]);
        }
    }


    public function destroy($file_name)
    {
        Gate::authorize('app.backups.destroy');
        $disk = Storage::disk(config('backup.backup.destination.disks')[0]);
        if ($disk->exists(config('backup.backup.name') . '/' . '' . $file_name)) {
            $disk->delete(config('backup.backup.name') . '/' . '' . $file_name);
        }
        toastr()->success('Backup deleted successfully!', 'success');
        return back();
    }
    public function clean()
    {
        Gate::authorize('app.backups.destroy');
        // start the backup process
        Artisan::call('backup:clean');
        toastr()->success('Backup cleaned successfully!', 'success');
        return back();
    }
}
