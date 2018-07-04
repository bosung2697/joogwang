<div class="sidebar product-selector {{ preg_match('/\/admin\/productintro/', $_SERVER['REQUEST_URI'])||preg_match('/\/admin\/productintro.+/', $_SERVER['REQUEST_URI'])||preg_match('/\/admin\/equipment/', $_SERVER['REQUEST_URI'])||preg_match('/\/admin\/equipment.+/', $_SERVER['REQUEST_URI'])||preg_match('/\/admin\/ventureawards/', $_SERVER['REQUEST_URI'])||preg_match('/\/admin\/ventureawards.+/', $_SERVER['REQUEST_URI']) ? '' : 'hide'}}">
    <div class="sidemenu">Product</div>
    <div class="sideuser">목록</div>
    <div class="sidesubmenu">
        <ul>
            <li class="selector  {{ preg_match('/\/admin\/productintro.+/', $_SERVER['REQUEST_URI']) ? 'active' : ''}}"><a
                        href="/admin/productintro/">제품소개</a></li>
            <li class="selector  {{ preg_match('/\/admin\/ventureawards.+/', $_SERVER['REQUEST_URI']) ? 'active' : ''}}"><a
                        href="/admin/ventureawards/">인증수상</a></li>
            {{--<li class="selector  {{ preg_match('/\/admin\/equipment.+/', $_SERVER['REQUEST_URI']) ? 'active' : ''}}"><a--}}
                        {{--href="/admin/equipment/">보유장비</a></li>--}}
        </ul>
    </div>
</div>