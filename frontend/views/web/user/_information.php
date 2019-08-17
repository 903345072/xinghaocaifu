    <?php foreach($readData as $read) :?>
        <ul>
            <li class="li03">
                <a href="<?= url(["user/infDetails", 'id' => $read->id])?>">
                    <span><img src="/images/bank.png"></span>
                    <p class="pp1"><?= $read->title ?></p>
                    <p class="pp2"><?= $read->updated_at ?></p>
                </a>
            </li>
        </ul>
    <?php endforeach ?>