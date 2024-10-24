<?php
    include_once("templates/header.php");
    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>
    <main class="post-container">
        <div class="content-container">
            <h1 class="main-title"><?=$currentPost['title']?></h1>
            <p id="post-description"><?=$currentPost['description']?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL?>/img/<?= $currentPost['img'] ?>" alt="">
            </div>
            <p class="post-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, quidem aliquam facere nemo reprehenderit, necessitatibus vero ab consequatur laboriosam autem cum amet rerum ea accusamus, eaque voluptatibus error magni omnis?
                Perspiciatis fuga reprehenderit excepturi asperiores quas, laudantium, mollitia nulla blanditiis voluptatem obcaecati in labore vero libero veritatis soluta, rerum molestias quibusdam unde tempore recusandae laboriosam. Nulla minima quas quod eos.
                Reiciendis odit, unde mollitia minima illum at cum quisquam officiis inventore numquam voluptas, assumenda nemo ipsa vitae eaque? Labore dicta corrupti repudiandae excepturi culpa eligendi reiciendis, vero cumque numquam inventore.
                Dolores eos pariatur non quisquam officia voluptates asperiores eius ullam, corrupti, nemo debitis. Praesentium consectetur natus veniam, temporibus corporis eius animi qui aperiam amet, rerum est facere doloribus, libero vero?
                Repudiandae fugit minima quidem, reiciendis numquam tempora voluptate sit ea eius! Placeat cumque distinctio incidunt autem fuga aliquam magnam nesciunt nulla quod necessitatibus earum sunt, perspiciatis explicabo commodi odio dolore!
            </p>
        </div>
        <aside class="nav-container">
            <h3 class="tags-title">Tags</h3>
            <ul class="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li>
                        <a href="#"><?=$tag?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <h3 class="categories-title">Categorias</h3>
            <ul class="categories-list">
                <?php foreach($categories as $category): ?>
                    <li>
                        <a href="#"><?=$category?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
<?php
    include_once("templates/footer.php");
?>