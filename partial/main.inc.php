
    <main>
    <div class="pictures" role="img" aria-labelledby="cover">
        <picture id="cover">
            <source srcset="./asset/cover.jpg" media="(min-width: 1024px)">
            <source srcset="./asset/cover.jpg" media="(min-width: 768px)">
            <img 
                src="<?= data["img"] ?>" 
                alt="Description de l'image"
                loading="lazy" 
            >   
        </picture>
    </div>
        
        <article>
            <h2>
                <span aria-hidden="true">📈</span><?= data["subTitle"] ?>
            </h2>
            <p>
               <?= data["text"] ?>
            </p>
        </article>
        <aside>
            <blockquote>
                <p>Description de l'article et l'analyse</p>
            </blockquote>
        </aside>
    </main>