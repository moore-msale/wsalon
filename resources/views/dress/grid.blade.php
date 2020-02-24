@push('styles')
    <style>
        .imgshine
        {
            position: relative;
            overflow: hidden;
        }
        .imgshine:before
        {
            content: "";
            opacity:0.5;
            background-color: #fefefe !important;
            height: 100%;
            width: 5em;
            display: block;
            position: absolute;
            top: 0;
            left: -22em;
            -webkit-transform: skewX(-30deg) translateX(0);
            transform: skewX(-30deg) translateX(0);
            transition: none;
            z-index: 60;
        }
        .mainshine:hover .dressimage .imgshine:before
        {
            -webkit-transform: skewX(-30deg) translateX(55em);
            transform: skewX(-30deg) translateX(55em);
            transition: all 0.8s ease-in-out;
        }
    </style>
@endpush
@foreach($dresses as $dress)
    <div class="col-sm-6 col-md-4 col-lg-4 item text-center pt-lg-4 pt-4 position-relative mainshine" data-aos="fade-up">
        <a href="{{ route('dress',$dress->id) }}" class="dressimage ">
            <div class="imgshine">
            <img class="img-fluid w-100" src="{{ asset('storage/'.$dress->image)  }}">
            </div>
            <div class="position-absolute bg-white shadow p-3" style="bottom: 0; width: 92%; z-index:100;">
                @if(isset($dress->title))
                <h4 class="ml-1 text-left font-caveat font-2x" style="color: #3A3C51; ">{{ $dress->title }}</h4>
                @endif
                <div class="d-flex text-left">
                    @if(isset($dress->author->name))
                    <div class="mr-3 ml-2">
                        <p class="font-raleway mb-0" style="color: #3A3C51; font-size: 0.8rem;">Дизайнер</p>
                        <h5 class="font-raleway" style="color: #3A3C51; font-weight: 600;  font-size: 0.9rem;">{{ $dress->author->name }}</h5>
                    </div>
                    @endif
                    @if(isset($dress->country))
                    <div>
                         <p class="font-raleway mb-0" style="color: #3A3C51; font-size: 0.8rem;">Страна</p>
                        <h5 class="font-raleway" style="color: #3A3C51; font-weight: 600;  font-size: 0.9rem;">{{ $dress->country }}</h5>
                    </div>
                    @endif
                </div>            
            </div>   
        </a>
         
    </div>
@endforeach

