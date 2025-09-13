<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileUploader
{
    /**
     * Upload a file to the specified disk and directory
     *
     * @param UploadedFile $file
     * @param string $directory
     * @param string $disk
     * @return string|null
     */
    public static function upload(UploadedFile $file, string $directory = 'uploads', string $disk = 'public'): ?string
    {
        try {
            $filename = self::generateUniqueFilename($file);
            $path = $file->storeAs($directory, $filename, $disk);
            
            return $path;
        } catch (\Exception $e) {
            Log::error('File upload failed: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Upload multiple files
     *
     * @param array $files
     * @param string $directory
     * @param string $disk
     * @return array
     */
    public static function uploadMultiple(array $files, string $directory = 'uploads', string $disk = 'public'): array
    {
        $uploadedFiles = [];
        
        foreach ($files as $file) {
            if ($file instanceof UploadedFile) {
                $path = self::upload($file, $directory, $disk);
                if ($path) {
                    $uploadedFiles[] = $path;
                }
            }
        }
        
        return $uploadedFiles;
    }

    /**
     * Delete a file from storage
     *
     * @param string $path
     * @param string $disk
     * @return bool
     */
    public static function delete(string $path, string $disk = 'public'): bool
    {
        try {
            return Storage::disk($disk)->delete($path);
        } catch (\Exception $e) {
            Log::error('File deletion failed: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Get file URL
     *
     * @param string $path
     * @param string $disk
     * @return string|null
     */
    public static function getUrl(string $path, string $disk = 'public'): ?string
    {
        try {
            return Storage::disk($disk)->url($path);
        } catch (\Exception $e) {
            Log::error('File URL generation failed: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Generate unique filename
     *
     * @param UploadedFile $file
     * @return string
     */
    private static function generateUniqueFilename(UploadedFile $file): string
    {
        $extension = $file->getClientOriginalExtension();
        $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $filename = Str::slug($filename);
        
        return $filename . '_' . time() . '_' . Str::random(10) . '.' . $extension;
    }

    /**
     * Validate file type
     *
     * @param UploadedFile $file
     * @param array $allowedTypes
     * @return bool
     */
    public static function validateType(UploadedFile $file, array $allowedTypes): bool
    {
        $mimeType = $file->getMimeType();
        return in_array($mimeType, $allowedTypes);
    }

    /**
     * Validate file size
     *
     * @param UploadedFile $file
     * @param int $maxSizeInMB
     * @return bool
     */
    public static function validateSize(UploadedFile $file, int $maxSizeInMB): bool
    {
        $maxSizeInBytes = $maxSizeInMB * 1024 * 1024;
        return $file->getSize() <= $maxSizeInBytes;
    }

    /**
     * Get file size in human readable format
     *
     * @param UploadedFile $file
     * @return string
     */
    public static function getHumanReadableSize(UploadedFile $file): string
    {
        $bytes = $file->getSize();
        $units = ['B', 'KB', 'MB', 'GB'];
        
        for ($i = 0; $bytes > 1024 && $i < count($units) - 1; $i++) {
            $bytes /= 1024;
        }
        
        return round($bytes, 2) . ' ' . $units[$i];
    }
}
