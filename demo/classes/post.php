<?
class Post {
    public $id;
    public $author;
    public $title;
    public $content;
    public $category = [];
    public $image;
}

$post = new Post();

$post->id

$post->postType

$post['title'];

var_dump($post);

if($post->image) { ?>
<h1><? echo $post->title ?></h1>
<? }
if($post->content){ ?>
<p><? echo $post->content ?></p>
<? }
if($post->category) { ?>
    <ul>
    <? foreach($post->category as $category) {?>
        <li><? echo $category; ?></li>
    }
    </ul>
}