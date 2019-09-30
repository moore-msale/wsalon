
@foreach($dresses as $dress)
    <div class="col-sm-6 col-md-4 col-lg-4 item text-center pt-lg-4 pt-4 position-relative" data-aos="fade-up">
        <a href="{{ route('dress',$dress->id) }}" title="{{ $dress->title }}" class="dressimage "  data-fancybox="gallery">
            <img class="img-fluid w-100" src="{{ asset('storage/'.$dress->image)  }}">
            <div class="position-absolute bg-white shadow p-3" style="bottom: 0; width: 92%">
                <h4 class="ml-2 text-left" style="color: #3A3C51; ">{{ $dress->title }}</h4>
                <div  class="d-flex text-left">
                    <div class="mr-3 ml-2">
                        <p class="font-raleway mb-0" style="color: #3A3C51; font-size: 0.8rem;">Дизайнер</p>
                        <h5 class="font-raleway" style="color: #3A3C51; font-weight: 600;  font-size: 0.9rem;">{{ $dress->author->name }}</h5>
                    </div>
                    <div>
                         <p class="font-raleway mb-0" style="color: #3A3C51; font-size: 0.8rem;">Страна</p>
                        <h5 class="font-raleway" style="color: #3A3C51; font-weight: 600;  font-size: 0.9rem;">{{ $dress->country }}</h5>
                    </div>
                </div>            
            </div>   
        </a>
         
    </div>
@endforeach

@push("styles")
<link rel="stylesheet" href="http://fancyapps.com/fancybox/source/jquery.fancybox.css">
@endpush

@push("scripts")
<script src="http://fancyapps.com/fancybox/source/jquery.fancybox.js">
</script>
<script>
    $(".dressimage").fancybox({
    helpers : {
        title: {
            type: 'inside',
            position: 'right'
        }
    },
    nextEffect: 'fade',
    prevEffect: 'fade'
});
</script>
@endpush