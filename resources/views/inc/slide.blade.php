
	<div class="amazingslider-wrapper" id="amazingslider-wrapper-1">
        <div class="amazingslider" id="amazingslider-1">
            <ul class="amazingslider-slides">
               @foreach($slide as $s)
                <li><a href="#" target="_blank" title=""><img src="{!! asset('uploads/slider/'.$s->slider_image)!!}" alt="" title=""/></a>
                </li>
                @endforeach
                <!-- <li><a href="#" target="_blank" title=""><img src="{!! asset('web/images/y5.jpg')!!}" alt="" title=""/></a>
                </li>
                <li><a href="#" target="_blank" title=""><img src="{!! asset('web/images/y9.jpg')!!}" alt="" title=""/></a>
                </li>
                <li><a href="#" target="_blank" title=""><img src="{!! asset('web/images/y6.jpg')!!}" alt="" title=""/></a>
                </li> -->
               
            </ul>        
        </div>
    </div> 
    