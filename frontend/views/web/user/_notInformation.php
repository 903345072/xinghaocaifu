<?php foreach($notReadData as $notread) :?>
    <ul>
        <li class="li03">
            <a href="<?= url(["user/infDetails", 'id' => $notread->id]) ?>">
                <span><img src="/images/bank.png"></span>
                <p class="pp1"><?= $notread->title ?></p>
                <p class="pp2"><?= $notread->updated_at ?></p>
            </a>
        </li>
    </ul>
<?php endforeach ?>