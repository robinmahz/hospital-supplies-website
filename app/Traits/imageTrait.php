<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait ImageTrait
{
    public function set($path, $file)
    {
        $name = Str::slug(Carbon::now()) . '.' . $file->getClientOriginalExtension();
        Storage::disk('public')->putFileAs($path, $file, $name);
        return $name;
    }

    public function delete($path, $file)
    {
        Storage::disk('public')->delete($path . '/' . $file);
        return;
    }
}
