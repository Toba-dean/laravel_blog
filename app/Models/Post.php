<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{

  public $date;
  public $title;
  public $excerpt;
  public $slug;
  public $body;

  public function __construct($date, $title, $body, $excerpt, $slug)
  {
    $this->date = $date;
    $this->title = $title;
    $this->excerpt = $excerpt;
    $this->body = $body;
    $this->slug = $slug;
  }

  public static function all()
  {
    return cache()->rememberForever("post.all", function () {
      return collect(File::files(resource_path("posts/")))
        ->map(fn ($file) => YamlFrontMatter::parseFile($file))
        ->map(
          fn ($document) => new Post(
            $document->date,
            $document->title,
            $document->body(),
            $document->excerpt,
            $document->slug
          )
        )
        ->sortByDesc('date');
    });
  }

  // public static function find($slug)
  // {
  //   $path = resource_path("posts/{$slug}.html");
  //   if (!file_exists($path)) {
  //     throw new ModelNotFoundException();
  //   }

  //   return cache()->remember(
  //     "post.{slug}",
  //     60,
  //     fn () => file_get_contents($path)
  //   );
  // }

  static public function find($slug)
  {
    return static::all()->firstWhere("slug", $slug);
  }

  static public function findorfail($slug)
  {
    $post = static::find($slug);
    if ($post === null) {
      throw new ModelNotFoundException();
    }
    return $post;
  }
}
