<?php
include_once ("templates/header.php");
if(isset($_GET["id"])){
$postId=$_GET["id"];
$currentPost;

foreach($posts as $post){

    if($post["id"]==$postId){
        $currentPost=$post;
    }
}

}
?>
    <main class="post-container">

    <div class="content-container">

    <h1 id="main-title"> <?=$currentPost["title"]?></h1>
    <p id="post-description"><?=$currentPost["description"]?></p>
    <div class="img-container">
        <img src="<?=$BASE_URL?>/img/<?=$currentPost['img']?>" alt="<?=$currentPost["title"]?>">
    </div>
    <p class="post-content">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem sint iure est mollitia. Numquam officiis vitae exercitationem dolorem magnam veritatis sed consectetur, repudiandae nihil, corrupti eius repellat nobis dolore iusto.
        Culpa nam iure doloribus a eaque beatae aliquid, ullam magnam labore corrupti? Itaque, laudantium id praesentium repellat ipsum, cupiditate expedita quam saepe cumque aliquid inventore fuga quasi! Cum, laboriosam sequi!
        Repudiandae, quos dolore corrupti aspernatur fuga recusandae laudantium voluptas vitae culpa earum laborum incidunt provident exercitationem voluptates doloribus excepturi nobis sequi error quidem molestiae dolorem molestias aliquam reprehenderit. Aliquid, a?
        Quae voluptatibus unde ab repudiandae expedita porro assumenda, maxime ullam similique iste consequuntur dignissimos explicabo accusamus, harum sed repellat recusandae sequi, ipsam illo debitis minus amet ea natus modi! Ipsam.
        Adipisci placeat veniam odit, perspiciatis qui itaque rerum? Numquam natus, laudantium sed voluptatum ipsam error maiores soluta aperiam nulla, voluptate officia deleniti. Veniam debitis explicabo mollitia laboriosam exercitationem vel atque?
    </p>


    <p class="post-content">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem sint iure est mollitia. Numquam officiis vitae exercitationem dolorem magnam veritatis sed consectetur, repudiandae nihil, corrupti eius repellat nobis dolore iusto.
        Culpa nam iure doloribus a eaque beatae aliquid, ullam magnam labore corrupti? Itaque, laudantium id praesentium repellat ipsum, cupiditate expedita quam saepe cumque aliquid inventore fuga quasi! Cum, laboriosam sequi!
        Repudiandae, quos dolore corrupti aspernatur fuga recusandae laudantium voluptas vitae culpa earum laborum incidunt provident exercitationem voluptates doloribus excepturi nobis sequi error quidem molestiae dolorem molestias aliquam reprehenderit. Aliquid, a?
        Quae voluptatibus unde ab repudiandae expedita porro assumenda, maxime ullam similique iste consequuntur dignissimos explicabo accusamus, harum sed repellat recusandae sequi, ipsam illo debitis minus amet ea natus modi! Ipsam.
        Adipisci placeat veniam odit, perspiciatis qui itaque rerum? Numquam natus, laudantium sed voluptatum ipsam error maiores soluta aperiam nulla, voluptate officia deleniti. Veniam debitis explicabo mollitia laboriosam exercitationem vel atque?
    </p>
    </div>

    <aside id="nav-container">

<h3 id="tags-title">Tags</h3>
<ul id="tag-list">
<?php
foreach($currentPost["tags"] as $tag):?>
<li><a href="#"><?=$tag?></a></li>

<?php endforeach;
?>
</ul>
<h3 id="categories-title">Categorias</h3>
<ul id="categories-list">
<?php foreach($categorias as $category):?>
<li><a href="#"><?=$category?></a></li>
<?php endforeach;  ?>
</ul>
</aside>
    </main>

 
    <?php
include_once ("templates/footer.php");
?>