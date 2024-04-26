<!-- 
    * Chat page
    * Author: Unleash
    * Author URL: https://unleash.host
    * Version: 1.0.0
    * License: MIT
 -->

<!-- 
    * include the layout
  -->
<?php include APP_FOLDER . '/views/dashboard/layout/open.php' ?>

<!-- 
    * include the header
  -->

<?php include APP_FOLDER . '/views/dashboard/layout/header.php' ?>
<div class="chat-app d-flex flex-wrap">
    <div class="contact <?= !isset($cur_conversation) ? 'w-100' : 'd-none d-md-block' ?>">
        <div class="header d-flex align-center">
            <img src="<?= $_SESSION['USER']->avatar ?? APP_URL . "/assets/images/" .  $_SESSION['USER']->role . ".png" ?>">
            <div class="form-group flex-1">
                <input class="w-100" type="text" name="search" id="search" placeholder="Search">
            </div>
        </div>
        <hr>
        <div class="chats">
            <h4 class="title">Chats</h4>
            <ul>
                <?php if ($conversations) : ?>
                    <?php foreach ($conversations as $conv) : ?>
                        <a href="<?= APP_URL ?>/chat/<?= $conv->contact->id ?>">
                            <li class=" <?php echo $path == APP_URL . '/chat/' . $conv->contact->id ? 'active' : '' ?> d-flex gap-3 align-center">
                                <div class="avatar">
                                    <img src="<?= $conv->contact->avatar ?? APP_URL . "/assets/images/" .  $conv->contact->role . ".png" ?>">
                                </div>
                                <div class="label">
                                    <div class="d-flex space-between">
                                        <h4 class="name"><?= $conv->contact->username ?></h4>
                                        <span class="date"><?= date('M d', strtotime($conv->created_at)) ?></span>
                                    </div>
                                    <p class="last_message"><?= $conv->message_text ?></p>
                                </div>
                            </li>
                        </a>
                    <?php endforeach ?>
                <?php else : ?>
                    <p class="text-center mt-5">Find new contacts</p>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="conversation <?= !isset($cur_conversation) ? 'd-none d-md-block' : '' ?>">
        <?php if (!isset($cur_conversation)) : ?>
            <div class="empty">
                <div class="svg">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--dark rounded-0 text-high-emphasis iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24" style="font-size: 50px; height: 50px; width: 50px;">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 21V8a3 3 0 0 1 3-3h10a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H8l-4 4M8 9h8m-8 4h6"></path>
                    </svg>
                </div>
                <p>Start Conversation</p>
            </div>
        <?php else : ?>
            <div class="chat-conv d-flex flex-direction-column">
                <div class="header d-flex space-between">
                    <div class="d-flex gap-3 align-center">
                        <div class="avatar">
                            <img src="<?= $cur_conversation->avatar ?? APP_URL . "/assets/images/" .  $cur_conversation->role . ".png" ?>">
                        </div>
                        <div class="label">
                            <?php if ($cur_conversation->role == 'influencer') : ?>
                                <h4 class="name"><?= $cur_conversation->first_name . ' ' . $cur_conversation->last_name ?? '' ?></h4>
                            <?php elseif ($cur_conversation->role == 'brand') : ?>
                                <h4 class="name"><?= $cur_conversation->name ?></h4>
                            <?php endif ?>
                            <p class="last_message"><?= $cur_conversation->job ?? '' ?></p>
                        </div>
                    </div>
                    <div class="d-flex align-center">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" tag="i" class="v-icon notranslate v-theme--dark iconify iconify--tabler" width="1em" height="1em" viewBox="0 0 24 24" style="font-size: 22px; height: 22px; width: 22px;">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="12" cy="19" r="1"></circle>
                                <circle cx="12" cy="5" r="1"></circle>
                            </g>
                        </svg>
                    </div>
                </div>
                <hr>
                <div class="body" id="chat">
                    <ul>
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
                    </ul>
                </div>
                <form action="#" method="POST" class="d-flex justify-center">
                    <input type="text" name="message" placeholder="Type your message..." required>
                    <button class="btn btn-primary">SEND</button>
                </form>
            </div>
        <?php endif ?>
    </div>
</div>

<script>
    const chat = document.getElementById("chat");
    chat.scrollTop = chat.scrollHeight - chat.clientHeight;

    setInterval(() => {
        if (chat.scrollHeight - chat.clientHeight != chat.scrollTop) {
            return;
        }
        // refresh conversation fetch in /api/chat/{id} js plain text
        // check before send request if the scroll in bottom
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '<?= APP_URL ?>/api/chat/<?= $cur_conversation->user_id ?>');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                console.log("test");
                document.querySelector('#chat ul').innerHTML = xhr.responseText;
                chat.scrollTop = chat.scrollHeight - chat.clientHeight;
            } else {
                console.error('Request failed. Returned status of ' + xhr.status);
            }
        };
        xhr.send();
        chat.scrollTop = chat.scrollHeight - chat.clientHeight;
    }, 1000);

    const search = document.getElementById("search");
    const chats = document.querySelector('.chats');

    search.addEventListener('keyup', (e) => {
        const value = e.target.value.toLowerCase();
        const items = chats.querySelectorAll('li');
        items.forEach(item => {
            const name = item.querySelector('.name').innerText.toLowerCase();
            if (name.indexOf(value) > -1) {
                item.style.display = 'flex';
            } else {
                item.style.display = 'none';
            }
        })
    })
</script>

<?php include APP_FOLDER . '/views/dashboard/layout/close.php' ?>