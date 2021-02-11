@php
    $slider = \App\Models\Contents::select('id','title','image','type')->limit(4)->get();
@endphp
<!-- Testimonial Start -->
<div class="testimonial">
    <div class="container">
        @php
            $i=0;
        @endphp
        @foreach($slider as $rs)
            @php
                $i+=1;
            @endphp
        <div class="section-header @if($i==1) active @endif ">
            <h2>Kurumsal</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium ornare velit non</p>
        </div>

            <div class="row"  >
                <div class="col-12">
                    <div class="testimonial-slider-nav">
                        <div class="slider-nav"><img src="{{$rs->image_url}}" style="height: 500px" alt="Testimonial">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider">
                        <div class="slider-item">
                            <h3>{{$rs->title}}</h3>
                            <h3>{{$rs->type}}</h3>
                            <a href="{{route('contents',['id'=>$rs->id,'slug'=>$rs->slug])}}"> </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- Testimonial End -->
