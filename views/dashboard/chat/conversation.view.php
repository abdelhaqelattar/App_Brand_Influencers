<?php if ($cur_conversation->messages) : ?>
    <?php foreach ($cur_conversation->messages as $message) : ?>
        <?php if (!isset($last_date) || date('M d', strtotime($message->created_at)) != $last_date) : ?>
            <li class="text-center text-14">
                <?php echo $last_date = date('M d', strtotime($message->created_at)) ?>
            </li>
        <?php endif ?>
        <li class="item d-flex gap-3 <?= $message->sender_id == $_SESSION['USER']->id ? 'flex-row-reverse' : '' ?>">
            <!-- <div class="avatar">
                <img src="https://demos.pixinvent.com/vuexy-vuejs-admin-template/demo-1/assets/avatar-2.11d6be6e.png" alt="">
            </div> -->
            <div class="message">
                <p><?= $message->message_text ?></p>
                <span><?= date('h:i A', strtotime($message->created_at)) ?></span>
            </div>
        </li>
    <?php endforeach ?>
<?php endif ?>