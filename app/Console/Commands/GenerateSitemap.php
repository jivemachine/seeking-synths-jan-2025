<?php

namespace App\Console\Commands;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Spatie\Sitemap\Tags\Image;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap for the website';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->generateSitemap();
        $this->generateSitemapImages();
        return 0;
    }

    /**
     * Generates sitemap.xml for project
     *
     * @return void
     */
    public function generateSitemap()
    {

        $this->info("Generating sitemap.xml...");

        $sitemap = Sitemap::create()
            ->add(Url::create('/')->setPriority(1.0)->setChangeFrequency('daily'));

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully!');
    }

    /**
     * Generates sitemap-images.xml for project
     * @return void
     */
    public function generateSitemapImages(): void
    {
        $this->info("Generating sitemap-images.xml...");

        $imageSitemap = Sitemap::create();

        // Retrieve all public images
        $allImages = $this->getAllPublicImages();

        // Retrieve all archived images
        $allArchivedImages = $this->getAllArchivedImages();

        // Associate all public images with the url they are located on
        $index = Url::create('/')
            ->setPriority(1.0)
            ->setChangeFrequency('daily');

        foreach ($allImages as $imageUrl) {
            // Add the image to the index page entry
            $index->addImage(
                $imageUrl
            );
        }

        $imageSitemap->add($index);

        // Adding archived images as their own URL
        foreach ($allArchivedImages as $archivedImageUrl) {
            $imageSitemap->add(
                Url::create($archivedImageUrl)
                    ->setPriority(0.5)
                    ->setChangeFrequency('weekly')
            );
        }

        // Write the sitemap file
        $imageSitemap->writeToFile(public_path('sitemap-images.xml'));

        $this->info('Image sitemap generated successfully!');
    }


    /**
     * fetches all image urls from the public/images folder
     * helper function for generateSitemapImages function
     *
     * @return array
     */
    public function getAllPublicImages(): array
    {
        $directory = public_path('images');
        $imageUrls = [];

        // Ensure directory exists
        if (!is_dir($directory)) {
            return $imageUrls;
        }

        // scan the directory
        $files = scandir($directory);

        foreach ($files as $file) {
            // Skip hidden directorys like '.' and '..'
            if ($file === '.' || $file === '..') {
                continue;
            }

            $filePath = $directory . DIRECTORY_SEPARATOR . $file;

            // Check if it's a file (not a subdirectory)
            if (is_file($filePath)) {
                // Verify it's an image extension
                $extension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
                if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'])) {
                    // Build the public facing URL (e.g https://seekingsynths.com/images/filename.png)
                    $imageUrls[] = url('images/' . $file);
                }
            }
        }

        return $imageUrls;
    }

    public function getAllArchivedImages(): array
    {
        $directory = public_path('images/archive');
        $imageUrls = [];

        // Ensure directory exists
        if (!is_dir($directory)) {
            return $imageUrls;
        }

        // scan the directory
        $files = scandir($directory);

        foreach ($files as $file) {
            // Skip hidden directorys like '.' and '..'
            if ($file === '.' || $file === '..') {
                continue;
            }

            $filePath = $directory . DIRECTORY_SEPARATOR . $file;

            // Check if it's a file (not a subdirectory)
            if (is_file($filePath)) {
                // Verify it's an image extension
                $extension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
                if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'])) {
                    // Build the public facing URL (e.g https://seekingsynths.com/images/filename.png)
                    $imageUrls[] = url('images/archive/' . $file);
                }
            }
        }

        return $imageUrls;
    }
}
