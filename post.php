<?php
include_once('templates/header.php');

if (isset($_GET['id'])) {
  $postId = $_GET['id'];
  $currentPost;

  foreach ($posts as $post) {
    if ($post['id'] == $postId) {
      $currentPost = $post;
    }
  }
}
?>

<main id="post-container">
  <div class="content-container">
    <h1 id="main-title">
      <?= $currentPost['title'] ?>
    </h1>
    <p id="post-description">
      <?= $currentPost['description'] ?>
    </p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
    <p class="post-content">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nihil alias mollitia corrupti, dolore animi et nam explicabo harum fugit recusandae ducimus aspernatur reprehenderit tempora odit obcaecati pariatur amet repellendus?
      Molestiae debitis sit, aliquid facere voluptas numquam, laboriosam facilis beatae illum dolore eveniet ratione consequuntur quae quia mollitia eaque aspernatur expedita tempora ducimus deleniti fuga asperiores assumenda. Reiciendis, at modi!
      Est deserunt, ducimus libero labore sed quia porro, voluptates aliquid beatae cum magni inventore itaque ut? Natus, iure eos recusandae impedit in dolores aliquam necessitatibus ut! Expedita earum hic accusantium!
      Maiores ipsa maxime placeat quidem iste voluptatum, rem non deserunt eligendi quam aliquam reiciendis in qui esse, facilis nemo voluptates nobis provident possimus, exercitationem sunt nisi sint. Doloribus, error ipsam!
      Hic animi quae, vitae minus, inventore a et id vel quia aliquam ipsa sequi alias, voluptates at dolor perferendis qui ducimus consectetur eos. Aliquid nobis ea velit obcaecati, nisi excepturi.
    </p>
  </div>
  <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
      <?php foreach ($currentPost['tags'] as $tag): ?>
        <li><a href="#">
            <?= $tag ?>
          </a></li>
      <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
      <?php foreach ($categories as $categorie): ?>
        <li>
          <a href="#">
            <?= $categorie ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </aside>
</main>


<?php
include_once('templates/footer.php');
?>