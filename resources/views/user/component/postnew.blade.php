<section class="section section-aside-tinmoidang">
    <div class="section-header">
        <span class="section-title">Tin mới đăng</span>
    </div>
    <ul class="post-listing aside clearfix">
        @foreach($postnews as $item)
        <li class="post-item clearfix normal" post-id="{{ $item -> id }}">
            <a href="{{ route('get.category.page', ['page' => $item -> id])}}">
                <figure>
                    @if(isset($item->images[0]))
                        <img class="lazy_done" src="{{$item->images[0]}}" data-src="{{$item->images[0]}}" alt="{{$item -> name}}" height="100" width="100" layout="responsive" data-loaded="true">
                    @else
                        <img class="lazy_done" src="{{asset('user/asset/image/thumb_default.jpg')}}" id="none" data-src="{{$image_default}}" height="100" width="100" layout="responsive" data-loaded="true">
                    @endif
                </figure>
                <div class="post-meta">
                        <a style="color: #055699;" href="{{route('get.category.page', ['page' => $item -> id])}}">
                            <span class="star star-5"></span> 
                            {{$item -> name}}
                        </a>
                    <span class="post-price">{{number_format($item -> price)}}<sup>đ</sup>/tháng</span>
                    <time class="post-time" title="{{$item->created_at}}">{{$item->created_at}}</time>
                </div>
            </a>
        </li>
        @endforeach
    </ul>
</section>