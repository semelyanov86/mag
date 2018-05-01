<?php

return [
    'email-title' => 'Email verification',
    'email-intro'=> 'Для подтверждения электронной почты перейдите по ссылке ниже',
    'email-button' => 'Подтверждение email',
    'message' => 'Thanks for signing up! Please check your email.',
    'success' => 'Вы полностью прошли процесс регистрации на сайте. Теперь вы можете пользоваться всем функционалом.',
    'again' => 'You must verify your email before you can access the site. ' .
                '<br>If you have not received the confirmation email check your spam folder.'.
                '<br>To get a new confirmation email please <a href="' . url('confirmation/resend') . '" class="alert-link">click here</a>.',
    'resend' => 'Мы выслали специальное письмо с подтверждением вашего адреса электронной почты. Пожалуйста, проверьте свой почтовый ящик, в том числе и папку со спамом.'
];
