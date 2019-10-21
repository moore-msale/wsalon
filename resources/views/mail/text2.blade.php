@component('mail::message')
    <html>
    <body>
    <div class="font-raleway" style="padding:7%; border:1px #3a3c51 solid; border-radius:30px;">
        <br>
        <br>
        <h2 class="text-fut-bold"><strong>Новая заявка на примерку</strong></h2>
        <br>
        Информация о клиенте
        <br>
        <br>
        <strong class="text-fut-bold">Имя:</strong> {{ $formData['name'] }}<br>
        <strong class="text-fut-bold">Телефон:</strong> {{ $formData['phone'] }}<br>
        <strong class="text-fut-bold">Email:</strong> {{ $formData['email'] }}<br>
        <strong class="text-fut-bold">Дата примерки:</strong> {{ $formData['date'] }}<br>
        <strong class="text-fut-bold">Время примерки:</strong> {{ $formData['time'] }}<br>
        <strong class="text-fut-bold">Платье:</strong> {{ $formData['id'] }}<br>
        <br>
    </div>
    </body>
    </html>
@endcomponent
