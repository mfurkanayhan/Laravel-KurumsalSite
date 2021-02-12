@php
    $slider = \App\Models\Contents::select('id','title','image','type')->limit(4)->get();
@endphp
<!-- Testimonial Start -->
<div class="testimonial">
    <div class="container">
        @php
            $i=0;
        @endphp

        <div class="section-header @if($i==1) active @endif ">
            <h2>Kurumsal</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium ornare velit non</p>
        </div>
            @foreach($slider as $rs)
                @php
                    $i+=1;
                @endphp
            <div class="row"  >
                <div class="col-12">
                    <div class="testimonial-slider-nav">
                        <div class="slider-nav"><img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" style="height: 500px" alt="Testimonial">
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
                            <button type="input"> <a href="{{route('contents',['id'=>$rs->id,'type'=>$rs->type])}}"> </a>  </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- Testimonial End -->
