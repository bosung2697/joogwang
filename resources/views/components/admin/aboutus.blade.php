<div class="sidebar aboutus-selector {{ preg_match('/\/admin\/awards/', $_SERVER['REQUEST_URI'])||preg_match('/\/admin\/awards.+/', $_SERVER['REQUEST_URI']) ? '' : 'hide'}}">
    <div class="sidemenu">AboutUs</div>
    <div class="sideuser">목록</div>
    <div class="sidesubmenu">
        <ul>
            {{--<li class="liactive"> 사이트정보</li>--}}
            <li class="selector  {{ preg_match('/\/admin\/awards.+/', $_SERVER['REQUEST_URI']) ? 'active' : ''}}"><a
                        href="/admin/awards/">수상실적</a></li>
            {{--<li> 입금계좌</li>--}}
            {{--<li> 사이트정책</li>--}}
        </ul>
    </div>
</div>