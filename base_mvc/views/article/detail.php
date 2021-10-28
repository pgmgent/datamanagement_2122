<h1>Detail pagina van een article</h1>

<?php


print_r( $article );

?>

<script>

fetch('/api/get_articles')
.then(response => response.json())
.then(data => {
  console.log(data);
})
.catch((error) => {
  console.log(error);
});
</script>