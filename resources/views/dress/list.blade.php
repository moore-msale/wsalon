<div class="col-8 my-2">
@for($i = 0; $i < 4; $i++)
    <div class=" mb-3">
        <img src="{{ asset('images/catalog-photo1.png') }}" class="img-fluid" alt="">
    </div>
@endfor
</div>
<div class="col-4 position-sticky my-2" style="top: 0; right: 0; color: #3A3C51; box-shadow: 2px 4px 50px rgba(0, 0, 0, 0.15); border-radius: 5px; padding: 6% 4%; height: 100%;">
    <h4 class="mb-4" style="font-weight: 600;">Название платья</h4>
    <p class="font-raleway" style="margin-bottom: 0.5rem;">Дизайнер</p>
    <h5 class="font-raleway mb-3" style="font-weight: 600;">Daria Karlozi</h5>

    <p class="font-raleway" style="margin-bottom: 0.5rem;">Страна</p>
    <h5 class="font-raleway mb-3" style="font-weight: 600;">Испания</h5>

    <p class="font-raleway" style="margin-bottom: 0.5rem;">Размер</p>
    <h5 class="font-raleway mb-3" style="font-weight: 600;">34 - 46</h5>

    <p class="font-raleway" style="margin-bottom: 0.5rem;">Цвет</p>
    <h5 class="font-raleway" style="font-weight: 600;">Цвет слоновой кости</h5>

    <div class="d-flex justify-content-start">
        <button type="submit" class="btn rounded-pill text-dark border-0 mt-4 font-raleway" style="box-shadow: 0px 4px 50px rgba(217, 218, 218, 0.5);background: #C1CEBE; font-weight: 600;">Записаться на примерку</button>
    </div>
</div>
