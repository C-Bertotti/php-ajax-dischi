        <main>
            <div class="container">
                <?php foreach($albums as $album) : ?>
                        <div class="album">
                            <?php echo "<img src='{$album['poster']}' alt='' class='album__img'>" ?>
                            <div class="album__caption">
                                <?php echo "<h3> {$album['title']} </h3>" ?>
                                <?php echo "<p class='author'> {$album['author']} </p>" ?>
                                <?php echo "<p class='year'> {$album['year']} </p>" ?>
                            </div>
                        </div>
                <?php endforeach ?>
                

            </div>
        </main>
    
