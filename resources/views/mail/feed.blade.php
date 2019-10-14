@component('mail::message')
    <html>
    <body>
    <div class="font-raleway" style="padding:7%; border:1px #3a3c51 solid; border-radius:30px;">
        <br>
        <br>
        <h2 class="text-fut-bold"><strong>Новый отзыв с сайта</strong></h2>
        <br>
        Информация о клиенте
        <br>
        <br>
        <strong class="text-fut-bold">Имя:</strong> {{ $formData['name'] }}<br>
        <strong class="text-fut-bold">Телефон:</strong> {{ $formData['phone'] }}<br>
        <strong class="text-fut-bold">Заголовок отзыва:</strong> {{ $formData['title'] }}<br>
        <strong class="text-fut-bold">Отзыв:</strong> {{ $formData['feed'] }}<br>

        <strong class="text-fut-bold">Опубликовать или изменить отзыв вы можете сделать в админ панели сайта во вкладке "Отзывы"</strong>

        <br>
    </div>
    </body>
    </html>
@endcomponent
