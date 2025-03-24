<!-- head -->
<?php
        include_once __DIR__ ."/controller/config.php";
        include_once __DIR__ ."/model/data.php";
        include_once __DIR__ ."/partial/head.inc.php";
        include_once __DIR__ .'/controller/listlang.php';

  
        
?>
  
<main>
<article>
        <h2>
            <span aria-hidden="true">
            📈</span>Langages
        </h2>
            <table>
                <caption>
                    Langages de programmation
                </caption>
                <thead>
                    <tr>
                        <th>Lang</th>
                        <th>Type</th>
                        <th>Version</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php foreach($languages as $item):?>
                        <tr>
                            <td><?= $item['lang'] ?></td>
                            <td><?= $item['type'] ?></td>
                            <td><?= $item['version'] ?></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
          
        </article> 
</main>
<?php   
    # footer
        include_once __DIR__ ."/partial/footer.inc.php";

?>